<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIT-CLUB</title>
</head>

<style>
* {
    margin: auto;
    width: 100%;
}

html {
    scroll-behavior: smooth;
}

body {
    scroll-behavior: smooth;
}

::selection {
    background: #5871c494;
}

::-moz-selection {
    background: #5871c494;
}

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track {
  background: #cacaca6b;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: #2d5eff;
  border-radius: 10px;
}

@font-face {
	font-family: 'Nunito-Light'; 
	src: local('Nunito-Light'),
    url(../fonts/Nunito-Light.ttf); 
}

@font-face {
	font-family: 'Nunito-Medium'; 
	src: local('Nunito-Medium'),
    url(../fonts/Nunito-Medium.ttf); 
}

button {
    padding: 0;
    border: none;
    font: inherit;
    color: inherit;
    background-color: transparent;
    cursor: pointer;
}

a:active,
a {
    color: white;
    text-decoration: none;
    transition-duration: 0.5s;
}


.header {
    padding: 1% 0% 1% 0%;
    background: #282828;
}

.header_navi {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
}

.header_logo {
    margin-right: 10%;
    width: 27%;
}

.header_navi_txt {
    display: flex;
}

.b1 {
    color: white;
    font-size: 35px;
    margin-right: 2%;
    font-family: 'Nunito-Light';
}

.b1:hover {
    color: #2d5eff;
    transition-duration: 0.5s;
}

.b11:hover {
    color: #2d5eff;
    transition-duration: 0.5s;
}

.b5, .b55 {
    color: #2d5eff;
    transition-duration: 0.5s;
}

.podheader {
    display: flex;
    justify-content: flex-start;
    width: 80%;
    height: 850px;
}

.podheader_img {
    position: absolute;
    height: 850px;
}

.podheader_block {
    width: 40%;
    margin-right: 59%;
    text-align: center;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
    position: relative;
}

.podheader_logo {
    margin-top: 3%;
    width: 55%;
}

.podheader_txt {
    width: 95%;
    height: 99%;
    margin: 0% 0% 3% 0%;
    font-size: 38px;
    font-family: 'Nunito-Light';
}

.o_nas {
    display: flex;
    text-align: center;
    flex-direction: column;
    font-family: 'Nunito-Light';
}

.o_nas_zag {
    font-family: 'Nunito-Medium';
    font-size: 45px;
    margin: 1% 0% 1% 0%;

}

.o_nas_block {
    width: 80%;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px #2d5eff;
}

.o_nas_txt {
    width: 95%;
    height: 90%;
    margin-top: 1%;
    margin-bottom: 1%;
    text-align: left;
    font-size: 35px;
}

.abonement {
    display: flex;
    text-align: center;
    flex-direction: column;
}

.abonement_zag {
    font-family: 'Nunito-Medium';
    font-size: 45px;
    margin: 1% 0% 1% 0%;
}

.abonement_one_block {
    display: flex;
    width: 80%;
    margin-bottom: 2%;
}

.abonement_two_block {
    display: flex;
    width: 80%;
}

.abonement_one {
    position: relative;
    margin: 0% 2% 0% 0%;
    cursor: pointer;
}

.abonement_two {
    margin: 0% 0% 0% 2%;
    position: relative;
    cursor: pointer;
}

.abonement_three {
    position: relative;
    margin: 0% 2% 0% 0%;
    cursor: pointer;
}

.abonement_four {
    margin: 0% 0% 0% 2%;
    position: relative;
    cursor: pointer;
}

.abonement_img1, .abonement_img2, .abonement_img3, .abonement_img4 {
    width: 100%;
    box-shadow: 0px 0px 12px 1px #2d5eff;
}

.abonement_txt1, .abonement_txt2, .abonement_txt3, .abonement_txt4 {
    color: rgb(255, 255, 255);
    font-size: 35px;
    font-family: 'Nunito-Medium';
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
}

.abonement_button1, .abonement_button2, .abonement_button3, .abonement_button4 {
    border-radius: 10px;
    width: 30%;
    color: white;
    font-size: 25px;
    padding: 1% 0% 1% 0%;
    font-family: 'Nunito-Medium';
    background-color: #2d5eff;
    transition: all 800ms ease; 
}

.abonement_button1:hover {
    background: rgba(0,0,0,0);
    box-shadow: inset 0 0 0 3px #2d5eff;
}

.abonement_button2:hover {
    background: rgba(0,0,0,0);
    box-shadow: inset 0 0 0 3px #2d5eff;
}

