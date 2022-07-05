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
    .download{
      font-size: 18px;
    }
    .download:hover{
      opacity: 50%;
    }
    .container-fluid .nav.nav-tabs .nav-item .nav-link{
      width: 200px;
      text-align: center;
      font-weight: bold;
      background-color: white;
      color: #0A5446;
      border-radius: 10px 10px 0px 0px;
    }
    .container-fluid .nav.nav-tabs .nav-item .nav-link.active{
      background-color: #0A5446;
      color: white;
    }
  </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid pl-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-2 baris-judul-riset">
          <div class="col-sm-10">
            <h3 class="judul-riset">Karakteristik dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content pl-4 mt-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item p-0" role="presentation">
                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Tujuan 1</a>
              </li>
              <li class="nav-item p-0" role="presentation">
                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Tujuan 2</a>
              </li>
              <li>
                <div class="dropright">
                  <button class="btn" style="width: 50px;background-color: transparent;color: #0A5446;" id="dropdownInfo" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-info-circle mt-1" style="font-size: 22px;"></i>
                  </button>
                  <div class="dropdown-menu" style="z-index: 10000000; width: 500px; border-radius: 15px;" aria-labelledby="dropdownInfo">
                    <p class="pl-3 pr-3">
                      <ul style="list-style-type:disc">
                        <li style="text-align: justify; padding-right: 2.5em;">Tujuan 1 <br>Mengetahui karakteristik alih fungsi lahan pertanian di Bandung Barat dan Purwakarta.</li>
                        <li style="text-align: justify; padding-right: 2.5em;">Tujuan 2 <br>Mengetahui alasan petani pemilik lahan melakukan alih fungsi lahan di Bandung Barat dan Purwakarta.</li>
                      </ul>
                    </p>
                  </div>
                </div>
              </li>
            </ul>

            <div class="tab-content">
            <div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                <div class="row">  
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 1 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Usia di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi1" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi1" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 2 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Persentase (%) Jumlah Anggota Rumah Tangga Petani Pelaku Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi2" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi2" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>


                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 3a -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title"style="font-size: 1.05rem;" >Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Tingkat Pendidikan di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi3a" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi3a" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 3b -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Lama Bertani di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi3b" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi3b" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 4 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Persentase (%) Pekerjaan Utama Petani Setelah Melakukan Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi4" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi4" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 12 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1rem;">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Luas Kepemilikan Lahan di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi12" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi12" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 14 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom ">
                        <h3 class="card-title" style="font-size: 1.05rem;">Persentase (%) Petani Pelaku Alih Fungsi Lahan Menurut Asal Mula Lahan Pertanian di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi14" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body mt-n1">
                        <div class="chart">
                          <canvas id="visualisasi14" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 16 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title fs-1" style="font-size: 1.05rem;">Persentase (%) Luas Alih Fungsi Lahan di Kabupaten Bandung Barat dan Purwakarta </h3><br>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi16" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body mt-3">
                        <div class="chart">
                          <canvas id="visualisasi16" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 24 Pie Chart -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Persentase (%) Mekanisme Alih Fungsi Lahan Pertanian di Kabupaten Bandung Barat</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi24" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi24" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 18a -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Persentase (%) Harga Jual Lahan (ribu rupiah/m2 ) di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi18a" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi18a" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 18c -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Harga Jual Lahan (ribu rupiah/m²) di Kabupaten Bandung Barat  dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="visualisasi18c" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <!-- <canvas id="visualisasi18c" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas> -->
                          <div id='visualisasi18c' style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- Visualisasi 19c -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Harga Sewa Lahan (ribu rupiah/m²) di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="visualisasi19c" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <div id="visualisasi19c" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 m-auto">
                    <!-- Visualisasi 19a -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size: 1.05rem;">Persentase (%) Harga Sewa Lahan (ribu rupiah/m2 ) di Kabupaten Bandung Barat dan Purwakarta</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="visualisasi19a" data-judul="Chart_Kajian2"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="visualisasi19a" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                </div>
              </div>

              <div class="tab-pane p-2" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                <div class="row">  
                <div class="col-lg-8 col-md-12 m-auto">
                    <!-- SCATTERPLOT MORAN RIDSON-->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Scatterplot Moran's Index Persentase Laju Alih Fungsi Lahan Sawah Tahunan</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="moransc" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="moransc" style="min-height: 48.64vh; height: 48.64vh; max-height: 48.64vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
