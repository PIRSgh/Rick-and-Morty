// Получение данных
let wordJK = document.getElementById('wordJK');
let Entrance = document.getElementById('Entrance');
let head1 = document.getElementById('head1');
let head2 = document.getElementById('head2');
let menu = document.getElementById('menu');

// Все фразы Рика и Морти
let AllPhrasesJoker = [
  "Жизнь состоит из маленьких уступок",
  "Не позволяйте имени обмануть вас",
  "Когда умные люди счастливы, они перестают узнавать себя",
  "Иногда наука - это больше искусство",
  "Не трогай это, это за пределами твоего понимания"
];

//Меняем фразу каждые 2 сек
setInterval(function() {
    var rand = Math.floor(Math.random() * AllPhrasesJoker.length);
    wordJK.innerHTML = AllPhrasesJoker[rand];
}, 2000);

//Меню всплыывает
let cauntMenu = 0;
function menuleft(){
    if(cauntMenu == 0){
        menu.style.left = "0px";
        cauntMenu++;
    }
    else if(cauntMenu == 1){
        menu.style.left = "-250px";
        cauntMenu--;
    }
}

//Делаем эфект для Psycho
function Phrases(){
    function PhrasesOff(){
        if(head1.style.textShadow = '#FC0 0px 0 10px'){
            head1.style.textShadow = 'red -10px 20px 10px';
            head2.style.textShadow = 'red 10px 20px 10px';
        }
    }
    function PhrasesOn(){
        if(head1.style.textShadow = 'red -10px 20px 10px'){
            head1.style.textShadow = '#FC0 0px 0 10px';
            head2.style.textShadow = '#FC0 0px 0 10px';
        }
    }
    setTimeout(PhrasesOff,1000);
    setTimeout(PhrasesOn,2000);
}
setInterval(Phrases,2500);