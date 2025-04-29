<!-- Crear Tickets (Administrador) -->

<form class="formEdit">
    <div class="w-full">
        <div class="form-group">
            <label for="exampleFormControlInput1">User ID</label>
            <input type="text" class="form-control" wire:model="user_id" id="exampleFormControlInput1" placeholder="ID de usuario...">
        </div>
        <div class="form-group">
            <label for="invoice">Folio</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="invoice"
                value="<?php echo mt_rand(10000000, 99999999) ?>" placeholder="Folio...">
            <?php $__errorArgs = ['invoice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput2">Tipo de canje</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="type"
                placeholder="Tipo de canje...">
            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput3">Expiración</label>
            <input type="date" class="form-control" id="exampleFormControlInput3" wire:model="expiration"
                placeholder="Fecha de expiración...">
            <?php $__errorArgs = ['expiration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput4">Estado</label>
            <input type="text" class="form-control" id="exampleFormControlInput4" wire:model="status"
                placeholder="Estado del ticket...">
            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="text-center button-group">
            <button wire:click.prevent="store()" class="btn log mt-4">Agregar ticket</button>
        </div>
    </div>
</form><?php /**PATH D:\www\TecMonedas\resources\views/livewire/tickets/create.blade.php ENDPATH**/ ?>