<!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
<script>
  // Tujuan 1
  $(function () {
    ctx = document.getElementById('visualisasi1').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Dewasa Awal (18-40 tahun)'], 
            ['Dewasa Madya (41-60 tahun)'], 
            ['Dewasa Akhir (> 60 tahun)'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [39.17525773, 65.97938144, 45.87628866],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom",
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });
    

    ctx = document.getElementById('visualisasi2').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
           ['Di Bawah Rata-rata (1-2)'], 
            ['Sekitar Rata-rata (3-4)'], 
            ['Di atas Rata-rata (>4)'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [19.45392491, 52.90102389, 27.64505119],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    ctx = document.getElementById('visualisasi3a').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Pendidikan Dasar'], 
            ['Pendidikan Menengah'], 
            ['Pendidikan Tinggi'], 
        ],     
          datasets: [
            {
              label:  'Bandung Barat',
              data: [60.07, 33.79, 6.14],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    ctx = document.getElementById('visualisasi3b').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['1-20 tahun'], 
            ['21-40 tahun'], 
            ['>40 tahun'], 
        ],  
          datasets: [
            {
              label:  'Purwakarta',
              data: [51.88, 26.62, 21.50],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      
      options: {
        maintainAspectRatio: false,
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    ctx = document.getElementById('visualisasi4').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Pertanian'], 
            ['Usaha Lain'], 
            ['Tidak Bekerja'], 
        ],
        datasets: [
            {
              label: '# of Votes',
              data: [51.88, 33.45, 14.68],
              backgroundColor: [
                '#a9e9a4',
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });


    ctx = document.getElementById('visualisasi12').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['<1000 m²'], 
            ['1001-2000 m²'], 
            ['>2000 m²'] 
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [59.72696246, 15.6996587, 24.57337884],
              backgroundColor: [
                  '#a9e9a4',
                  '#77dd77',
                  '#508d4f',
              ],
              borderWidth: 0
          }]
      },
      options: {
        maintainAspectRatio: false,
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    ctx = document.getElementById('visualisasi14').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
            ['Beli'], 
            ['Warisan'] 
          ],
          datasets: [
            {
              label: '# of votes',
              data: [40.96, 59.04],
              backgroundColor: [
                  '#77dd77',
                  '#508d4f'
              ],
              borderWidth: 0
          }]
      },
      options: {
        maintainAspectRatio: false,
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    ctx = document.getElementById('visualisasi16').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
          ['Rendah (1-700 m²)'], 
          ['Sedang (701-1400 m²)'], 
          ['Tinggi (>1400 m²)']
        ],
          datasets: [
          {
              label: '# of Votes',
              data: [73.72, 9.56, 16.72],
              backgroundColor: [
                  '#a9e9a4', 
                  '#77dd77',
                  '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    ctx = document.getElementById('visualisasi24').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
          ['Melalui Transaksi Penjualan'], 
          ['Bukan Melalui Transaksi Penjualan'],
        ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [27.32, 72.68],
              backgroundColor: [
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    ctx = document.getElementById('visualisasi18a').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
          ['Rendah (1-250)'], 
          ['Sedang (251-500)'], 
          ['Tinggi (>500)'],
        ],
          datasets: [
            {
              label:  'Bandung Barat',
              data: [65.53, 22.18, 12.29],
              backgroundColor: [
                '#a9e9a4', 
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      }
    });

    //18c boxplot harga jual
    var options = {
      series: [
        {
          name: 'box',
          type: 'boxPlot',
          data: [
            {
              x: 'Bandung Barat',
              y: [8, 100, 177, 357, 722]
            },
            {
              x: 'Purwakarta',
              y: [8, 100, 150, 250, 400]
            }
          ]
        },
        {
          name: 'Outlier',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [750] 
            },
            {
              x: 'Purwakarta',
              y: [500] 
            }
          ]
        },
        {
          name: 'Outlier',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [800] 
            },
          ]
        },
      ],
      chart: {
        id : 'visualisasi18c',
        type: 'boxPlot',
        width: '94%',
        height: '100%',
        toolbar: {
          show: true,
          tools: {
            // download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
            download: false,
            zoom: false,
            zoomin: false,
            zoomout: false,
            pan: false,
            selection: false,
            reset: false
          }
        }
      },
      colors: ['#77dd77'],                    
      plotOptions: {
        bar:{
          columnWidth : '80%'
        },
        boxPlot:{
          colors: {
            upper: '#77dd77', 
            lower: '#77dd77'
          }
        }
      },
      legend: {
        show: false
      },
      grid:{
        show: false
      },
      xaxis:{
        labels: {
          title: {
            text: 'Harga Jual Lahan (ribu rupiah/m2)'
          }
        }
      },
      tooltip: {
          shared: false,
          intersect: true
        }
    }
    var chart = new ApexCharts(document.querySelector("#visualisasi18c"), options);
    chart.render();

    //19 a
    ctx = document.getElementById('visualisasi19a').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [
          ['Rendah (<=50)'], 
          ['Sedang (51-100)'], 
          ['Tinggi (>100)'],
        ],
          datasets: [
            {
              label:  'Bandung Barat',
              data: [79.18, 9.56, 11.26],
              backgroundColor: [
                '#a9e9a4', 
                '#77dd77',
                '#508d4f'
              ],
              borderWidth: 0
            }
          ],
      },
      options: {
        maintainAspectRatio: false,
          scales: {
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },      
        plugins: {
          tooltip:{
            callbacks: {
              label: function (ctx, data) {
                return ctx.label[0] + " : " + parseFloat(ctx.dataset.data[ctx.dataIndex]).toFixed(2) + "%";
              }
            }
          }
        }
      },
    });

    // 19c
    var options = {
      series: [
        {
          name: 'box',
          type: 'boxPlot',
          data: [
            {
              x: 'Bandung Barat',
              y: [0.3, 5, 15, 27.5, 57]
            },
            {
              x: 'Purwakarta',
              y: [0.18, 1.35, 4, 15, 33]
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [71] 
            },
            {
              x: 'Purwakarta',
              y: [40] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [74] 
            },
            {
              x: 'Purwakarta',
              y: [45] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [75] 
            },
            {
              x: 'Purwakarta',
              y: [50] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [80] 
            },
            {
              x: 'Purwakarta',
              y: [55] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Bandung Barat',
              y: [93] 
            },
            {
              x: 'Purwakarta',
              y: [60] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [65] 
            },
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [70] 
            }
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [90] 
            },
          ]
        },
        {
          name: 'outliers',
          type: 'scatter',
          data: [
            {
              x: 'Purwakarta',
              y: [100] 
            },
          ]
        },
             ],
      chart: {
        id: 'visualisasi19c',
        // width: '560',
        offsetY: 0,
        width: '94%',
        height: '100%',
        type: 'boxPlot',
        toolbar: {
          show: true,
          tools: {
            // download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
            download: false,
            zoom: false,
            zoomin: false,
            zoomout: false,
            pan: false,
            selection: false,
            reset: false
          }
        }
      },
      colors: ['#77dd77'],                 
      plotOptions: {
        boxPlot:{
          colors: {
            upper: '#77dd77', 
            lower: '#77dd77'
          }
        }
      },
      grid:{
        show: false
      },
      legend: {
        show: false
      },
      // title: {
      //     text: ['Harga Sewa Lahan di Kabupaten Bandung'],
      //     margin: 30,
      //     style: {
      //       fontSize:  '1.15em',
      //       fontWeight:  'light',
      //       fontFamily:  "Poppins, sans-serif",
      //     },
      // },
      // subtitle: {
      //   text: 'Barat dan Purwakarta',
      //   offsetY: 33,
      //   style: {
      //         fontSize:  '1.15em',
      //         fontWeight:  'light',
      //         fontFamily:  "Poppins, sans-serif",
      //     }
      // },
      tooltip: {
          shared: false,
          intersect: true
      },
      // responsive: [
      //   {
      //     breakpoint: 550,
      //     options: {
      //       title: {text: 'Harga Sewa Lahan di Kabupaten'},
      //       subtitle: {text: 'Bandung Barat dan Purwakarta'}
      //     }
      //   }
      // ]

    }

    var chart = new ApexCharts(document.querySelector("#visualisasi19c"), options);
    chart.render();
  });

