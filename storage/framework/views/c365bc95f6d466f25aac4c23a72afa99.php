
<?php $__env->startSection('content'); ?>
<div class="input-text">
    <h4>
        <p class="blockout">Halaman Input Data</p>
    </h4>
</div>

<div class="container shadow-lg" style="height: 450px;">
    <div class="col-md-8">
        <form action="/updateData/<?php echo e($data->id); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="form-group m-2">
                <label for="">Judul Produk</label>
                <input class="form-control" type="text" name="judulProduk" id="" placeholder="Masukkan Judul Produk"
                    value="<?php echo e($data->judulProduk); ?>">
            </div>
            
            <div class="form-group m-2">
                <label for="">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" id="" placeholder="Masukkan Deskripsi"
                    value="<?php echo e($data->deskripsi); ?>">
            </div>
            
            <div class="form-group m-2">
                <label for="">Harga</label>
                <input class="form-control" type="number" name="harga" id="" placeholder="Masukkan Harga"
                    value="<?php echo e($data->harga); ?>">
            </div>
            
            <div class="form-group m-2 file">
                <label for="">Upload Gambar</label>
                <img src="<?php echo e(asset('upload/'.$data->gambar)); ?>" alt="" class="mb-1" width="100px" height="100px">
                <input class="form-control" type="file" name="gambar" id="">
                <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\case\resources\views/layout/edit.blade.php ENDPATH**/ ?>