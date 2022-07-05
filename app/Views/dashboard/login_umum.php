<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url("/assets/dist/img/LogoPKL.png") ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url("/css/dashboard/login/login-umum.css") ?>">
    <title>Login Dashboard</title>
    <style>
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light position-absolute w-100 d-flex justify-content-end">
            <button class="navbar-toggler mr-auto" style="transform:translateX(-20px);" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: #0A5446;"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                <div class="w-100 d-flex justify-content-end">
                    <div class="d-flex justify-content-end">
                        <ul class="navbar-nav d-flex flex-row justify-content-end w-100 bg-white" id="navbar">
                            <li class="nav-item mx-3 active">
                                <a class="nav-link" href="#">Media Sosial PKL</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="/">PKL 61</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="/login"><i class="fas fa-home"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="login-box p-3 m-auto">
                <div class="login-header d-flex flex-column">
                    <img src="<?= base_url('/assets/dist/img/LogoPKL.png') ?>" class="m-auto" width="100" alt="Logo PKL 61">
                    <h3 class="text-center mt-2 mb-0">Selamat Datang Kembali!</h3>
                    <p class="text-center mt-0">Silahkan masuk menggunakan Email</p>
                </div>
                <div class="login-body">
                    <form action="">
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" style="border-right: none;" id="password" placeholder="Masukkan Password">
                                <span class="d-flex align-items-center p-2 show-password"><i class="fas fa-eye-slash" onclick="showPassword(this)"></i></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex justify-content-between">
                                <span><input class="checkbox-round" type="checkbox" name="exampleRadios" id="exampleRadios2"></span>
                                <label for="exampleRadios2" class="ms-2">
                                    Remember me
                                </label>
                            </div>
                            <div>
                                <a href="#" class="nav-link p-0">
                                    <p class="" onmouseover="this.style.color='#2E9E89';"
                                        onmouseout="this.style.color='#0A5446';" style="color: #0A5446; cursor: pointer">
                                        Forget password?</p>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <input type="submit" id="btn-submit" value="Sign In">
                        </div>
                    </form>
                    <div class="mt-2">
                            <a href="/register" style="text-decoration: none;">
                                <div class="text-center w-100" id="btn-register">
                                    <span>Register</span>
                                </div>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-start">
            <img src="<?= base_url('/img/dashboard/login/deo_image.png') ?>" alt="Deo TI" width="400" class="">
        </div>
    </div>

    <div id="ornamen-1-1">
        <img src="<?= base_url('/img/dashboard/login/ornamen_1_1.png') ?>" alt="">
    </div>
    <!-- <div id="ornamen-2-1">
        <img src="<?= base_url('/img/dashboard/login/ornamen_2_1.png') ?>" alt="">
    </div> -->
    <div id="ornamen-2">
        <img src="<?= base_url('/img/dashboard/login/ornamen_2.png') ?>" alt="">
    </div>
    
    <!-- Script Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
        function showPassword(e) {
            var inputPassword = e.parentElement.previousElementSibling;
            var iconShow = e;
            if (inputPassword.type === "password") {
                inputPassword.type = "text";
                iconShow.classList.remove("fa-eye-slash");
                iconShow.classList.add("fa-eye");
            } else {
                inputPassword.type = "password";
                iconShow.classList.remove("fa-eye");
                iconShow.classList.add("fa-eye-slash");
            }
        };
    </script>
</body>

</html>