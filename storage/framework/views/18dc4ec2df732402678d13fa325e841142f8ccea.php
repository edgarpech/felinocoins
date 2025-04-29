<form class="formEdit">
    <div class="w-full">
        <div class="form-group">
            <input type="hidden" wire:model="user_id">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Fecha nacimiento</label>
            <input type="date" class="form-control" wire:model="date_of_birth" id="exampleFormControlInput2">
            <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput4">Carrera</label>
            <select style="padding: 7.5px !important;" name="career" id="exampleFormControlInput4" class="form-control" wire:model="career">
                <option selected></option>
                <option value="isc">Ingeniería en Sistemas Computacionales</option>
                <option value="ie">Ingeniería Electrónica</option>
                <option value="iem">Ingeniería Electromecánica</option>
                <option value="ier">Ingeniería en Energías Renovables</option>
                <option value="ii">Ingeniería Industrial</option>
            </select>
            <?php $__errorArgs = ['career'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput3">Correo</label>
            <input type="text" class="form-control" wire:model="email" id="exampleFormControlInput3">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="text-center button-group">
            <button wire:click.prevent="update()" class="btn log mt-4">Actualizar</button>
            <button wire:click.prevent="cancel()" class="btn log mt-4">Cancelar</button>
        </div>
    </div>

</form><?php /**PATH D:\www\TecMonedas\resources\views/livewire/users/update.blade.php ENDPATH**/ ?>