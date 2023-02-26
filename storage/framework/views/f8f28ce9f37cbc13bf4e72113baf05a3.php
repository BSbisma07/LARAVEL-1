
<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('nice')): ?>
<div class="alert alert-info alert-sm" role="alert">
    <?php echo e($message); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="container-dashboard">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
                <div class="card-body">
                    Selamat Datang di Halaman Dashboard School Gallery SMKN 2 Banjarmasin
                </div>
            </div>
            <div class="card text-center card-center d-flex justify-content-center mt-1" style="width: 23.2 rem;">
                <div class="card-body">
                    <h5 class="card-text"><?php echo e($data); ?></h5>
                    <h6 class="card-text">Produk</h6>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\case\resources\views/layout/dashboard.blade.php ENDPATH**/ ?>