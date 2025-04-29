<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="shortcut icon" href="/images/logo.png">
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            font-family: 'Vollkorn', serif !important;
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }
        
        button, a {
            font-family: 'Open Sans', sans-serif !important;
        }

        [hidden] {
            display: none
        }

        html {
            line-height: 1.5;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .mt-4 {
            margin-top: 1rem
        }

        .max-w-6xl {
            max-width: 80rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .pt-8 {
            padding-top: 2rem
        }

        .relative {
            position: relative
        }

        img {
            transition: 2.5s;
        }

        img:hover {
            -webkit-transform: rotateY(360deg);
            -webkit-transform-style: preserve-3d;
            transform: rotateY(360deg);
            transform-style: preserve-3d;
        }
        
        span {
            display: inline;
            position: relative;
            font-size: 2.38rem;
            letter-spacing: -3px;
            color: rgba(222, 211, 0, 0.75);
            margin-left: 5px;
        }
        
        span:after {
            content: "FELINOCOINS";
            position: absolute; 
            left: 4px; 
            top: 1px;
            color: rgb(173,1,1);   
        }

        @media (min-width:200px) {
            .sm\:block {
                display: block
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:pt-0 {
                padding-top: 5rem
            }
        }
        @media screen and (max-width: 500px) {
            .desc {
                margin: 0 0 !important;
            }
            .desc p {
                font-size: 1rem;
            }
        }

        .container {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
        }
        
        .chevron {
          position: absolute;
          width: 2.1rem;
          height: 0.48rem;
          opacity: 0;
          transform: scale(0.3);
          -webkit-animation: move-chevron 3s ease-out infinite;
                  animation: move-chevron 3s ease-out infinite;
        }
        
        .chevron:first-child {
          -webkit-animation: move-chevron 3s ease-out 1s infinite;
                  animation: move-chevron 3s ease-out 1s infinite;
        }
        
        .chevron:nth-child(2) {
          -webkit-animation: move-chevron 3s ease-out 2s infinite;
                  animation: move-chevron 3s ease-out 2s infinite;
        }
        
        .chevron:before,
        .chevron:after {
          content: "";
          position: absolute;
          top: 0;
          height: 100%;
          width: 50%;
          background: #fff;
        }
        
        .chevron:before {
          left: 0;
          transform: skewY(30deg);
        }
        
        .chevron:after {
          right: 0;
          width: 50%;
          transform: skewY(-30deg);
        }
        
        @-webkit-keyframes move-chevron {
          25% {
            opacity: 1;
          }
          33.3% {
            opacity: 1;
            transform: translateY(2.28rem);
          }
          66.6% {
            opacity: 1;
            transform: translateY(3.12rem);
          }
          100% {
            opacity: 0;
            transform: translateY(4.8rem) scale(0.5);
          }
        }
        
        @keyframes move-chevron {
          25% {
            opacity: 1;
          }
          33.3% {
            opacity: 1;
            transform: translateY(2.28rem);
          }
          66.6% {
            opacity: 1;
            transform: translateY(3.12rem);
          }
          100% {
            opacity: 0;
            transform: translateY(4.8rem) scale(0.5);
          }
        }
    </style>
    
    <script src="js/scrollreveal.js"></script>
    
</head>

<body class="antialiased">
    <div style="background-color: rgb(0 12 66);"
        class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-1">

        <div class="page max-w-6xl sm:px-6 lg:px-8">
            <div id="name" style="color: white; text-align: center; margin-top: 7%;">
                <h1 style="font-size: 2.2rem;">BIENVENIDO A<span>FELINOCOINS</span></h1>
                <img src="https://i.ibb.co/m9XGm8k/logo-tecmoneda.png" width="15%" class="mt-4">
            </div>

            <div class="relative flex justify-center sm:items-center py-4 sm:pt-1" style="margin: 15px;">
                @if (Route::has('login'))
                <div class="buttons hidden py-4 sm:block" style="line-height: 80px;">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-xl btn dashboard">Panel</a>
                    @else
                        <div class="bt1">
                            <a href="{{ route('login') }}" class="btn login">
                            Iniciar sesión
                            </a>
                        </div>
                    @if (Route::has('register'))
                        <div class="bt2">
                            <a href="{{ route('register') }}" class="btn register ml-4 text-xl">
                                &nbsp;&nbsp;&nbsp;&nbsp;Registrar&nbsp;&nbsp;&nbsp;&nbsp;
                            </a>
                        </div>
                    @endif
                    @endauth
                </div>
                @endif
            </div>

            <div class="desc" style="color: #fff; margin: 20px 40px; text-align: center; font-size: 1.3rem;">
                <p>Participa en los eventos que organiza el Tecnológico de Motul y cumple con tus actividades para poder conseguir FelinoCoins totalmente gratis.</p>
            </div>
            <div style="text-align: center; color: #fff;">
                <p style="margin: 0;">Desliza</p>
            </div>
            <div class="container">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
            </div>
        </div>
        <!--<div style="color: #fff; position: fixed; bottom: 0;">&copy; 2022 Tecmonedas</div>-->
    </div>
    <div style="background-color: rgb(0 12 66);"
        class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-1">

        <div class="page max-w-6xl sm:px-6 lg:px-8">
            <div id="name" style="color: white; text-align: center; margin-top: 7%;">
                <h1 style="font-size: 1.6rem;">¿QUÉ ES UN FELINOCOIN?</h1>
                <img src="https://i.ibb.co/m9XGm8k/logo-tecmoneda.png" width="15%" class="mt-4">
            </div>

            <div class="relative flex justify-center sm:items-center py-4 sm:pt-1" style="margin: 15px;">
                @if (Route::has('login'))
                <div class="buttons hidden py-4 sm:block" style="line-height: 80px;">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-xl btn dashboard">Panel</a>
                    @else
                        <div class="bt1">
                            <a href="{{ route('login') }}" class="btn login">
                            Iniciar sesión
                            </a>
                        </div>
                    @if (Route::has('register'))
                        <div class="bt2">
                            <a href="{{ route('register') }}" class="btn register ml-4 text-xl">
                                &nbsp;&nbsp;&nbsp;&nbsp;Registrar&nbsp;&nbsp;&nbsp;&nbsp;
                            </a>
                        </div>
                    @endif
                    @endauth
                </div>
                @endif
            </div>

            <div class="desc" style="color: #fff; margin: 20px 40px; text-align: center; font-size: 1.3rem;">
                <p>Participa en los eventos que organiza el Tecnol贸gico de Motul y cumple con tus actividades para poder conseguir FelinoCoins totalmente gratis.</p>
            </div>
        </div>
        <div style="color: #fff; position: fixed; bottom: 0;">&copy; 2022 Tecmonedas</div>
    </div>
</body>
</html>