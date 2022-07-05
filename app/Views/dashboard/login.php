<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url("/assets/dist/img/LogoPKL.png") ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url("/css/dashboard/login/login.css") ?>">

    <title>Login Dashboard</title>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid mx-sm-5 justify-content-end">
            <!-- <div class="navbar-brand text-white" href="#">
                <a class="text-decoration-none text-white" href="<?= base_url('/') ?>"><img src="/assets/dist/img/LogoPKL.png" alt="Logo PKL" height="45">
                    <span class="text-decoration-none text-white ms-2 fw-bold">PKL 61</span>
                </a>
            </div> -->
            <button class="navbar-toggler d-lg-none custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-white" type="submit">Search</button>
                </form> -->
                <div class="d-lg-flex d-none flex-row">
                    <a href="#" class="navbar-nav px-4">
                        Bantuan
                    </a>
                    <a href="#" class="navbar-nav px-4">
                        Medsos PKL
                    </a>
                    <a href="#" class="navbar-nav px-4">
                        Riset
                    </a>
                    <a href="#" class="navbar-nav px-4 mt-1">
                        <i class="fas fa-home"></i>
                    </a>
                </div>

                <!-- Responsive Mobile -->
                <ul id="mobile" class="navbar-nav d-lg-none d-flex flex-row justify-content-end mt-2">
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="#">Bantuan</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="#">Medsos PKL</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="#">Riset</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="#"><i class="fas fa-home"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div id="loginPanel" class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center text-center p-5" data-aos="fade-left" data-aos-duration="1000">
                <img src="/assets/dist/img/LogoPKL.png" alt="Logo PKL 61" width="100" style="margin-top: -15px;">
                <h4 class="fw-bold text-green mt-2">Selamat Datang Kembali!</h4>
                <p style="font-size: 0.9rem;" class="mt-2">Silahkan Pilih Metode Login</p>
                <a class="text-decoration-none text-green fw-bold p-2 d-flex justify-content-start align-items-center shadow" href="#" style="font-size: 0.9rem; width:21rem;">
                    <img class="ms-3" src="/img/dashboard/login/stis.png" alt="Logo STIS" width="40">
                    <span class="ms-5">Login dengan SIPADU</span>
                </a>
                <br>
                <!-- <p style="font-size: 0.9rem;" class="mt-2">atau</p> -->
                <a class="text-decoration-none text-green fw-bold p-2 d-flex justify-content-start align-items-center shadow" href="#" style="font-size: 0.9rem; width:21rem;">
                    <img class="ms-3" src="/img/dashboard/login/bps.svg" alt="Logo STIS" width="40">
                    <span class="ms-5">Login dengan SSO BPS</span>
                </a>
                <br>
                <!-- <p style="font-size: 0.9rem;" class="mt-2">atau</p> -->
                <a class="text-decoration-none text-green fw-bold p-2 d-flex justify-content-start align-items-center shadow" href="/login-umum" style="font-size: 0.9rem; width:21rem;">
                    <img class="ms-3" src="/img/dashboard/login/gmail_icon.png" alt="Logo STIS" width="40">
                    <span class="ms-5">Login dengan Gmail</span>
                </a>
                <p class="mt-3" style="font-size: 14px;">&copy;Copyright PKL 61</p>
            </div>
            <div class="col d-md-flex d-none justify-content-start align-items-center text-center" data-aos="zoom-out" data-aos-duration="1000">
                <img src="/img/dashboard/login/deo_image.png" alt="Deo TI" width="400" class="">
            </div>
        </div>
    </div>

    <!-- Script Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>