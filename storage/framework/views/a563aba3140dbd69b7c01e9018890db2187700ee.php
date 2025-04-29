<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar perfil</title>

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
                <?php echo e(__('EDITAR PERFIL')); ?>
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
                    <div>
                        <div style="padding: 7px 16px; margin: 15px 8px; line-height: 25px; text-align: center;">
                        <img src="/uploads/photos/<?php echo e($user -> photo); ?>" alt="avatar" width="30%" style="margin: auto; margin-bottom: 15px; border: 1px solid #fff; border-radius: 50%;" name="photo">
                        <form action="<?php echo e(route('perfil.update', $user -> id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <input style="width: 300px;" type="file" name="photo" value="<?php echo e($user->photo); ?>"><br><br>
                            <label for="">Nombre:</label>
                            <input style="color: #000; width: 300px;" type="text" name="name" value="<?php echo e($user -> name); ?>"><br><br>
                            <label for="">Fecha de nacimiento:</label>
                            <input style="color: #000; width: 300px;" type="date" name="date_of_birth" value="<?php echo e($user -> date_of_birth); ?>"><br><br>
                            <label for="">Carrera:</label>
                            <select style="color: #000; width: 300px;" name="career">
                                <option value="isc">Ingeniería en Sistemas Computacionales</option>
                                <option value="ie">Ingeniería Electrónica</option>
                                <option value="iem">Ingeniería Electromecánica</option>
                                <option value="ier">Ingeniería en Energías Renovables</option>
                                <option value="ii">Ingeniería Industrial</option>
                            </select><br><br>
                            <label for="">Correo:</label>
                            <input style="color: #000; width: 300px;" type="email" name="email" value="<?php echo e($user -> email); ?>"><br><br>
                            <a href="/user/perfil" class="btn log" style="padding: 10px; margin: 0 5px;">Volver a perfil</a>
                            <button class="btn log" type="submit" style="padding: 8px;">Actualizar</button>
                        </form>
                        </div>
                    </div>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('admin.view_tickets'),'active' => request()->routeIs('admin.view_tickets')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.view_tickets')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.view_tickets'))]); ?>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('my-tickets'),'active' => request()->routeIs('my-tickets')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('my-tickets')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('my-tickets'))]); ?>
                    <?php echo e(__('Mis tickets')); ?>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['class' => 'text-white','href' => route('admin.view_users'),'active' => request()->routeIs('admin.view_users')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.view_users')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.view_users'))]); ?>
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

</html><?php /**PATH D:\www\Tecmonedasv3.0\resources\views/user/edit.blade.php ENDPATH**/ ?>