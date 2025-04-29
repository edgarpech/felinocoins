<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Premios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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

            @media (min-width: 200px) {
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
                .desc p {
                    font-size: 1rem;
                }
            }
        </style>
    </head>
    <body class="antialiased">
        <x-app-layout>
            <x-slot name="header">
                <h2 style="font-size: 1.5rem; text-align: center; padding: 10px; color: #fff;">
                    {{ __('PREMIOS') }}
                </h2>
            </x-slot>
            
            <div class="relative flex items-top justify-center min-h-screen sm:items-baseline py-4 sm:pt-4" style="color: #fff; background-color: rgb(0 12 66);">

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div style="text-align: center;">
                        <h2>PREMIOS FÍSICOS CANJEABLES</h2>
                        <br>
                        <u><p>1 Tecmoneda equivale a $0.2 MXN</p></u>               
                    </div>
                    <div style="box-shadow: 0 4px 8px 0 rgba(212,175,55,0.5); transition: 0.3s; width: 70%; margin: 30px auto;">
                        <div style="padding: 17px 10px; margin: 10px 8px; line-height: 30px; text-align: center;">
                            <img style="margin: auto;" src="images/awards/auditec.png" alt="" width="30%">
                            <p>Audífonos Mi True Wireless Negros - Edición TecMotul</p>
                            <button style="padding: 5px; border: 1px solid #fff;">Proximamente</button>
                        </div>
                    </div>
                    <div style="box-shadow: 0 4px 8px 0 rgba(212,175,55,0.5); transition: 0.3s; width: 70%; margin: 30px auto;">
                        <div style="padding: 17px 10px; margin: 10px 8px; line-height: 30px; text-align: center;">
                            <img style="margin: auto;" src="images/awards/termotec.png" alt="" width="30%">
                            <p>Termo Inteligente 500 ml - Edición TecMotul</p>
                            <button style="padding: 5px; border: 1px solid #fff;">Proximamente</button>
                        </div>
                    </div>
                </div>

            </div>
        </x-app-layout>
        <nav id="navbar">
            <ul>
                <li class="w-full h-full py-4 px-2 border-t border-b border-light-border">
                    <x-nav-link class="text-white" href="/">
                        {{ __('Inicio') }}
                    </x-nav-link>
                </li>
                <li class="w-full h-full py-4 px-2 border-b border-light-border">
                    <x-nav-link class="text-white" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Panel') }}
                    </x-nav-link>
                </li>
                <li class="w-full h-full py-4 px-2 border-b border-light-border">
                    @if(@Auth::user()->hasRole('visitator'))
                        <x-nav-link class="text-white" :href="route('swaps')" :active="request()->routeIs('swaps')">
                            {{ __('Canjes') }}
                        </x-nav-link>
                    @endif
                    @if(@Auth::user()->hasRole('administrator'))
                        <x-nav-link class="text-white" :href="route('admin.view_tickets')" :active="request()->routeIs('admin.view_tickets')">
                            {{ __('Tickets') }}
                        </x-nav-link>
                    @endif
                </li>
                <li class="w-full h-full py-4 px-2 border-b border-light-border">
                @if(@Auth::user()->hasRole('visitator'))
                <x-nav-link class="text-white" :href="route('my-tickets')" :active="request()->routeIs('my-tickets')">
                    {{ __('Mis tickets') }}
                </x-nav-link>
                @endif
                @if(@Auth::user()->hasRole('administrator'))
                <x-nav-link class="text-white" :href="route('admin.view_users')"
                    :active="request()->routeIs('admin.view_users')">
                    {{ __('Usuarios') }}
                </x-nav-link>
                @endif
            </li>
            </ul>
            <div id="name" style="color: white; text-align: center; margin-top: 10%;">
                <img src="https://i.ibb.co/m9XGm8k/logo-tecmoneda.png" width="150px"  style="margin: auto;">
            </div>
        </nav>
        <div class="dark-blue" id="blue"></div>
    </body>
</html>
