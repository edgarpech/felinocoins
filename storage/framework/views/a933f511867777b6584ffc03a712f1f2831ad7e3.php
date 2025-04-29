<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Canjes</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
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
            width: 130px;
        }

        .bttn {
            width: 75px;
            height: 40.5px;
        }

        span {
            font-size: 40px;
            color: #fff;
        }

        .msgActive {
            margin: 15px 0;
            color: #f00;
        }

        @media  screen and (max-width: 500px) {
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
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/buttons_log.css')); ?>">
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
            color: rgba(255, 0, 0, 0.7);
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

        @media  screen and (max-width: 500px) {
            .desc p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body class="antialiased">
    <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <h2 style="font-size: 1.5rem; text-align: center; padding: 10px; color: #fff;">
                <?php echo e(__('MI PERFIL')); ?>

            </h2>
         <?php $__env->endSlot(); ?>
        <?php if(Session::has('message')): ?>
            <div class="rounded-b text-white px-4 py-3 shadow-md my-3"
                role="alert" style="background-color: rgba(237, 190, 27, 0.5); font-size: 1rem;">
                <div class="flex">
                    <div class="text-center" style="margin: auto; font-weight: bold;">
                        <p class="text-sm"><?php echo e(Session::get('message')); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="relative flex items-top justify-center min-h-screen sm:items-baseline py-4 sm:pt-4"
            style="color: #fff; background-color: rgb(0 12 66);">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div style="text-align: center;">
                    <button wire:click="abrirModal" class="btn log" style="margin: 10px;">Subir foto</button>
                    <img style="margin: auto;" src="<?php echo e($urlfoto); ?>" alt="foto de perfil" width="120px">
                </div>
                    <div style="box-shadow: 0 4px 8px 0 rgba(212,175,55,0.5); transition: 0.3s;" >
                        <div style="padding: 7px 16px; margin: 55px 8px; line-height: 25px; text-align: center;" >
                        <h3 class="text-2xl font-semibold mb-3 text-center md:text-left"><?php echo e($perfil->name); ?></h3>
                            <ul class="grid grid-cols-4 gap-2 place-items-end">
                                <?php if($editEmail): ?>
                                    <li class="col-span-3">
                                        <input type="text" wire:model="email" wire:blur="guardarEmail">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><br> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </li>
                                <?php else: ?>
                                    <li class="col-span-3"><?php echo e($perfil->email); ?></li>
                                <?php endif; ?>
                                <li>
                                    <button wire:click="editEmail">Editar</button>
                                </li>

                                <?php if($editName): ?>
                                    <li class="col-span-3">
                                        <input type="text" wire:model="name" wire:blur="guardarName">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><br> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </li>
                                <?php else: ?>
                                    <li class="col-span-3"><?php echo e(Auth::user()->name); ?></li>
                                <?php endif; ?>
                                <li>
                                    <button wire:click="editName">Editar</button>
                                </li>

                                <?php if($editDate): ?>
                                    <li class="col-span-3">
                                        <input type="date" wire:model="date_of_birth" wire:blur="guardarDate">
                                        <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><br> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </li>
                                <?php else: ?>
                                    <li class="col-span-3"><?php echo e($perfil->date_of_birth); ?></li>
                                <?php endif; ?>
                                <li>
                                    <button wire:click="editDate">Editar</button>
                                </li>

                                <?php if($editCareer): ?>
                                    <li class="col-span-3">
                                        <input type="text" wire:model="career" wire:blur="guardarCareer">
                                        <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><br> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </li>
                                <?php else: ?>
                                    <li class="col-span-3"><?php echo e($perfil->career); ?></li>
                                <?php endif; ?>
                                <li>
                                    <button wire:click="editCareer">Editar</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- form -->
                    <?php if($open): ?>
                    <div class="transition-opacity ease-in-out delay-150 min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="modal-id">
                        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
                        <div class="w-full  max-w-lg px-12 py-10 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
                            <!--content-->
                            <h3 class="text-2xl mb-3">Selecciona tu foto de perfil</h3>
                            <form wire:submit.prevent="save">
                                <div>
                                    <!--body-->

                                    <div class="flex items-center space-x-6">
                                        <div class="shrink-0">
                                            <?php if($photo): ?>
                                            <img src="<?php echo e($photo->temporaryUrl()); ?>" class="h-16 w-16 object-cover rounded-full">
                                            <?php else: ?>
                                            <img class="h-16 w-16 object-cover rounded-full" src="<?php echo e($urlfoto); ?>" alt="foto por defecto" />
                                            <?php endif; ?>
                                            
                                        </div>
                                        <label class="block">
                                            <span class="sr-only">Choose profile photo</span>
                                            <input type="file" wire:model="photo" class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-yellow-300 file:text-yellow-700
                                        hover:file:bg-yellow-100
                                        " />
                                        </label>

                                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <!--footer-->
                                    <div class="flex gap-4  mt-5 justify-end">
                                        <button wire:click="cerrarModal">Cancelar</button>
                                        <button>Listo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
    <nav id="navbar">
        <ul>
            <li class="w-full h-full py-4 px-2 border-t border-b border-light-border">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => '/']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => '/']); ?>
                    <?php echo e(__('Inicio')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('dashboard'),'active' => request()->routeIs('dashboard')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
                    <?php echo e(__('Panel')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                <?php if(@Auth::user()->hasRole('visitator')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('swaps'),'active' => request()->routeIs('swaps')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('swaps')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('swaps'))]); ?>
                    <?php echo e(__('Canjes')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if(@Auth::user()->hasRole('administrator')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('admin.view'),'active' => request()->routeIs('admin.view_tickets')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.view')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.view_tickets'))]); ?>
                    <?php echo e(__('Tickets')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </li>
            <li class="w-full h-full py-4 px-2 border-b border-light-border">
                <?php if(@Auth::user()->hasRole('visitator')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('awards'),'active' => request()->routeIs('awards')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('awards')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('awards'))]); ?>
                    <?php echo e(__('Premios')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if(@Auth::user()->hasRole('administrator')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('admin.view'),'active' => request()->routeIs('admin.view_users')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.view')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.view_users'))]); ?>
                    <?php echo e(__('Usuarios')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </li>
        </ul>
        <div id="name" style="color: white; text-align: center; margin-top: 10%;">
            <img src="https://i.ibb.co/m9XGm8k/logo-tecmoneda.png" width="150px" style="margin: auto;">
        </div>
    </nav>
    <div class="dark-blue" id="blue"></div>
</body>

</html>
<?php /**PATH D:\www\TecMonedas\resources\views/livewire/perfil.blade.php ENDPATH**/ ?>