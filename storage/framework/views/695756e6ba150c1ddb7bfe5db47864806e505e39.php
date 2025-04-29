<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Usuarios</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #fff;
            padding: 3px;
        }

        .accion {
            color: #f00;
        }
    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

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
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('crud-users')->html();
} elseif ($_instance->childHasBeenRendered('IvDV0ry')) {
    $componentId = $_instance->getRenderedChildComponentId('IvDV0ry');
    $componentTag = $_instance->getRenderedChildComponentTagName('IvDV0ry');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IvDV0ry');
} else {
    $response = \Livewire\Livewire::mount('crud-users');
    $html = $response->html();
    $_instance->logRenderedChild('IvDV0ry', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html><?php /**PATH D:\www\TecMonedas\resources\views/admin/users.blade.php ENDPATH**/ ?>