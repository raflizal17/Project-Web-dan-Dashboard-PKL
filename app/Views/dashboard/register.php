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

    <link rel="stylesheet" href="<?= base_url("/css/dashboard/register/register.css") ?>">
    <title>Register</title>
</head>

<body> 
        <div class="register-box m-auto">
            <div class="register-head m-auto d-flex flex-column">
                <img src="/assets/dist/img/LogoPKL.png" class="m-auto" alt="Logo PKL 61">
                <h3 class="text-center mt-2">Daftar Akun Baru</h3>
                <p class="text-center">Silahkan isi Form di bawah ini</p>
            </div>
            <div class="register-body">
                <form action="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="instansi" class="form-label">Instansi</label>
                        <input type="text" class="form-control" id="instansi" placeholder="Masukkan Instansi" name="instansi">
                    </div>
                    <div class="mb-3">
                        <label for="asal-daerah" class="form-label">Asal Daerah</label>
                        <!-- <input type="text" class="form-control" id="asal-daerah" placeholder="Masukkan Asal Daerah"> -->
                        <select name="asal-daerah" id="asal-daerah" class="form-control">
                            <option value="">Pilih Provinsi</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Riau">Riau</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" style="border-right: none;" id="password" placeholder="Masukkan Password" name="password">
                            <span class="d-flex align-items-center p-2 show-password"><i class="fas fa-eye-slash" onclick="showPassword(this)"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" style="border-right: none;" id="confirm-password" placeholder="Masukkan Konfirmasi Password" name="konfirmasi-password">
                            <span class="d-flex align-items-center p-2 show-password"><i class="fas fa-eye-slash" onclick="showPassword(this)"></i></span>
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="submit" id="btn-submit" value="Daftar">
                        <p class="text-center text-muted mt-2">&copy;Copyright PKL 61</p>
                    </div>
                </form>
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

    <script>
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

        inputProvinsi = document.getElementById("asal-daerah");

        inputProvinsi.addEventListener('keyup', function() {
            var data = inputProvinsi.value;

            var dataURL = `<?= base_url('register') ?>/${data}`

            $.ajax({
              url: dataURL,
              type: 'GET',
              success: () => {
                  console.log(dataURL)
              }
            })
        });
    </script>
</body>

</html>