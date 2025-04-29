<x-slot name="header">
    <head>
        <style>
            body {
                background-color: #000;
                font-family: 'Nunito', sans-serif;
            }

            table,
            th,
            td {
                color: #fff !important;
                border: 1px solid #fff;
            }

            .delete {
                color: #f00;
                padding: 10px;
            }
            
            .edit {
                color: #00f;
                padding: 10px;
            }

            label {
                text-align: initial;
                display: inline-block;
                width: 100px;
            }

            .formEdit {
                margin: 30px auto;
                text-align: initial;
                width: 250px;
                color: #000;
            }

            .form-control {
                width: 250px;
                margin: 2px 0px;
                color: #000000;
            }

            .form-group {
                color: #ffffff;
            }

            .button-group button {
                width: 90px;
            }
            
            .bttn {
                width: 75px;
                height: 40.5px;
            }

            span {
                font-size: 40px;
                color: #fff;
            }
            @media screen and (max-width: 500px) {
                .search {
                    text-align: center; 
                    display: flex; 
                    flex-wrap: wrap; 
                    justify-content: center; 
                    flex-direction: column;
                }
                
                .bttn {
                    width: 100% !important;
                }
            }
            
        </style>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/buttons_log.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive_table_tickets.css') }}">
    </head>
    <h1 style="font-size: 1.5rem; text-align: center; padding: 30px; color: #fff;">EDITAR TICKETS</h1>

</x-slot>
<div class="py-12">
    <div class="text-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="search overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="rounded-b text-white px-4 py-3 shadow-md my-3"
                role="alert" style="background-color: rgba(237, 190, 27, 0.5); font-size: 1rem;">
                <div class="flex">
                    <div class="text-center" style="margin: auto; font-weight: bold;">
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <input type="text" wire:model="buscador" placeholder="Buscar ticket...">
            <button style="padding: 7.5px 5px; border-top: 2px solid #000;" class="bttn bg-white" wire:click="buscar()">Buscar</button>
            <button style="padding: 7.5px 5px; border-top: 2px solid #000;" class="bttn bg-white" wire:click="refresh()">Refrescar</button>
            @if($updateMode)
                @include('livewire.tickets/update')
            @else
                @include('livewire.tickets/create')
            @endif
        </div>
        <table style="margin: 15px auto;">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">ID de usuario</th>
                    <th class="text-center">Folio</th>
                    <th class="text-center">Tipo de canje</th>
                    <th class="text-center">Fecha de canje</th>
                    <th class="text-center">Expiración</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                <tr>
                    <td class="text-center">{{ $ticket->id }}</td>
                    <td class="text-center">{{ $ticket->user_id}}</td>
                    <td class="text-center">{{ $ticket->invoice}}</td>
                    <td class="text-center">{{ $ticket->type}}</td>
                    <td class="text-center">{{ $ticket->created_at}}</td>
                    <td class="text-center">{{ $ticket->expiration}}</td>
                    <td class="text-center">{{ $ticket->status}}</td>

                    <td class="text-center">
                        <button wire:click="edit({{ $ticket->id }})" class="edit" type="button">
                            Editar
                        </button>
                        <button class="delete" onclick="confirm('Deseas eliminar este Ticket con folio {{$ticket->invoice}}?')||event.stopImmediatePropagation()" wire:click="destroy({{$ticket->id}})">
                            Eliminar
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
                    <x-nav-link class="text-white" style="border-color: rgb(234, 179, 8);" :href="route('swaps')" :active="request()->routeIs('swaps')">
                        {{ __('Canjes') }}
                    </x-nav-link>
                @endif
                @if(@Auth::user()->hasRole('administrator'))
                    <x-nav-link class="text-white" style="border-color: rgb(234, 179, 8);" :href="route('admin.view_tickets')" :active="request()->routeIs('admin.view_tickets')">
                        {{ __('Tickets') }}
                    </x-nav-link>
                @endif
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                @if(@Auth::user()->hasRole('visitator'))
                    <x-nav-link class="text-white" :href="route('swaps')" :active="request()->routeIs('swaps')">
                        {{ __('Premios') }}
                    </x-nav-link>
                @endif
                @if(@Auth::user()->hasRole('administrator'))
                    <x-nav-link class="text-white" :href="route('admin.view_users')" :active="request()->routeIs('admin.view_users')">
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
</div>