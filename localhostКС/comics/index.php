<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Test</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class = "content">
			<a class = "back" href="../index.php">назад</a>
			<form method="post" enctype="multipart/form-data">
				<div class = "top">
					<div> 
						<h1>Введите название истории</h1> 
						<input name="NameStore" id="NameStore" type="text"> 
					</div>
				</div> 
				<div class = "cent">
					<div> 
						<h1>Введите ваше имя или ваш ник нейм</h1> 
						<input name="userName" id="userName" type="text"> 
					</div> 
				</div>
				<div class = "butt">
					<div> 
						<h1>Пишите историю</h1> 
						<textarea name="store" id="store" type="text"> </textarea>
					</div> 
				</div>
				<input id="addStore" type="submit" value="Добавить">
			</form>
		</div>

		<?php 
			//получение данных 
			$NameStore = $_POST["NameStore"]; 
			$userName = $_POST["userName"]; 
			$store = $_POST["store"];  
			
			$conn = new PDO("mysql:host=localhost;port=3306;dbname=comics", "root", ""); 
			echo "Database connection established"; 
			//Добавление данных 
			try { 
				if ($_SERVER["REQUEST_METHOD"] == "POST") { 
					$sql = "INSERT INTO `readComic`(name, title, composition) VALUES (:userName, :NameStore, :store)";
					$stmt = $conn->prepare($sql);
					$stmt->bindParam(':userName', $userName);
					$stmt->bindParam(':NameStore', $NameStore);
					$stmt->bindParam(':store', $store);
					$stmt->execute();
				} 
			} catch (PDOException $e) { 
				echo "Connection failed: " . $e->getMessage(); 
			} 
		?> 
		<noscript>Включите js</noscript>
		<script src="main.js"></script>
	</body>
</html>