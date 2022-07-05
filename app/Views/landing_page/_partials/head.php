<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="icon" href="<?= base_url("/assets/dist/img/LogoPKL.png") ?>" type="image/x-icon">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url($css) ?>" rel="stylesheet">

    <style>
        * {
            font-family: poppins;
        }

        .navbar {
            font-size: 1.2rem;
            background-color: #0A5446;
        }

        .navbar .dropdown-menu {
            background-color: #0A5446;
        }

        .navbar .dropdown-menu .dropdown-item {
            transition: 0.2s;
        }

        .navbar .dropdown-menu .dropdown-item:hover {
            background-color: transparent;
            font-weight: bold;
        }

        .navbar .navbar-nav.d-lg-none .nav-item {
            margin: 0 !important;
            text-align: center;
        }

        .custom-toggler.navbar-toggler {
            border-color: white;
            border-width: 0.2rem;
            border-radius: 0.5rem;
            padding: 1px 5px;
        }

        /* Setting the stroke to green using rgb values (0, 128, 0) */

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        #mobile .nav-link:after {
            content: '';
            display: block;
            margin: auto;
            height: 1px;
            width: 0px;
            background: transparent;
            transition: width .5s ease, background-color .5s ease;
        }

        #mobile .nav-link:hover:after {
            width: 100%;
            background: white;
        }

        /* HEADER-SECTION */

        #header-section {
            background-color: #0A5446;
        }

        #header-section img {
            width: 50%;
        }

        #header-section .vector {
            background-image: url(/img/landing_page/riset1/vector_gelombang.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: local;
            min-height: 10vh;
            background-position: 0 1px;
        }

        #header-section .garis {
            width: 7rem;
            /* margin: 0 92.3%; */
            border-bottom: 0.8rem solid #A4D29F;
        }

        .hover {
            cursor: pointer;
        }

        @media (min-width:768px) and (max-width: 1025px) {
            #header-section .garis {
                width: 6rem;
                /* margin: 0 92.3%; */
                border-bottom: 0.7rem solid #A4D29F;
            }
        }

        @media (max-width: 768px) {
            #header-section {
                background-color: #f7f5f9;
            }

            #header-section .vector {
                background-image: url('/img/landing_page/riset1/Ornamen Header Mobile_1.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: local;
                background-position: top;
            }

            #header-section .garis {
                width: 5rem;
                /* margin: 0 92.3%; */
                border-bottom: 0.6rem solid #A4D29F;
            }
        }
    </style>

    <?= $this->renderSection('css') ?>
</head>
