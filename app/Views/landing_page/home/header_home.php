<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PKL 61</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <!-- Icon Title -->
  <link rel="icon" href="<?= base_url("/assets/dist/img/LogoPKL.png") ?>" type="image/x-icon">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

  <!-- Template Main CSS File -->
  <link href="<?= base_url("/css/landing_page/home/general.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/css/landing_page/home/riset1.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/css/landing_page/home/riset2.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/css/landing_page/home/riset3.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/css/landing_page/home/riset4.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/css/landing_page/home/riset5.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/css/landing_page/home/umum.css") ?>" rel="stylesheet">

</head>

<body>
  <img src="/img/landing_page/home/general/Component1.png" class="bg" width="60%">


  <!-- Kodingan untuk navbar dan header -->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link" href=#riset1>RISET 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#riset2>RISET 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#riset3>RISET 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#riset4>RISET 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#riset5>RISET 5</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#umum>UMUM</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= About Section ======= -->

  <section class="about d-flex align-items-center">

    <div class="container-fluid">

      <!-- Desktop Version -->
      <div class="row align-items-center p-md-4 d-md-flex d-none" >
        <div class="col-5" data-aos="fade-up" data-aos-duration="1000">
          <div class="col-lg-5 background col-sm-12 col-9 mx-auto d-flex justify-content-center align-items-center order-lg-1 " >
            <a href="<?= base_url('riset/1') ?>"><img src="/img/landing_page/home/general/logo_pkl_61.png" width="100%"></a>
          </div>
          <h1 class="title mb-3 text-center">PKL 61</h1>
          <p style="text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales ac felis in gravida."</p>
          <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu dapibus, mattis est eget, interdum orci. Maecenas dapibus odio enim, sit amet faucibus enim viverra non. In accumsan nisl eros, id condimentum dui interdum vitae. Donec malesuada sodales erat. Sed tincidunt ante id ex pellentesque tempus. Sed tincidunt ante id ex pellentesque tempus. Sed tempor ac erat a feugiat. In mollis, leo nec scelerisque interdum, ante nibh volutpat metus, eu sollicitudin purus eros nec sem.</p>
        </div>
        <div class="col-4 float-end" data-aos="zoom-out" data-aos-duration="1000">
          <img src="<?= base_url("/img/landing_page/home/general/Mazkot 1.png") ?>" alt="maskot" class="float-end" width="70%">
        </div>
      </div>



      <!-- Mobile Version -->
      <div class="d-md-none p-5">
        <div class="d-inline-flex flex-column block" data-aos="fade-left" data-aos-duration="1000">
          <a href="<?= base_url('riset/1') ?>"><img src="/img/landing_page/home/general/logo_pkl_61.png" width="90%"></a>

          <div class="garis"></div>
        </div>
        <div class="d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
          <img src="/img/landing_page/riset1/mazkot.png" alt="Maskot" style="width: 45%;">
        </div>
        <div class="d-block mt-5 text-center" data-aos="zoom-out" data-aos-duration="1000">
          <h3 class="title mb-3">PKL 61</h3>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales ac felis in gravida."</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu dapibus, mattis est eget, interdum orci. Maecenas dapibus odio enim, sit amet faucibus enim viverra non. In accumsan nisl eros, id condimentum dui interdum vitae. Donec malesuada sodales erat. Sed tincidunt ante id ex pellentesque tempus. Sed tempor ac erat a feugiat. In mollis, leo nec scelerisque interdum, ante nibh volutpat metus, eu sollicitudin purus eros nec sem.</p>
        </div>
      </div>
    </div>
  </section>



  <!-- ======= PKL Section ======= -->
  <section class="angkatan py-5">
    <div class="container-fluid">

      <div class="row mx-auto justify-content-center align-items-center text-center container">
        <div class="one col-lg-4 col-md-6 my-5 m-2" data-aos="fade-up" data-aos-duration="1000">
          <h5 class="font-weight-bold pt-4">Politeknik Statistika STIS</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet sem. Integer sit amet consequat nulla. Phasellus blandit maximus sapien, consectetur maximus dui bibendum vitae. Maecenas euismod eu urna nec pharetra. Morbi vestibulum eros risus, id vestibulum augue interdum ut. Phasellus condimentum mi felis, quis placerat diam ultrices auctor. Donec scelerisque sagittis lorem. Sed vitae elementum nulla. Ut vel nunc ex.</p>
          <img class="img-fluid w-75" src="/img/landing_page/home/general/logo POLSTAT 1.png">
        </div>
        <div class="one col-lg-4 col-md-6 my-5 m-2" data-aos="fade-up" data-aos-duration="1000">
          <h5 class="font-weight-bold pt-4">Angkatan 61</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet sem. Integer sit amet consequat nulla. Phasellus blandit maximus sapien, consectetur maximus dui bibendum vitae. Maecenas euismod eu urna nec pharetra. Morbi vestibulum eros risus, id vestibulum augue interdum ut. Phasellus condimentum mi felis, quis placerat diam ultrices auctor. Donec scelerisque sagittis lorem. Sed vitae elementum nulla. Ut vel nunc ex.</p>
          <img class="img-fluid w-75" src="/img/landing_page/home/general/LOGO 61ANGKATAN fix 1.png" width="75%">
        </div>
      </div>
    </div>

  </section>
