<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery | <?php echo e($title); ?></title>
    <link href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')); ?>" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
</head>

<body class=""> 
    <nav class="sidebar shadow-lg">
        <div class="ms-4 header">
            <h4><a href="/dashboard" class="text-decoration-none dashboard-btn">Dashboard</a></h4>
        </div>

        <?php if($title == 'Produk'): ?>
        <a href="/input" class="ms-3 text-decoration-none btn btn-outline-light slink">Tambah Data Produk</a>
        <?php else: ?>
        <a href="/produk" class="ms-3 text-decoration-none btn btn-outline-light slink">Kelola Data Produk</a>
        <?php endif; ?>

        <div class="logout ms-3">
            <form id="logout-form" action="/logout" method="post" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            <a href="#" class="btn btn-outline-light button-logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\case\resources\views/master/master.blade.php ENDPATH**/ ?>