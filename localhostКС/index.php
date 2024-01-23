<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Psycho</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="top">
			<img onclick="menuleft()" src="img/menu.png" width="30">
			<h1 id = "wordJK">Бабах:)</h1>
			<h1 id = "Entrance">Морти</h1>
		</div>
		<div id="menu">
			<h3><a href="comics/index.php">Добавить комикс</a></h3>
		</div>
		<div class = "content">
			<div class="center">
				<img src="img/body.jpg">
				<h1 id = "head1" class = "psy">Рик</h1>
				<h1 id = "head2" class = "cho">Морти</h1>
				<h1 class = "Fan">Fan Comics Studio<br>Рик и Морти</h1>
			</div>

			<?php 
				try { 
					$conn = new PDO("mysql:host=localhost;port=3306;dbname=comics", "root", ""); 
					//  echo "Database connection established"; 
					$sql = "SELECT * FROM readComic"; 
					$result = $conn->query($sql); 

					echo "<div class='button'>"; 
						while ($row = $result->fetch()) { 
						echo "<div onClick='cards()' id='cards'>"; 
							echo "<h3>" . "Название: " . $row["title"] . "</h3>"; 
							echo "<h4>" . "Автор: " . $row["name"] . "</h4>";
							echo "<h5 id = 'composition'>" . "Автор: " . $row["composition"] . "</h5>";  
						echo "</div>"; 
						} 
					echo "</div>"; 
				} catch (PDOException $e) { 
					echo "Connection failed: " . $e->getMessage(); 
				} 
			?> 
		</div>
		<noscript>Включите js</noscript>
		<script src="main.js"></script>
	</body>
</html>