<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery | Register</title>
    <link href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')); ?>"
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container container-reg shadow-lg">
        <div class="row">
            <img src="img/logo.png" alt="" style="border-radius: 50%; position:absolute;top:-110px;" class="img-l">
            <div class="col-md-6">
                <form action="reg" method="post">
                    <?php echo csrf_field(); ?>
                    
                    <div class="form-group">
                        <label for="usern"></label>
                        <input type="text" name="name" id="usern" placeholder="Nama Lengkap" autofocus
                            class="form-control" required value="<?php echo e(old('name')); ?>" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" name="email" id="username" placeholder="Email" autofocus
                            class="form-control" required value="<?php echo e(old('email')); ?>" required/>
                    </div>
                    
                    <div class="form-group mb-1">
                        <label for="password"></label>
                        <input type="password" name="password" id="your_pass" placeholder="Password"
                            class="form-control" required required/>
                        
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="password"></label>
                        <input type="password" name="password2" id="your_pass" placeholder="Konfirmasi Password"
                            class="form-control" required required/>
                    </div>
                    
                    <div class="form-group form-button">
                        <button type="submit" class="btn btn-warning">Register</button>
                    </div>
                    <p class="blockout uu1 uu2">Punya Akun?</p><a href="/"
                        class="uu text-black uu3 text-decoration-none">Login</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\case\resources\views/login/register.blade.php ENDPATH**/ ?>