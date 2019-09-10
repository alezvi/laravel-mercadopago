<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <td>Producto</td>
                    <td>Precio Unitario</td>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->unit_price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <a href="<?php echo e(url('/productos')); ?>">Seguir Comprando</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\integracion-laravel-mp\resources\views/cart/index.blade.php ENDPATH**/ ?>