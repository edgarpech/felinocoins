<?php foreach($attributes->onlyProps(['disabled' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['disabled' => false]); ?>
<?php foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<select <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']); ?>>
    <option selected></option>
    <option value="isc">Ingeniería en Sistemas Computacionales</option>
    <option value="ie">Ingeniería Electrónica</option>
    <option value="iem">Ingeniería Electromecánica</option>
    <option value="ier">Ingeniería en Energías Renovables</option>
    <option value="ii">Ingeniería Industrial</option>
</select><?php /**PATH /home/tecmon/tecmonedas/resources/views/components/select.blade.php ENDPATH**/ ?>