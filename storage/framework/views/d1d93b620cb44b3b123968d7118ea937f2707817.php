<div id="myModal" class="modalContainer">
    <div class="modal-content">
        <span class="close">×</span>
        <h1>Confirmación</h1>
        <p>¿Desea eliminar este Ticket? <?php echo e($ticket->id); ?></p>
        <button class="has-text-danger" type="button" wire:click="delete(<?php echo e($ticket->id); ?>)">Confirmar</button>
    </div>
</div><?php /**PATH D:\www\TecMonedas\resources\views/livewire/delete.blade.php ENDPATH**/ ?>