.abonement_button3:hover {
    background: rgba(0,0,0,0);
    box-shadow: inset 0 0 0 3px #2d5eff;
}

.abonement_button4:hover {
    background: rgba(0,0,0,0);
    box-shadow: inset 0 0 0 3px #2d5eff;
}

.treners {
    display: flex;
    text-align: center;
    flex-direction: column;

}

.trener_zag {
    font-family: 'Nunito-Medium';
    font-size: 45px;
    margin: 1% 0% 1% 0%;
}

.trener_blocks {
    display: flex;
    width: 84.2%;
}

.trener_one {
    display: flex;
}

.trener_two {
    display: flex;
}

.fio1, .fio2, .fio3, .fio4 {
    width: 40%;
    font-family: 'Nunito-Medium';
    font-size: 35px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px #000000;
}

.contact {
    display: flex;
    text-align: center;
    flex-direction: column;
}

.contact_zag {
    font-family: 'Nunito-Medium';
    font-size: 45px;
    margin: 1% 0% 1% 0%;
}

.contact_content {
    display: flex;
    width: 80%;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px #2d5eff;
    margin-bottom: 5%;
}

.contact_info {
    font-family: 'Nunito-Light';
    font-size: 35px;
}

.footer {
    display: flex;
    flex-direction: column;
    padding: 1% 0% 1% 0%;
    background: #282828;
}

.ceti {
    display: flex;
    width: 12%;
    height: 12%;
}

.c1:hover {
    transform: scale(1.3);
}

.c2:hover {
    transform: scale(1.3);
}

.c3:hover {
    transform: scale(1.3);
}

.c4:hover {
    transform: scale(1.3);
}


.c2 {
    margin-left: 6%;
    margin-right: 6%;
}

.c3 {
    margin-right: 6%;
}

.polit {
    text-align: center;
    font-size: 30px;
    font-family: 'Nunito-Light';
}

@media only screen and (max-width: 1500px) {
    .o_nas_txt {
    font-size: 30px;
    }

    .abonement_button1, .abonement_button2, .abonement_button3, .abonement_button4 {
    width: 37%;
    font-size: 25px;
    }
}

@media only screen and (max-width: 1280px) {
    .b1 {
    font-size: 30px;
    }
    
    .podheader {
    width: 90%;
    }

    .podheader_block {
    margin-right: 54%;
    }

    .podheader_txt {
    font-size: 34px;
    }
    
    .o_nas_txt {
    font-size: 27px;
    }

    .abonement_txt1, .abonement_txt2, .abonement_txt3, .abonement_txt4 {
    font-size: 30px;
    }

    .abonement_button1, .abonement_button2, .abonement_button3, .abonement_button4 {
    width: 40%;
    font-size: 22px;
    }

    .fio1, .fio2, .fio3, .fio4 {
    font-size: 30px;
    }

}

@media only screen and (max-width: 1024px) {
    .b1 {
    font-size: 25px;
    }
    
    .podheader_img {
    position: absolute;
    height: 600px;
    }

    .podheader {
    width: 100%;
    height: 600px;
    }

    .podheader_block {
    margin-right: 50%;
    }

    .podheader_txt {
    font-size: 30px;
    }
    
    .o_nas_txt {
    font-size: 22px;
    }

    .abonement_button1, .abonement_button2, .abonement_button3, .abonement_button4 {
    width: 45%;
    font-size: 20px;
    }

    .fio1, .fio2, .fio3, .fio4 {
    font-size: 28px;
    }

    .contact_info {
    font-size: 27px;
    }
}

@media only screen and (max-width: 800px) {
    .header_logo {
    margin-right: 5%;
    width: 22%;
    }
    
    .b1 {
    font-size: 20px;
    }
    
    .podheader {
    width: 100%;
    height: 600px;
    }

    .podheader_img {
    position: absolute;
    height: 600px;
    }

    .podheader_block {
    margin-right: 50%;
    }

    .podheader_txt {
    font-size: 25px;
    }
    
    .o_nas_txt {
    font-size: 18px;
    }

    .abonement_txt1, .abonement_txt2, .abonement_txt3, .abonement_txt4 {
    font-size: 25px;
    }

    .abonement_button1, .abonement_button2, .abonement_button3, .abonement_button4 {
    width: 50%;
    font-size: 18px;
    }

    .fio1, .fio2, .fio3, .fio4 {
    font-size: 25px;
    }

    .contact_info {
    font-size: 23px;
    }

    .contact_cart {
        height: 250px;
    }
}

