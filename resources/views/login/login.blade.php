<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galery | Login</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="https://img1.pngdownload.id/20180205/kce/kisspng-software-web-development-icon-software-png-photos-5a78d023632758.8912706715178670434061.jpg" type="image/x-icon">
</head>

<body>
    @if ($message = Session::get('logout'))
    <div class="alert alert-danger alert-sm" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($message = Session::get('nice'))
    <div class="alert alert-info alert-sm" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="container shadow-lg">
        <div class="row">
            <img src="img/logo.png" alt="" style="border-radius: 50%;" class="img-l">
            <div class="col-md-6">
                <form action="/proseslogin" method="post">
                    @csrf
                    {{-- Email --}}
                    <div class="form-group">
                        <label for="usern"></i></label>
                        <input type="email" name="email" id="email" placeholder="Email" autofocus
                            class="form-control" required/>
                    </div>

                    {{-- Password --}}
                    <div class="form-group mb-2">
                        <label for="password"></i></label>
                        <input type="password" name="password" id="your_pass" placeholder="Password"
                            class="form-control" required/>
                    </div>
                    {{-- Button --}}
                    <div class="form-group form-button">
                        <button type="submit" class="btn btn-warning">Login</button>
                    </div>
                    <p class="blockout uu1">Buat Akun?</p><a href="/register"
                        class="uu text-black text-decoration-none">Register</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>