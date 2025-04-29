<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/buttons.css')); ?>">
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: 'Nunito', sans-serif;
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
            color: rgba(237, 190, 27, 0.5);
            margin-left: 5px;
        }
        
        span:after {
            content: "TECMONEDA";
            position: absolute; 
            left: 5px; 
            top: 2px;
            color: rgba(255,0,0,0.7);   
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
        @media  screen and (max-width: 500px) {
            .desc {
                margin: 0 0 !important;
            }
            .desc p {
                font-size: 1rem;
            }
        }
    </style>
    
</head>

<body class="antialiased">
    <div style="background-color: rgb(0 12 66);"
        class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-1">

        <div class="max-w-6xl sm:px-6 lg:px-8">
            <div id="name" style="color: white; text-align: center; margin-top: 8%;">
                <h1>BIENVENIDO A<span>TECMONEDA</span></h1>
                <img src="https://i.ibb.co/m9XGm8k/logo-tecmoneda.png" width="20%" class="mt-4">
            </div>

            <div class="relative flex justify-center sm:items-center py-4 sm:pt-1">
                <?php if(Route::has('login')): ?>
                <div class="buttons hidden py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                    <button class="btn dashboard">
                        <a href="<?php echo e(url('/dashboard')); ?>"
                        class="text-xl">Ir al panel</a>
                    </button>
                    <?php else: ?>
                    <button class="btn login">
                        <a href="<?php echo e(route('login')); ?>" class="text-xl">Inicia sesi贸n</a>
                    </button>

                    <?php if(Route::has('register')): ?>
                    <button class="btn register">
                        <a href="<?php echo e(route('register')); ?>" class="ml-4 text-xl">Reg铆strate</a>
                    </button>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="desc" style="color: #fff; margin: 40px; text-align: center; font-size: 1.3rem;">
                <p>Participa en los eventos que organiza el Tecnol贸gico de Motul y cumple con tus actividades para poder conseguir TecMonedas totalmente gratis. Podr谩s usarlas en los canjes de
                    este sitio.</p>
            </div>
        </div>
        <div style="color: #fff; position: fixed; bottom: 0;">&copy; 2022 Tecmonedas</div>
    </div>
</body>
</html><?php /**PATH D:\www\TecMonedas\resources\views/welcome.blade.php ENDPATH**/ ?>