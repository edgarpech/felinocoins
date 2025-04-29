<!-- Abrir cuenta (Usuario) -->

<form class="">
    <div class="">
        <div class="form-group hidden">
            <label for="user_id">User ID</label>
            <input type="text" class="form-control" value="<?php echo e(Auth::user()->id); ?>" id="exampleFormControlInput1" wire:model="user_id">
            <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group hidden">
            <label for="account"># Cuenta</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="account">
            <?php $__errorArgs = ['account'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group hidden">
        <label for="coins">Monedas</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="coins" value="0">
            <?php $__errorArgs = ['coins'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="button-group">
            <button wire:click.prevent="store()" class="btn log mt-4">Abrir cuenta</button>
        </div>
    </div>
</form><?php /**PATH D:\www\TecMonedas\resources\views/livewire/accounts/create.blade.php ENDPATH**/ ?>