@media only screen and (max-width: 480px) {
    .header_logo {
    margin-right: 2%;
    width: 18%;
    }
    
    .b1 {
    font-size: 13px;
    }

    .b55 {
    font-size: 20px;
    }
    
    .podheader {
    width: 100%;
    height: 350px;
    }

    .podheader_img {
    position: absolute;
    height: 350px;
    }

    .podheader_block {
    width: 50%;
    margin-right: 40%;
    }

    .podheader_logo {
    margin-top: 3%;
    width: 40%;
    }

    .podheader_txt {
    font-size: 16px;
    }
    
    .o_nas_zag {
    font-size: 30px;
    }

    .o_nas_txt {
    font-size: 15px;
    }

    .abonement_zag {
        font-size: 30px;
    }

    .abonement_one_block {
    display: flex;
    flex-direction: column;
    margin-bottom: 3%;
    }

    .abonement_two_block {
    display: flex;
    flex-direction: column;
    margin-bottom: 2%;
    }

    .abonement_one, .abonement_three {
    margin: 0% 0% 0% 0%;
    }

    .abonement_two, .abonement_four {
    margin: 4% 0% 0% 0%;
    }

    .abonement_txt1, .abonement_txt2, .abonement_txt3, .abonement_txt4 {
    font-size: 22px;
    }

    .abonement_button1, .abonement_button2, .abonement_button3, .abonement_button4 {
    width: 40%;
    font-size: 18px;
    }

    .trener_zag {
        font-size: 30px;
        margin-bottom: 3%;
    }

    .trener_blocks {
    display: flex;
    flex-direction: column;
    width: 80%;
    }

    .trener_one {
    display: flex;
    margin-bottom: 5%;
    }

    .trener_two {
    display: flex;
    }

    .fio2, .fio4 {
    width: 48%;
    font-size: 22px;
    }

    .fio1, .fio3 {
    width: 48%;
    font-size: 22px;
    margin-right: 5%
    }

    .contact_zag {
    font-size: 30px;
    }

    .contact_content {
    display: flex;
    flex-direction: column;
    }

    .contact_info {
    font-size: 20px;
    }

    .contact_cart {
        height: 250px;
    }

    .ceti {
    width: 25%;
    height: 25%;
    }
}

@media only screen and (max-width: 380px) {
    .header_logo {
    display: none;
    }

    .b55 {
    font-size: 18px;
    }

    .podheader_img {
    position: absolute;
    height: 250px;
    }

    .podheader {
    width: 100%;
    height: 250px;
    }

    .podheader_txt {
    font-size: 15px;
    }

    .o_nas_txt {
    font-size: 13px;
    }

    .abonement_txt1, .abonement_txt2, .abonement_txt3, .abonement_txt4 {
    font-size: 20px;
    }

    .abonement_button1, .abonement_button2, .abonement_button3, .abonement_button4 {
    width: 45%;
    font-size: 16px;
    }

    .fio2, .fio4 {
    font-size: 18px;
    }

    .fio1, .fio3 {
    font-size: 18px;
    }

    .contact_info {
    font-size: 18px;
    }

    .contact_cart {
    height: 200px;
    }

    .ceti {
    width: 35%;
    height: 35%;
    }
}
</style>

