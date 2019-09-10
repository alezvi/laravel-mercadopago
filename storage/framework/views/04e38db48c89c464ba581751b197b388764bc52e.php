<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo e($product->picture_url); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($product->title); ?></h5>
                        <p class="card-text"><?php echo e($product->description); ?></p>
                        <p class="card-text"><?php echo e($product->currency_id); ?> <?php echo e($product->unit_price); ?></p>
                    </div>
                    <div class="card-footer">
                        <form action="<?php echo e(url('/carrito', $product->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="row">
        <div class="col">
            <?php echo e($products->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\integracion-laravel-mp\resources\views/products/index.blade.php ENDPATH**/ ?>