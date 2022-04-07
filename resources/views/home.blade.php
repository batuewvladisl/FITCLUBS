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

select {
    width: 50%;
    border: 2px solid #282828;
    border-radius: 6px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    background-color: rgba(168, 175, 233, 0.452);
    box-sizing: border-box;
    transition: 1s;
    font-size: 25px; 
    font-family: 'Nunito-Light'; 
}

select:focus{
    border-color: #2d5eff;
    box-shadow: 0 0 8px 0 #2d5eff;
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

input{
    width: 50%;
    border: 2px solid #282828;
    border-radius: 6px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    background-color: rgba(168, 175, 233, 0.452);
    box-sizing: border-box;
    transition: 2s;
    font-size: 25px; 
    font-family: 'Nunito-Light'; 
}
  
input:focus{
    border-color: #2d5eff;
    box-shadow: 0 0 8px 0 #2d5eff;
}

label {
    font-size: 35px; 
    font-family: 'Nunito-Light'; 
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
    font-family: 'Nunito-Light';
}

.b1:hover {
    color: #2d5eff;
    transition-duration: 0.5s;
}

.b5 {
    color: #2d5eff;
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
    display: flex;
    height: 40%;
    align-items: center;
    margin-right: 59%;
    text-align: center;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px #2d5eff;
    position: relative;
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
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px #2d5eff;
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

.button3 {
    border-radius: 10px;
    width: 10%;
    color: white;
    font-size: 27px;
    margin: 1% 0% 0% 0%;
    padding: 0.5% 0% 0.5% 0%;
    font-family: 'Nunito-Medium';
    background-color: #2d5eff;
    transition: 1s;
}

.button3:hover {
    color: black;
    background: rgba(0,0,0,0);
    box-shadow: inset 0 0 0 3px #2d5eff;
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

    .button1, .button3 {
    width: 12%;
    }

    .button2 {
    width: 10%;
    }

    .ceti {
    width: 18%;
    height: 18%;
    }
}

@media only screen and (max-width: 1024px) {
    input {
    font-size: 22px; 
    }

    select {
    font-size: 22px; 
    }

    label {
    font-size: 30px;
    }
    
    .b1 {
    font-size: 23px;
    }

    .anketa_zag, .o_nas_zag {
    font-size: 40px;
    }

    .o_nas_text {
    font-size: 28px;
    }

    .button1, .button3 {
    width: 14%;
    font-size: 20px;
    }

    .button2 {
    width: 11%;
    }

    .ceti {
    width: 22%;
    height: 22%;
    }
}

@media only screen and (max-width: 800px) {
    input {
    font-size: 20px; 
    }

    select {
    font-size: 20px; 
    }

    label {
    font-size: 28px;
    }
    
    .b1 {
    font-size: 20px;
    }

    .header_logo {
    margin-right: 5%;
    width: 21%;
    }

    .anketa_zag, .o_nas_zag {
    font-size: 35px;
    }

    .o_nas_text {
    font-size: 26px;
    }

    .button1, .button3 {
    width: 17%;
    }

    .button2 {
    width: 13%;
    }
    
    .ceti {
    width: 30%;
    height: 30%;
    }
}

@media only screen and (max-width: 480px) {
    .form {
    display: flex;
    align-items: center;
    }
    
    input {
    font-size: 14px; 
    }

    select {
    font-size: 14px; 
    }

    label {
    font-size: 24px;
    }
    
    .header_logo {
    display: none;
    }
    
    .b1 {
    font-size: 14px;
    }

    .anketa_zag, .o_nas_zag {
    font-size: 30px;
    }

    .o_nas {
    text-align: center;
    }

    .o_nas_text {
    font-size: 21px;
    }

    .button1, .button3 {
    width: 19%;
    font-size: 14px;
    }

    .button2 {
    width: 15%;
    }

    .ceti {
    width: 35%;
    height: 35%;
    }
}

@media only screen and (max-width: 380px) {
    input {
    height: 30px;
    font-size: 14px; 
    }

    select {
    height: 30px;
    font-size: 14px;
    margin: 8px 0;
    outline: none;
    padding: 0px; 
    }

    label {
    font-size: 18px;
    }

    .b1 {
    font-size: 11px;
    }

    .anketa_zag, .o_nas_zag {
    font-size: 25px;
    }

    .o_nas_text {
    font-size: 15px;
    }

    .button1, .button3 {
    width: 23%;
    font-size: 13px;
    }

    .button2 {
    width: 19%;
    font-size: 13px;
    }

    .polit {
    font-size: 20px;
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
                     
                    @auth
                    @if(auth()->user()->roles )
                    <button><a class="b1 b5" href="{{route('admin')}}">Админ</a></button>
                    @endif
                    @endauth
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
                    <div class="o_nas">
                        <p class="o_nas_zag">Оставьте свою заявку</p>
                        <div class="o_nas_block">
                                <form class="form" method="post" action="{{ route('users') }}" enctype="multipart/form-data">
                                    @csrf
                                    <label for="name">ФИО</label>
                                    <input id="name" placeholder="Введите ФИО" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="telephone">Номер телефона</label>
                                    <input id="telephone" placeholder="Введите номер" type="tel" pattern="([\+]*[7-8]{1}\s?[\(]*9[0-9]{2}[\)]*\s?\d{3}[-]*\d{2}[-]*\d{2})" maxlength="11" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                    
                                    <label for="abonement">Абонемент</label>
                                    <select class="minimal" id="abonement" @error('abonement') is-invalid @enderror name="abonement" value="{{ old('abonement') }}" required autocomplete="abonement">
                                        <option>2 месяца БЕЗЛИМИТ 2999₽</option>
                                        <option>4 месяца БЕЗЛИМИТ 3999₽</option>
                                        <option>6 месяца БЕЗЛИМИТ 4999₽</option>
                                        <option>8 месяца БЕЗЛИМИТ 5999₽</option>
                                    </select>
                                    <button class="button3">Отправить</button>
                                </form>
                        </div>
                    </div>

                        <p class="anketa_zag">Ваши заявки</p>
                        @foreach($data as $el)
                        <div class="anketa_content">
                            <div class="anketa_bg">
                                <div class="form_anketa">
                                    <p class="o_nas_text"><b>{{ $el->name }}</b></p>
                                    <p class="o_nas_text">{{ $el->telephone }}</p>
                                    <p class="o_nas_text">{{ $el->abonement }}</p>
                                    <p class="o_nas_text"><small style="color: #2d5eff;"><b>{{ $el->created_at }}</b></small></p>
                                    <button><a href="{{ route('user-delete', $el->id) }}" type="submit" class="button1 button2">Удалить</a></button>
                                </div>
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