<body>
    <header class="header">
        <div class="header_navi">
            <img class="header_logo" src="img/logow.png" alt="">
            <div class="header_navi_txt">
                <button class="b1"><a class="b11" href="#o_nas">О нас</a></button>
                <button class="b1"><a class="b11" href="#treners">Тренеры</a></button>
                <button class="b1"><a class="b11" href="#sale">Акции</a></button>
                <button class="b1"><a class="b11" href="#contact">Контакты</a></button>
                @auth
                <button class="b1"><a class="b11" href="{{ route('home') }}">Кабинет</a></button>
                @endauth
                @if (Route::has('login'))
                    @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a class="b1 b5" href="{{ route('logout') }}">Выйти</a></button>
                    </form>
                    @else

                    <button><a href="{{ route('login') }}" class="b1 b5">Войти</a></button>
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <div class="podheader_img1">
        <img src="img/fon2.jpg" alt="" class="podheader_img">
        <div class="podheader">
            <div class="podheader_block">
                <img src="img/logob.png" alt="" class="podheader_logo">
                <div class="podheader_txt">
                    <p>Самый современный и комфортабельный фитнес клуб Ижевске. Приходите и окунитесь в атмосферу домашнего уюта, позитива, спорта и красоты!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="o_nas">
        <div class="o_nas_zag">
            <p id="o_nas">О нас</p>
        </div>
        <div class="o_nas_block">
            <div class="o_nas_txt">
                <p>Фитнес делает тебя <b>сильнее,</b> меняет твою жизнь к лучшему и помогает решиться на новый шаг для достижения <b>поставленной цели.</b> Открывает новые возможности и придает уверенности в себе. Каждая новая победа над собой - это очередное доказательство, что <b>фитнес - это часть тебя!</b><br>
                Мы заряжаем своих клиентов энергией, которая несет положительные перемены в уровне жизни,  что дает возможность получать удовольствие от каждого дня.<br>
                Мы создаем в наших фитнес клубах атмосферу <b>комфорта, искренности и доброжелательности,</b> пространство для достижения успеха, фитнес-среду с общими интересами, окружая заботой и вниманием каждого.</p>
            </div>
        </div>
    </div>

    <div class="abonement">
        <div class="abonement_zag">
            <p id="sale">Абонементы по акции</p>
        </div>
        <div class="abonement_one_block">
            <div class="abonement_one">
                <img class="abonement_img1" src="img/tovar.jpg" alt="">
                <div class="abonement_txt1">
                    <p>2 месяца БЕЗЛИМИТ<br><br>2999₽<br><br></p>
                <button class="abonement_button1"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
            <div class="abonement_two">
                <img class="abonement_img2" src="img/tovar.jpg" alt="">
                <div class="abonement_txt2">
                    <p>4 месяца БЕЗЛИМИТ<br><br>3999₽<br><br></p>
                <button class="abonement_button2"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
        </div>
        <div class="abonement_two_block">
            <div class="abonement_three">
                <img class="abonement_img3" src="img/tovar.jpg" alt="">
                <div class="abonement_txt3">
                    <p>6 месяцев БЕЗЛИМИТ<br><br>4999₽<br><br></p>
                <button class="abonement_button4"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
            <div class="abonement_four">
                <img class="abonement_img4" src="img/tovar.jpg" alt="">
                <div class="abonement_txt4">
                    <p>8 месяцев БЕЗЛИМИТ<br><br>6999₽<br><br></p>
                <button class="abonement_button4"><a href="{{ route('home') }}">Оставить заявку</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="treners">
        <div class="trener_zag">
            <p id="treners">Тренеры</p>
        </div>
        <div class="trener_blocks">
            <div class="trener_one">
                <div class="fio1">
                    <img src="img/trener2.jpg" alt="">
                    <p>Алексей Петров</p>
                </div>
                <div class="fio2">
                    <img src="img/trener2.jpg" alt="">
                    <p>Алексей Петров</p>
                </div>
            </div>
            <div class="trener_two">
                <div class="fio3">
                    <img src="img/trener2.jpg" alt="">
                    <p>Алексей Петров</p>
                </div>
                <div class="fio4">
                    <img src="img/trener2.jpg" alt="">
                    <p>Алексей Петров</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="contact_zag">
            <p id="contact">Контакты</p>
        </div>
        <div class="contact_content">
            <div class="contact_info">
                Наши контакты:<br><br>
                Телефон: +7(904)-904-04-04<br>
                E-mail: fit-club@mail.ru<br>
                Наш адрес: г. Ижевск,<br>
                ул. Ленина 237 к.2<br><br>
                Режим работы <b>круглосуточно</b>
            </div>
            <div class="contact_cart">
                <iframe class="contact_cart" src="https://yandex.ru/map-widget/v1/?um=constructor%3A6aad5a4c1331cf99c5e24075bccd6f165692c8c2dd9de87f4fb0e47b9638ccb7&amp;source=constructor" width="782" height="411" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="ceti">
            <a href="https://vk.com/feed" class="c1"><img src="img/vk.png" alt=""></a>
            <a href="https://www.youtube.com/" class="c2"><img src="img/you.png" alt=""></a>
            <a href="https://www.instagram.com/" class="c3"><img src="img/inst.png" alt=""></a>
            <a href="https://www.facebook.com/" class="c4"><img src="img/face.png" alt=""></a>
        </div>
        <div class="polit">
            <a class="b1 b55" href="#">Политика конфиденциальности</a>
        </div>
    </footer>

</body>
</html>
