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

a:active,
a {
    color: white;
    text-decoration: none;
    transition-duration: 0.5s;
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
    margin-left: 2%;
    font-family: 'Nunito-Light';
}

.b11:hover {
    color: #2d5eff;
    transition-duration: 0.5s;
}

.b1:hover {
    color: #2d5eff;
    transition-duration: 0.5s;
}

.b5 {
    color: #2d5eff;
}

.o_nas {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.o_nas_zag {
    text-align: center;
    font-family: 'Nunito-Light';
    font-size: 50px;
    margin: 1.5% 0% 1.5% 0%;
}

.o_nas_text {
    padding: 1%;
    font-size: 32px;
}

.o_nas_block {
    width: 85%;
}

.button1 {
    border-radius: 10px;
    width: 10%;
    color: white;
    font-size: 27px;
    margin: 1% 0% 0% 0%;
    padding: 0.5% 0% 0.5% 0%;
    font-family: 'Nunito-Medium';
    background-color: #bb2222;
    transition: 1s;
}

.button2 {
    display: flex;
    width: 8%;
    align-self: flex-start;
    padding: 0.5% 0% 0.5% 1.5%;
    margin: 0.5% 0 1% 1%;
}

.button1:hover {
    color: black;
    background: rgba(0,0,0,0);
    box-shadow: inset 0 0 0 3px #bb2222;
}

.anketa_zag {
    display: flex;
    align-items: center;
    flex-direction: column;
    font-family: 'Nunito-Light';
    font-size: 50px;
    margin: 1.5% 0% 1.5% 0%;
}

.anketa_content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.anketa_bg {
    width: 85%;
    margin: 0 0 5% 0;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px #2d5eff;
}

.form_anketa {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.warning {
    display: flex;
    align-items: center;
    flex-direction: column;
    font-family: 'Nunito-Medium';
    font-weight: bold;
    color: red;
    font-size: 30px;
}

.footer {
    display: flex;
    flex-direction: column;
    padding: 1.5% 0% 1.5% 0%;
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
    color: #2d5eff;;
}
    
.form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin: 1%;
}


@media only screen and (max-width: 1500px) {
    .b1 {
    font-size: 30px;
    }

    .ceti {
    width: 18%;
    height: 18%;
    }
}

@media only screen and (max-width: 1024px) {
    .b1 {
    font-size: 23px;
    }

    .anketa_zag {
    font-size: 40px;
    }

    .o_nas_text {
    font-size: 28px;
    }

    .button1 {
    width: 10%;
    font-size: 20px;
    }

    .ceti {
    width: 22%;
    height: 22%;
    }
}

@media only screen and (max-width: 800px) {
    .b1 {
    font-size: 20px;
    }

    .header_logo {
    margin-right: 5%;
    width: 21%;
    }

    .anketa_zag {
    font-size: 35px;
    }

    .o_nas_text {
    font-size: 26px;
    }

    .button1 {
    width: 14%;
    font-size: 20px;
    }
    
    .ceti {
    width: 30%;
    height: 30%;
    }
}

@media only screen and (max-width: 480px) {
    .header_logo {
    display: none;
    }
    
    .b1 {
    font-size: 14px;
    }

    .anketa_zag {
    font-size: 30px;
    }

    .o_nas_text {
    font-size: 23px;
    }

    .button1 {
    width: 17%;
    font-size: 15px;
    }

    .ceti {
    width: 35%;
    height: 35%;
    }
}

@media only screen and (max-width: 380px) {
    .header_logo {
    display: none;
    }
    
    .b1 {
    font-size: 11px;
    }

    .anketa_zag {
    font-size: 25px;
    }

    .o_nas_text {
    font-size: 18px;
    }

    .button1 {
    width: 20%;
    font-size: 13px;
    }

    .polit {
        font-size: 25px;
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
                    <button><a href="{{ route('welcome') }}" class="b1">О нас</a></button>
                    <button><a href="{{ route('welcome') }}" class="b1">Тренеры</a></button>
                    <button><a href="{{ route('welcome') }}" class="b1">Акции</a></button>
                    <button><a href="{{ route('welcome') }}" class="b1">Контакты</a></button>
                    <button class="b1"><a class="b11" href="{{ route('home') }}">Кабинет</a></button>
                    @if (Route::has('login'))
                        @auth
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a class="b1 b5" href="{{ route('logout') }}">Выйти</a></button>
                        </form>
                        @else
                        @endauth
                    @endif
                </div>
            </div>
        </header>
            @if(session()->has('success'))
            <div class="warning">
                {{ session()->get('success') }}
            </div>
            @endif
                        <p class="anketa_zag">Заявки пользователей</p>
                        @foreach($data as $el)
                        <div class="form_anketa">
                            <div class="anketa_bg">
                                <p class="o_nas_text"><b>{{ $el->name }}</b></p>
                                <p class="o_nas_text">{{ $el->telephone }}</p>
                                <p class="o_nas_text">{{ $el->abonement }}</p>
                                <p class="o_nas_text"><small style="color: #2d5eff;"><b>{{ $el->created_at }}</b></small></p>
                                <button><a href="{{ route('user-delete', $el->id) }}" type="submit" class="button1 button2">Удалить</a></button>
                            </div>
                        </div>
                        @endforeach
                    
                        <footer class="footer">
                            <div class="ceti">
                                <a href="https://vk.com/feed" class="c1"><img src="img/vk.png" alt=""></a>
                                <a href="https://www.youtube.com/" class="c2"><img src="img/you.png" alt=""></a>
                                <a href="https://www.instagram.com/" class="c3"><img src="img/inst.png" alt=""></a>
                                <a href="https://www.facebook.com/" class="c4"><img src="img/face.png" alt=""></a>
                            </div>
                            <div class="polit">
                                <a class="b4 b5" href="#">Политика конфиденциальности</a>
                            </div>
                        </footer>
                    
    </body>
</html>
