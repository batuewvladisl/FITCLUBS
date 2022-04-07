<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>FIT-CLUB</title>
</head>

<style>
* {
    margin: auto;
    width: 100%;
}

body {
    background: url(img/fon2.jpg);
    background-attachment: fixed;
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
    width: 85%;
    border: 2px solid #282828;
    border-radius: 6px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 2s;
    font-size: 20px; 
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
a:hover,
a {
    text-decoration: none;
    color: #2d5eff;
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
    height: 65%;
    align-items: center;
    margin-right: 59%;
    text-align: center;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px #2d5eff;
    position: relative;
}

.button1 {
    border-radius: 10px;
    width: 60%;
    color: white;
    font-size: 30px;
    margin: 2% 0% 0% 0%;
    padding: 1% 0% 1% 0%;
    font-family: 'Nunito-Medium';
    background-color: #2d5eff;
}

.warning {
    font-family: 'Nunito-Light';
    color: red;
    font-size: 20px;
}

@media only screen and (max-width: 1500px) {
    .button1 {
    width: 55%;
    font-size: 20px;
    }
}

@media only screen and (max-width: 1024px) {
    input{
    font-size: 18px;
    }

    label {
    font-size: 33px;
    }

    .button1 {
    width: 40%;
    font-size: 19px;
    }

    .b1, .b4 {
    font-size: 30px;
    }

    .podheader_block {
    height: 65%;
    margin-right: 11%;
    margin-left: 11%;
    }
}

@media only screen and (max-width: 800px) {
    input{
    font-size: 16px;
    }

    label {
    font-size: 30px;
    }

    .button1 {
    width: 50%;
    font-size: 18px;
    }

    .b1, .b4 {
    font-size: 28px;
    }
}

@media only screen and (max-width: 480px) {
    input{
    font-size: 13px;
    }

    label {
    font-size: 23px;
    }

    .button1 {
    width: 75%;
    font-size: 17px;
    }

    .b1, .b4 {
    font-size: 23px;
    }
}
    </style>
        <body>
            <header class="header">
                <div class="header_navi">
                    <img class="header_logo" src="img/logow.png" alt="">
                    <div class="header_navi_txt">
                            <button href="{{ route('login') }}" class="b1 b5"><a  href="{{ route('login') }}">Войти</a></button>
                        @if (Route::has('register'))
                            <button class="b1 b5"><a href="{{ route('register') }}">Регистрация</a></button>
                        @endif
                    </div>
                </div>
            </header>
        
                <div class="podheader">
                    <div class="podheader_block">
                        <div class="podheader_txt">
                                <form method="POST" action="{{ route('register') }}" class="form">
                                    @csrf
    
                                    <label for="name">{{ __('Логин') }}</label>
                                    <input id="name" placeholder="Введите логин" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                    <br><label for="email">{{ __('E-mail') }}</label>
                                    <input id="email" placeholder="Введите e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    <label for="password">{{ __('Пароль') }}</label>
                                    <input id="password" placeholder="Введите пароль" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    <label for="password-confirm">{{ __('Подтвердить пароль') }}</label>
                                    <input id="password-confirm" placeholder="Подтвердите пароль" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    
                                    
                                    <button type="submit" class="button1">
                                        {{ __('Зарегестрироваться') }}
                                    </button>

                                    @error('password')
                                    <span class="warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @error('email')
                                    <span class="warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                                    @error('name')
                                    <span class="warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </form>
                        </div>
                    </div>
                </div>
                        
        </body>             
    