// Stacked Bar chart
$(function () {
    // Visualisasi 23
      ctx = document.getElementById('visualisasi23').getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Padi', 'Palawija', 'Hortikultura', 'Lainnya', 'Padi', 'Palawija', 'Hortikultura', 'Lainnya'],
                datasets: [{
                    label: 'Rendah (1-250)',
                    data: [54.41, 70.27, 36.36, 100, 76.74, 100, 50, 100],
                    backgroundColor: '#a9e9a4',
                    borderColor: '#1a2519',
                    borderWidth: 1
                }, {
                    label: 'Sedang (251-500)',
                    data: [27.94,18.92,45.45,0,15.12,0,50,0],
                    backgroundColor: '#77dd77',
                    borderColor: '#1a2519',
                    borderWidth: 1
                },{
                    label: 'Tinggi (>500)',
                    data: [17.65,10.81,18.18,0,8.14,0,0,0],
                    backgroundColor: '#508d4f' ,
                    borderColor: '#1a2519',
                    borderWidth: 1
                }]
            },
            options: {
              maintainAspectRatio: false,
              indexAxis: 'y',
                scales: {
                    y: {
                        grid:{
                            display:false
                        },
                        stacked: true,
                        title: {
                          display: true,
                          text : '       PURWAKARTA       BANDUNG BARAT',
                          font : {weight: 'bold', size: 12}
                        }
                    },
                    x :{
                        stacked: true,
                        max:100,
                        grid:{
                            display:false
                        },
                    }
                }
            }
        });
  });
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  // Tujuan 2 (BIVARIATE SCATTERPLOT MORAN)
  $(function () {
    if (window.location.href.endsWith("#tab2")) document.getElementById("tab-2").click();
    ctx = document.getElementById('moransc').getContext('2d');
    
    const moran_pointSize = 3.5;
    const data_moran = {
        datasets: [{
            type: 'scatter',
            label: 'High-High',
            data: [
              {x: 0.107119137863889, y: 1.32356424297942, kab: 'Bandung Barat', kec: 'Cihampelas'},
              {x: 1.32356424297942, y: 1.14061476090054, kab: 'Bandung Barat', kec: 'Cililin'},
              {x: 0.040987003181021, y: 0.725189103177352, kab: 'Bandung Barat', kec: 'Cipatat'},
              {x: 0.50149836440333, y: 0.276874374093636, kab: 'Bandung Barat', kec: 'Cipeundeuy'},
              {x: 1.55478535621368, y: 1.34625190962245, kab: 'Bandung Barat', kec: 'Cipongkor'},
              {x: 1.80290154035233, y: 1.51407628060598, kab: 'Bandung Barat', kec: 'Gununghalu'},
              {x: 0.206558698043969, y: 0.204145116486199, kab: 'Bandung Barat', kec: 'Lembang'},
              {x: 0.864983747003328, y: 0.124496925079826, kab: 'Bandung Barat', kec: 'Ngamprah'},
              {x: 1.22750369698022, y: 1.67884344828301, kab: 'Bandung Barat', kec: 'Rongga'},
              {x: 1.92261518561766, y: 0.53126587028248, kab: 'Bandung Barat', kec: 'Saguling'},
              {x: 1.75993978862404, y: 1.56041704651514, kab: 'Bandung Barat', kec: 'Sindangkerta'}
            ],
            borderColor: 'red',
            backgroundColor: 'red',
            pointRadius: moran_pointSize
        }, {
            type: 'scatter',
            label: 'High-Low',
            data: [
              {x: 0.425711903489386, y: -0.00197474854726539, kab: 'Bandung Barat', kec: 'Batujajar'},
              {x: 0.250968598706917, y: -0.154030386686707, kab: 'Bandung Barat', kec: 'Cisarua'},
              {x: 0.204145116486199, y: -0.554805604354235, kab: 'Bandung Barat', kec: 'Parongpong'},
              {x: 1.14061476090054, y: -0.409870031810211, kab: 'Purwakarta', kec: 'Maniis'},
              {x: 0.0134721734224557, y: -0.67256424855778, kab: 'Purwakarta', kec: 'Purwakarta'}
            ],
            borderColor: 'orange',
            backgroundColor: 'orange',
            pointRadius: moran_pointSize
        }, {
            type: 'scatter',
            label: 'Low-High',
            data: [
              {x: -0.00197474854726539, y: 0.525714632699611, kab: 'Bandung Barat', kec: 'Padalarang'},
              {x: -0.541651584864394, y: 0.204949643672123, kab: 'Purwakarta', kec: 'Sukasari'}
            ],
            borderColor: 'rgb(135, 206, 235)',
            backgroundColor: 'rgb(135, 206, 235)',
            pointRadius: moran_pointSize
        }, {
            type: 'scatter',
            label: 'Low-Low',
            data: [
              {x: -0.35097864180065, y: -0.213102795313101, kab: 'Bandung Barat', kec: 'Cikalong Wetan'},
              {x: -0.357736670162403, y: -0.392331339157091, kab: 'Purwakarta', kec: 'Jatiluhur'},
              {x: -0.437384861568777, y: -0.499172549447661, kab: 'Purwakarta', kec: 'Babakancikao'},
              {x: -1.48632740657515, y: -0.50963140286466, kab: 'Purwakarta', kec: 'Bojong'},
              {x: -1.15325315160304, y: -0.485495587286971, kab: 'Purwakarta', kec: 'Bungursari'},
              {x: -1.03257407371459, y: -0.62504082768531, kab: 'Purwakarta', kec: 'Campaka'},
              {x: -0.978509846820567, y: -0.967697001441763, kab: 'Purwakarta', kec: 'Cibatu'},
              {x: -1.13297906651778, y: -0.772293438524791, kab: 'Purwakarta', kec: 'Darangdan'},
              {x: -1.39509402369148, y: -1.08446607720662, kab: 'Purwakarta', kec: 'Kiarapedes'},
              {x: -0.381872485740092, y: -0.638774106749015, kab: 'Purwakarta', kec: 'Pasawahan'},
              {x: -1.01760986805642, y: -0.278764281592204, kab: 'Purwakarta', kec: 'Plered'},
              {x: -0.83852211646997, y: -0.81369670616149, kab: 'Purwakarta', kec: 'Pondok Salam'},
              {x: -0.168029159721767, y: -0.518619120855971, kab: 'Purwakarta', kec: 'Sukatani'},
              {x: -0.882449300821364, y: -0.0150080889592176, kab: 'Purwakarta', kec: 'Tegal Waru'},
              {x: -1.19042230759268, y: -0.898861655414193, kab: 'Purwakarta', kec: 'Wanayasa'}
            ],
            borderColor: 'rgb(16,78,139)',
            backgroundColor: 'rgb(16,78,139)',
            pointRadius: moran_pointSize
        }, {
            // horizontal line
            type: 'line',
            data: [
                {x: -3, y: 0},
                {x: 3, y: 0}
            ],
            pointRadius: 0,
            borderDash: [5, 5],
            borderColor: 'rgb(153,153,153)',
            borderWidth : 2
        }, {
            // vertical line
            type: 'line',
            data: [
                {x: 0, y: -2},
                {x: 0, y: 2}
            ],
            pointRadius: 0,
            borderDash: [5, 5],
            borderColor: 'rgb(153,153,153)',
            borderWidth : 2
        }, {
            // garis regresi
            type: 'line',
            data: [
              {x: -2, y: 0.01970313 + -2 * 0.62472574},
              {x: 2, y: 0.01970313 + 2 * 0.62472574}
            ],
            pointRadius: 0,
            borderColor: 'maroon'
        }]
    };

    const moran_config = {
        type: 'scatter',
        data: data_moran,
        options: {
          maintainAspectRatio: false,
          scales : {
              yAxes: {
                  title: {
                      display: true,
                      text: 'Spatial Lag'
                  },
                  max: 2,
                  min: -1.5
              },
              xAxes: {
                  title: {
                      display: true,
                      text: 'Laju Alih Fungsi Lahan'
                  },
                  min: -2,
                  max: 2
              }
          }, 
          plugins : {
              legend : {
                  display : true,
                  position: 'right',
                  title : {
                      display: true,
                      text: 'Klaster'
                  },
                  labels : {
                      filter: function(item, chart) {
                          return item.text !== undefined;
                      },
                      boxWidth : 13
                  },
                  usePointStyle: true
              },
              tooltip: {
                  callbacks: {
                      label: function(t, d) {
                        var dat = t.raw;
                        var xlabel = dat.x.toFixed(3);
                        var ylabel = dat.y.toFixed(3);

                        return  ['Kab :  ' + dat.kab,  'Kec :  ' + dat.kec,  '(' + xlabel + ', ' + ylabel + ')'];
                      }
                  }
              },
              subtitle: {
                  display: true,
                  text: 'Indeks Moran: 0.6247',
                  align: 'start',
                  font : {
                      size: 15
                  },
                  padding:{
                      bottom: 20
                  }
              }
          }
        }
    };
    moranScPlot = new Chart(ctx, moran_config);
  });
</script>

<script>
  var download = function(e){
    let id = $(e).data('id');
    let judul = $(e).data('judul');
    var link = document.createElement('a');
    link.download = `${judul}.png`;
    link.href = document.getElementById(id).toDataURL()
    link.click();
  }

  var download_apex = function(e){
    let id = $(e).data('id');
    console.log(id);
    const base64 = ApexCharts.exec(id, 'dataURI');

    base64.then(({imgURI, blob}) => { 
        var a = document.createElement("a"); 
        a.href = imgURI
        a.download = "Image.png"; 
        a.click();
    })
  }
</script>
<?= $this->endSection() ?>
