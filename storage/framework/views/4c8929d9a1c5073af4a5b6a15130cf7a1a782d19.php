<form>
    <div id="createModal" class="modalContainer">
        <span class="close2">×</span>
        <div class="form-group">
            <label for="invoice">Folio</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="invoice"
                value="<?php print mt_rand(10000000, 99999999) ?>" placeholder="Folio...">
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
            <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="expiration"
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
        </div>
        <button wire:click.prevent="store()" class="has-background-white p-2 m-3">Agregar ticket</button>
    </div>
</form><?php /**PATH D:\www\TecMonedas\resources\views/livewire/create.blade.php ENDPATH**/ ?>