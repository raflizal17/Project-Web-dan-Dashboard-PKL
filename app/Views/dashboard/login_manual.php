<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="icon" href="http://localhost:8080/assets/dist/img/LogoPKL.png" type="image/x-icon">

    <style>
      nav li:hover{
        background: #EAF8E4;
        color: #0A5446;
        margin-left: 20px;
      }
      section button:hover{
        background: #79BAAA;
      }
      .ornamen{
        background-image: url(/img/dashboard/login/Group9.svg);
        background-repeat: no-repeat;
        background-position: right;
        background-attachment: fixed;
        background-position: right bottom;
        background-size: cover;
      }
      .ornamen2{
        background-image: url(/img/dashboard/login/ornamen1.png);
        background-repeat: no-repeat;
        background-position: right;
        background-attachment: fixed;
        background-position: right bottom;
        /* background-size: cover; */
      }
      .gambar{
        width:auto;
        height: 23rem;
        margin-left: 20%;
      }
      *{
        font-family: poppins;
      }
      .warna-nav{
        color: #0A5446;
      }
      .btn-login{
        background-color: #EAF8E4;
        padding: 15px;
        font-size: 1.1rem;
        width: 75%;
      }
      .logo{
        width: 35px;
        margin-right: 25px;
      }
      .selamat{
        font-size: 2.8vw;
      }
      .selamat2{
        font-size: 1.5rem;
      }
      .warna{
        color: #0A5446;
        font-weight: bold;
      }
      .tulisan-kecil{
        color: #0A5446;
        font-size: 0.8rem;
      }
      .tulisan-atau{
        padding-top: 15px;
      }
      .group{
        width: 3rem;
        margin-left:208px;
      }
      .group2{
        width: 3rem;
        margin-right:150px;
        margin-top:250px;
      }
      .ornamen1{
        height: 5rem;
      }
    </style>
  </head>

<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white warna-nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="#">Bantuan</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="#">Media Sosial PKL</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="#">PKL 61</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="#">
              <img src="/img/dashboard/login/Vector.png" alt="home" style="width:30px;height:23.33px">
            </a>
            </li>
          </ul>
          
      </div>
    </div>
  </nav>
</header>


<section>
      <div class="row p-md-5 p-3 d-md-flex d-none ornamen">
          <div class="col " data-aos="fade-left" data-aos-duration="1000">
            <center>
                <div class="md">
                    <!-- Logo PKL -->
                    <a href="#">
                      <img src="/img/landing_page/home/general/logo_pkl_61.png" alt="logo" style="width:120px;display:block; margin:auto;">
                    </a> 
                </div>

            <div>
                <p class="warna selamat">Selamat Datang Kembali!</p>
                <!-- <p class=" selamat"> Selamat Datang Kembali!</p> -->
                <p>Silahkan Pilih Metode Login</p>
            </div>
            </center>
  
            <div>
                <!-- Tombol login -->
                <div class="d-grid gap-2 col-6 mx-auto" style="width: 100%">
                <center>
                      <button class="btn btn-login warna" type="button" > 
                        <img src="/img/dashboard/login/stis.png" alt="stis" class="logo">
                        Sipadu
                      </button>
                      
                      <br>
                      <p>atau</p>
                      
                      <button class="btn btn-login warna" type="button">
                      <img src="/img/dashboard/login/bps.svg" alt="bps" class="logo">  
                      SSO BPS</button>
                </center>
                </div>
                
                <br>

                <center>
                <p class="tulisan-kecil">
                  &copy;Copyright PKL 61
                </p>
                </center>

            </div>
          </div>

          <div class="col d-inline-flex" data-aos="fade-up" data-aos-duration="1000">
                <img class="gambar" src="/img/dashboard/login/maskot.png" alt="Maskot">
         </div>
         
        </div>

<div class="container-fluid d-md-none ornamen2">
          <div class="col " data-aos="fade-left" data-aos-duration="1000">
            <center>
                <div class="md">
                    <!-- Logo PKL -->
                    <a href="#">
                      <img src="/img/landing_page/home/general/logo_pkl_61.png" alt="logo" style="width:120px;display:block; margin:auto;">
                    </a> 
                </div>

            <div>
                <h1 class="warna selamat2">Selamat Datang Kembali!</h1>
                <!-- <p class=" selamat"> Selamat Datang Kembali!</p> -->
                <p>Silahkan Pilih Metode Login</p>
            </div>
            </center>
  
            <div>
                <!-- Tombol login -->
                <div class="d-grid gap-2 col-6 mx-auto" style="width: 100%">
                <center>
                      <button class="btn btn-login warna" type="button" > 
                        <img src="/img/dashboard/login/stis.png" alt="stis" class="logo">
                        Sipadu
                      </button>
                      
                      <br><br>
                      <p>atau</p>
                      
                      <button class="btn btn-login warna" type="button">
                      <img src="/img/dashboard/login/bps.svg" alt="bps" class="logo">  
                      SSO BPS</button>
                </center>
                </div>
                
                <br>

                <center>
                <p class="tulisan-kecil">
                  &copy;Copyright PKL 61
                </p>
                </center>

            </div>
          </div>
</div>
</section>


<!-- <footer>
    <img src="/img/dashboard/login/ornamen2.svg" class="ornamen1" alt="ornamen 1">
</footer> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>