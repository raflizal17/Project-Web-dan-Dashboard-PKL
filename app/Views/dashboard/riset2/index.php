<?= $this->extend('dashboard/layout/main') ?>

<?= $this->section('css') ?>
  <style>
    #dropdown h1 {
      font-size: 1.5em;
    }
    #dropdown-riset h1::selection {
      color: rgb(0, 75, 60);
    }
    #dropdown-riset:hover {
      cursor: pointer;
    }
  </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid px-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-2 baris-judul-riset">
          <div class="col-sm-11">
            <h3 class="judul-riset">Pemetaan Klasifikasi Lahan Pertanian dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content px-4 mt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="accordion w-100" id="accordionKotak1">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" type="button" onclick="putar(this)" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:rgb(0, 75, 60); font-weight: bold; font-size: 18px;">
                    Deskripsi Umum Riset 2
                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionKotak1">
                <div class="card-body" style="line-height: 2;">
                  <b>Latar Belakang Riset 2</b>
                  <p align="justify">Kecenderungan terus meningkatnya kebutuhan lahan menyebabkan tingginya laju alih 
                    fungsi lahan terutama sawah. Hal tersebut dapat menjadi ancaman serius yang dapat mengganggu ketahanan pangan 
                    sehingga perlu diteliti lebih lanjut mengenai karakteristik dan faktor-faktor yang mempengaruhi alih fungsi lahan
                    pertanian. Selain itu, dibutuhkan data estimasi luas tanam dan luas alih fungsi lahan yang up to date. Survei KSA yang biasa dilakukan oleh BPS memiliki beberapa keterbatasan dari segi ekonomi dan akurasi. 
                    Di sisi lain, penginderaan jauh dengan citra satelit dapat mengatasi keterbatasan tersebut</p>
                    <hr/>
                  <b>Kajian 1 : Pemetaan Klasifikasi dan Alih Fungsi Lahan Pertanian dengan Citra Satelit</b>
                    <p align="justify">Kajian 1 membahas tentang pembangunan model machine learning terbaik untuk mengklasifikasikan tutupan lahan yang ada di lokus penelitian dan evaluasi terhadap hasil klasifikasi model 
                    tersebut melalui proses ground check. Selain itu,  dilakukan juga estimasi luas lahan pertanian, khususnya padi dan analisis laju alih fungsi lahan pertanian khususnya sawah menjadi non-sawah. </p>
                    <hr/>
                  <b>Kajian 2 : Karakteristik dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian </b>
                    <p align="justify">Kajian 2 membahas tentang karakteristik dan alasan terjadinya alih fungsi lahan pertanian dari segi petani pelaku alih fungsi dan lahan yang dialihfungsikan melalui  pencacahan. Dengan menggunakan laju alih fungsi lahan dari <i>output</i> kajian 1, 
                      kajian 2 juga melakukan pemodelan spasial untuk mengetahui faktor-faktor yang mempengaruhi alih fungsi lahan pertanian di tingkat kewilayahan menggunakan sumber data sekunder.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" type="button" onclick="putar(this)" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:rgb(0, 75, 60); font-weight: bold; font-size: 18px;">
                    Kajian 1 : Pemetaan Klasifikasi dan Alih Fungsi Lahan Pertanian dengan Citra Satelit
                    <i class="accordion-icon fas fa-chevron-circle-down"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionKotak1">
                <div class="card-body" style="line-height: 2;">
                  <ol>
                    <li><h6>Tujuan 1 : Membangun model terbaik untuk klasifikasi tutupan lahan berdasarkan data citra satelit di Bandung Barat dan Purwakarta.</h6></li>
                      <ul>
                        <li><a href="/riset2/dashboard/kajian1">Persentase Piksel Labelling Menurut Kelas Tutupan Lahan</a></li>
                        <li><a href="/riset2/dashboard/tabel1">Tabel Dinamis Evaluasi Model Klasifikasi</a></li>
                      </ul>
                    <li><h6>Tujuan 2 : Menganalisis alih fungsi lahan terutama untuk lahan pertanian berdasarkan data citra satelit di Bandung Barat dan Purwakarta.</h6></li>
                      <ul>
                        <li><a href="/riset2/dashboard/kajian1#tab2">Persentase Klasifikasi Luas Tutupan Lahan</a></li>
                        <li><a href="/riset2/dashboard/peta1/5">Peta Klasifikasi Tutupan Lahan Bandung Barat</a></li>
                        <li><a href="/riset2/dashboard/peta1/6">Peta Klasifikasi Tutupan Lahan Purwakarta</a></li>
                        <li><a href="/riset2/dashboard/peta1/9">Peta Estimasi Luas Sawah Bandung Barat</a></li>
                        <li><a href="/riset2/dashboard/peta1/10">Peta Estimasi Luas Sawah Purwakarta</a></li>
                        <li><a href="/riset2/dashboard/tabel1#tab2">Tabel Dinamis Estimasi Luas Tutupan Lahan</a></li>
                      </ul>
                    <li><h6>Tujuan 3 : Melakukan <i>groundchecking</i> untuk evaluasi model klasifikasi tutupan lahan di Bandung Barat & Purwakarta</h6></li>
                      <ul>
                        <li><a href="/riset2/dashboard/peta1/1">Peta Umum Perubahan Lahan Bandung Barat </a></li>
                        <li><a href="/riset2/dashboard/peta1/2">Peta Umum Perubahan Lahan Purwakarta</a></li>
                        <li><a href="/riset2/dashboard/peta1/3">Peta Khusus Perubahan Lahan Bandung Barat</a></li>
                        <li><a href="/riset2/dashboard/peta1/4">Peta Khusus Perubahan Lahan Purwakarta</a></li>
                        <li><a href="/riset2/dashboard/peta1/7">Peta Tematik Laju Alih Fungsi Lahan Bandung Barat</a></li>
                        <li><a href="/riset2/dashboard/peta1/8">Peta Tematik Laju Alih Fungsi Lahan Purwakarta</a></li>
                        <li><a href="/riset2/dashboard/tabel1#tab3">Tabel Dinamis Estimasi Perubahan Luas Lahan</a></li>
                      </ul>
                  </ol>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" type="button" onclick="putar(this)" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:rgb(0, 75, 60); font-weight: bold; font-size: 18px;">
                    Kajian 2 : Karakteristik dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian
                    <i class="accordion-icon fas fa-chevron-circle-down"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionKotak1">
                <div class="card-body" style="line-height: 2;">
                  <ol>
                    <li><h6>Tujuan 1 : Mengetahui karakteristik alih fungsi lahan pertanian di Bandung Barat dan Purwakarta.</h6></li>
                      <ul>
                        <li><a href="/riset2/dashboard/kajian2">Persentase Karakteristik Alih Fungsi Lahan</a></li>
                        <li><a href="/riset2/dashboard/tabel2">Tabel Dinamis Karakteristik Alih Fungsi Lahan</a></li>
                      </ul>
                    <li><h6>Tujuan 2 : Mengetahui alasan petani pemilik lahan melakukan alih fungsi lahan di Bandung Barat dan Purwakarta.</h6></li>
                      <ul>
                        <li><a href="/riset2/dashboard/kajian2#tab2">Scatterplot Moran's Index Persentase Laju Alih Fungsi Lahan Sawah Tahunan</a></li>
                        <li><a href="/riset2/dashboard/peta2/11">Peta Tematik Persentase Laju Alih Fungsi Lahan Sawah Tahunan</a></li>
                        <li><a href="/riset2/dashboard/peta2/12">Peta Klaster LISA Persentase Laju Alih Fungsi Lahan Sawah Tahunan</a></li>
                        <li><a href="/riset2/dashboard/peta2/13">Peta Bivariate Choropleth Rasio Fasilitas Kesehatan 2021 dan Persentase Laju Alih Fungsi Lahan</a></li>
                        <li><a href="/riset2/dashboard/peta2/14">Peta Bivariate Choropleth Ketinggian Wilayah 2021 dan Persentase Laju Alih Fungsi Lahan Sawah Tahunan</a></li>
                        <li><a href="/riset2/dashboard/peta2/15">Peta Bivariate Choropleth Laju Pertumbuhan Penduduk dan Persentase Laju Alih Fungsi Lahan Sawah Tahunan</a></li>
                      </ul>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    Swal.fire({
      title: '<strong>Disclaimer</strong>',
      html:
        'Dashboard hasil PKL 61 sedang dalam pembangunan. Mohon maaf apabila kunjungan web Anda terganggu karena kurangnya informasi dan fungsionalitas yang kami berikan.',
    });
    let putar = function(e) {
      
      if ($(e).children().hasClass('fa-rotate-180')) {
        $(e).children().removeClass('fa-rotate-180');
      } else {
        if ($('#accordionKotak1 .card .card-header button').children().hasClass('fa-rotate-180') && 
            $('#accordionKotak1 .card').find('div.collapse').hasClass('show')) {
          $('#accordionKotak1.card .card-header button').children().removeClass('fa-rotate-180');
        }
        // if ($('#accordionTujuan3 .card .card-header button').children().hasClass('fa-rotate-180')&& 
        //     $('#accordionTujuan3 .card').find('div.collapse').hasClass('show')) {
        //   $('#accordionTujuan3 .card .card-header button').children().removeClass('fa-rotate-180');
        // }
        $(e).children().toggleClass('fa-rotate-180');
      }
    }
</script>
<?= $this->endSection() ?>
