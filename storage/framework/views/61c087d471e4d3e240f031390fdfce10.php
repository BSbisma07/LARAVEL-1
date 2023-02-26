
<?php $__env->startSection('content'); ?>

    
<?php if($message = Session::get('nice')): ?>
<div class="alert alert-info alert-sm" role="alert">
    <?php echo e($message); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="container-table">
    <div class="row">
        <div class="col-md-10">
            <table class="table bg-info shadow-lg" style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">Id&nbsp;Produk</th>
                        <th scope="col">Judul&nbsp;Produk</th>
                        <th scope="col">Deskripsi&nbsp;Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col" class="text-center">Gambar</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <?php
                    $i = 1
                    ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($i++); ?></td>
                        <td><?php echo e($produk->judulProduk); ?></td>
                        <td><?php echo e($produk->deskripsi); ?></td>
                        <td><?php echo e($produk->harga); ?></td>
                        <td><img src="<?php echo e(asset('upload/'.$produk->gambar)); ?>" alt="" width="170px" height="170px"></td>
                        <td>
                            <a href="/edit/<?php echo e($produk->id); ?>" class="btn btn-warning mb-1 shadow-lg btncrud">Edit</a>
                            <button type="button" class="btn btn-dark shadow-lg btncrud" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Hapus
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <center>
            <div class="modal-content">
                <div class="modal-header">
                    
                </div>
                <div class="modal-body">
                    <p class="blockout fs-5">Apakah Anda Yakin?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="/hapus/<?php echo e($produk->id); ?>" class="btn btn-dark">Iya</a>
                </div>
            </div>
        </center>
    </div> 
</div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\case\resources\views/layout/produk.blade.php ENDPATH**/ ?>