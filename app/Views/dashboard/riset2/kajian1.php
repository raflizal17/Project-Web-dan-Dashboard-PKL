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
            <h3 class="judul-riset">Pemetaan Klasifikasi dan Alih Fungsi Lahan Pertanian dengan Citra Satelit</h3>
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
                        <li style="text-align: justify; padding-right: 2.5em;">Tujuan 1 <br>Membangun model terbaik untuk klasifikasi tutupan lahan berdasarkan data citra satelit di Bandung Barat dan Purwakarta.</li>
                        <li style="text-align: justify; padding-right: 2.5em;">Tujuan 2 <br>Menganalisis alih fungsi lahan terutama untuk lahan pertanian berdasarkan data citra satelit di Bandung Barat dan Purwakarta.</li>
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
                    <!-- BAR CHART KBB L81321 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase Piksel Labelling Menurut Kelas Tutupan Lahan Lokus Bandung Barat (Landsat-8 2013 & 2021)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_L81321" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_L81321" style="min-height: 58.88vh; height: 58.88vh; max-height: 58.88vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- BAR CHART PWK L81321  -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase Piksel Labelling Menurut Kelas Tutupan Lahan Lokus Purwakarta (Landsat-8 2013 & 2021)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartPWK_L81321" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartPWK_L81321" style="min-height: 58.88vh; height: 58.88vh; max-height: 58.88vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- BAR CHART KBB_PWK L813 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase Piksel Labelling Menurut Kelas Tutupan Lahan Lokus Bandung Barat dan Purwakarta (Landsat-8 2013)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_PWK_L813" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_PWK_L813" style="min-height: 58.88vh; height: 58.88vh; max-height: 58.88vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- BAR CHART KBB PWK L821 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Persentase Piksel Labelling Menurut Kelas Tutupan Lahan Lokus Bandung Barat dan Purwakarta (Landsat-8 2021)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_PWK_L821" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_PWK_L821" style="min-height: 58.88vh; height: 58.88vh; max-height: 58.88vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- BAR CHART KBB PWK S2 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" style="font-size:16px;">Persentase Piksel Labelling Menurut Kelas Tutupan Lahan Lokus Bandung Barat dan Purwakarta (Sentinel-2)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB_PWK_S2" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB_PWK_S2" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- HEATMAP KBB LANDSAT-8 2013 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title" >Heatmap Feature Selection Landsat-8 2013 <br> (Bandung Barat)</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="heatmapKBBL82013" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <div id="heatmapKBBL82013" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- HEATMAP PWK LANDSAT-8 2013 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Heatmap Feature Selection Landsat-8 2013 <br> (Purwakarta)</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="heatmapPWKL82013" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <!-- <canvas id="heatmapKBBL82013" style="min-height: 23rem; height: 23rem; max-height: 23rem; max-width: 100%;"></canvas> -->
                          <div id="heatmapPWKL82013" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- HEATMAP KBB LANDSAT-8 2021 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Heatmap Feature Selection Landsat-8 2021<br> (Bandung Barat)</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="heatmapKBBL82021" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <div id="heatmapKBBL82021" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- HEATMAP PWK LANDSAT-8 2021 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Heatmap Feature Selection Landsat-8 2021<br> (Purwakarta)</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="heatmapPWKL82021" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <div id="heatmapPWKL82021" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- HEATMAP KBB SENTINEL-2 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Heatmap Feature Selection Sentinel-2<br> (Bandung Barat)</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="heatmapKBBS2" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <div id="heatmapKBBS2" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  
                  <div class="col-lg-6 col-md-12 m-auto">
                    <!-- HEATMAP PWK SENTINEL-2 -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Heatmap Feature Selection Sentinel-2 (Purwakarta)</h3>
                        <i class="fas fa-download hover download" onclick="download_apex(this)" data-id="heatmapPWKS2" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <div id="heatmapPWKS2" style="min-height: 46.08vh; height: 46.08vh; max-height: 46.08vh; max-width: 100%;"></div>
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
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- BAR CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Luas Tutupan Lahan Bandung Barat 2021 (ha)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartKBB" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartKBB" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- PIE CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Luas Tutupan Lahan Bandung Barat (%)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="pieChartKBB" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="pieChartKBB" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- BAR CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Luas Tutupan Lahan Purwakarta 2021 (ha)</h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="barChartPWK" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChartPWK" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- PIE CHART -->
                    <div class="card">
                      <div class="py-3 px-3 d-flex justify-content-between border-bottom">
                        <h3 class="card-title">Luas Tutupan Lahan Purwakarta (%) </h3>
                        <i class="fas fa-download hover download" onclick="download(this)" data-id="pieChartPWK" data-judul="Chart_Kajian1"></i>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="pieChartPWK" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
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
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

<script>
  // Tujuan 1
  $(function () {
    ctx = document.getElementById('barChartKBB_L81321').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
          {
              label: 'Landsat-8 2013',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61, 2.88, 1.92],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Landsat-8 2021',
              data: [13.54, 18.10, 10.60, 52.97, 2.88, 1.92],
              backgroundColor: '#91e38e',
              borderColor: '#1a2519',
              borderWidth: 1
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: true,
          position: "top",
          reverse: true,
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [
            {
              ticks: {
                min: 0,
                max: this.max, // Your absolute max value
                callback: function (value) {
                  return ((value / this.max) * this.max).toFixed(0) + "%"; // convert it to percentage
                },
              },
              scaleLabel: {
                display: true,
                labelString: "Percentage",
              },
              gridLines: {
                display: false
              }
            },
          ],
        },
        tooltips: {
          callbacks: {
            title: function (ctx) {
              return ctx[0].label.replaceAll(",", " ") + " ";
            },
            label: function (ctx, data) {
              return data.datasets[ctx.datasetIndex].label + " : " + ctx.value + "%";
            },
          },
        },
      },
    });

    ctx = document.getElementById('barChartPWK_L81321').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
        ],
          datasets: [
            {
              label: 'Landsat-8 2013',
              data: [13.03, 16.12, 11.28, 47.32, 7.56, 4.68],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Landsat-8 2021',
              data: [14.71, 20.70, 11.51, 41.18, 4.87, 7.02],
              backgroundColor: '#91e38e',
              borderColor: '#1a2519',
              borderWidth: 1
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: true,
          position: "top",
          reverse: true,
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [
            {
              ticks: {
                min: 0,
                max: this.max, // Your absolute max value
                callback: function (value) {
                  return ((value / this.max) * this.max).toFixed(0) + "%"; // convert it to percentage
                },
              },
              scaleLabel: {
                display: true,
                labelString: "Percentage",
              },
              gridLines: {
                display: false
              }
            },
          ],
        },
        tooltips: {
          callbacks: {
            title: function (ctx) {
              return ctx[0].label.replaceAll(",", " ") + " ";
            },
            label: function (ctx, data) {
              return data.datasets[ctx.datasetIndex].label + " : " + ctx.value + "%";
            },
          },
        },      
      }
    });

    ctx = document.getElementById('barChartKBB_PWK_L813').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
        ],
          datasets: [
            {
              label:  'Bandung Barat',
              data: [0.13, 31.03, 10.50, 54.49, 3.05, 0.51],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [15.03, 16.12, 11.28, 47.32, 7.56, 4.68],
              backgroundColor: '#91e38e',
              borderColor: '#1a2519',
              borderWidth: 1
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: true,
          position: "top",
          reverse: true,
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [
            {
              ticks: {
                min: 0,
                max: this.max, // Your absolute max value
                callback: function (value) {
                  return ((value / this.max) * this.max).toFixed(0) + "%"; // convert it to percentage
                },
              },
              scaleLabel: {
                display: true,
                labelString: "Percentage",
              },
              gridLines: {
                display: false
              }
            },
          ],
        },
        tooltips: {
          callbacks: {
            title: function (ctx) {
              return ctx[0].label.replaceAll(",", " ") + " ";
            },
            label: function (ctx, data) {
              return data.datasets[ctx.datasetIndex].label + " : " + ctx.value + "%";
            },
          },
        },
      }
    });

    ctx = document.getElementById('barChartKBB_PWK_L821').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
        ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [13.54, 18.10, 10.60, 52.97, 2.88, 1.92],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [14.71, 20.70, 11.51, 41.18, 4.87, 7.02],
              backgroundColor: '#91e38e',
              borderColor: '#1a2519',
              borderWidth: 1
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: true,
          position: "top",
          reverse: true,
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [
            {
              ticks: {
                min: 0,
                max: this.max, // Your absolute max value
                callback: function (value) {
                  return ((value / this.max) * this.max).toFixed(0) + "%"; // convert it to percentage
                },
              },
              scaleLabel: {
                display: true,
                labelString: "Percentage",
              },
              gridLines: {
                display: false
              }
            },
          ],
        },
        tooltips: {
          callbacks: {
            title: function (ctx) {
              return ctx[0].label.replaceAll(",", " ") + " ";
            },
            label: function (ctx, data) {
              return data.datasets[ctx.datasetIndex].label + " : " + ctx.value + "%";
            },
          },
        },
      }
    });

    ctx = document.getElementById('barChartKBB_PWK_S2').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
            ['Awan'], 
            ['Sawah'], 
            ['Lahan', 'Terbangun'], 
            ['Hutan'],
            ['Badan', 'Air'], 
            ['Lahan', 'Kosong', 'Non Vegetatif']
          ],
          datasets: [
            {
              label: 'Bandung Barat',
              data: [0.13, 31.03, 10.69, 54.49, 3.06, 0.61],
              backgroundColor: '#d5f5d1',
              borderColor: '#1a2519',
              borderWidth: 1
          },
          {
            label: 'Purwakarta',
              data: [0.39, 22.37, 17.44, 41.32, 10.88 ,7.61],
              backgroundColor: '#91e38e',
              borderColor: '#1a2519',
              borderWidth: 1
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: true,
          position: "top",
          reverse: true,
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [
            {
              ticks: {
                min: 0,
                max: this.max, // Your absolute max value
                callback: function (value) {
                  return ((value / this.max) * this.max).toFixed(0) + "%"; // convert it to percentage
                },
              },
              scaleLabel: {
                display: true,
                labelString: "Percentage",
              },
              gridLines: {
                display: false
              }
            },
          ],
        },
        tooltips: {
          callbacks: {
            title: function (ctx) {
              return ctx[0].label.replaceAll(",", " ") + " ";
            },
            label: function (ctx, data) {
              return data.datasets[ctx.datasetIndex].label + " : " + ctx.value + "%";
            },
          },
        },
      }
    });
  });

    //1. HEATMAPS KBB Landsat-8 2013
    var options = {
      series: [{
        name: ['Lahan kosong', 'non-vegetatif'],
        data: [{
          x: 'B2',
          y: 0.165
        }, {
          x: 'B3',
          y: 0.134
        }, {
          x: 'B4',
          y: 0.154
        }, {
          x: 'B5',
          y: 0.271
        }, {
          x: 'B6',
          y: 0.255
        }, {
          x: 'B7',
          y: 0.142
        }, {
          x: 'B10',
          y: 0.969
        }, {
          x: 'B11',
          y: 0.972
        }, {
          x: 'BSI',
          y: 0.692
        }, {
          x: 'EVI',
          y:  0.342
        }, {
          x: 'NDBI',
          y: 0.629
        }, {
          x: 'NDVI',
          y: 0.498
        }, {
          x: 'NDWI',
          y: 0.498
        }, {
          x: 'SAVI',
          y: 0.498
        }]
      },{
        name: "Badan air",
        data: [{
          x: 'B2',
          y: 0.108
        }, {
          x: 'B3',
          y: 0.054
        }, {
          x: 'B4',
          y: 0.036
        }, {
          x: 'B5',
          y: 0.034
        }, {
          x: 'B6',
          y: 0.018
        }, {
          x: 'B7',
          y: 0.010
        }, {
          x: 'B10',
          y: 0.967
        }, {
          x: 'B11',
          y: 0.972
        }, {
          x: 'BSI',
          y: 0.374
        }, {
          x: 'EVI',
          y: 0.173
        }, {
          x: 'NDBI',
          y: 0.296
        }, {
          x: 'NDVI',
          y: 0.285
        }, {
          x: 'NDWI',
          y: 0.715
        }, {
          x: 'SAVI',
          y: 0.285
        }]
      },{
        name: "Hutan",
        data: [{
          x: 'B2',
          y: 0.111
        }, {
          x: 'B3',
          y: 0.059
        },{
          x: 'B4',
          y: 0.043
        }, {
          x: 'B5',
          y: 0.268
        }, {
          x: 'B6',
          y: 0.146
        }, {
          x: 'B7',
          y: 0.054
        }, {
          x: 'B10',
          y: 0.963
        }, {
          x: 'B11',
          y: 0.968
        }, {
          x: 'BSI',
          y: 0.309
        }, {
          x: 'EVI',
          y: 0.742
        }, {
          x: 'NDBI',
          y: 0.312
        }, {
          x: 'NDVI',
          y: 0.845
        }, {
          x: 'NDWI',
          y: 0.128
        }, {
          x: 'SAVI',
          y: 0.845
        }]
      }, {
        name: ['Lahan', 'terbangun'],
        data: [{
          x: 'B2',
          y: 0.142
        }, {
          x: 'B3',
          y: 0.094
        }, {
          x: 'B4',
          y: 0.110
        }, {
          x: 'B5',
          y: 0.209
        }, {
          x: 'B6',
          y: 0.210
        }, {
          x: 'B7',
          y: 0.138
        }, {
          x: 'B10',
          y: 0.985
        }, {
          x: 'B11',
          y: 0.988
        }, {
          x: 'BSI',
          y: 0.693
        }, {
          x: 'EVI',
          y: 0.372
        }, {
          x: 'NDBI',
          y: 0.634
        }, {
          x: 'NDVI',
          y: 0.530
        }, {
          x: 'NDWI',
          y: 0.320
        }, {
          x: 'SAVI',
          y: 0.530
        }]
      }, {
        name: 'Sawah',
        data: [{
          x: 'B2',
          y: 0.129
        }, {
          x: 'B3',
          y: 0.085
        }, {
          x: 'B4',
          y: 0.086
        }, {
          x: 'B5',
          y: 0.248
        }, {
          x: 'B6',
          y: 0.188
        }, {
          x: 'B7',
          y: 0.093
        }, {
          x: 'B10',
          y: 0.978
        }, {
          x: 'B11',
          y: 0.982
        }, {
          x: 'BSI',
          y: 0.519
        }, {
          x: 'EVI',
          y: 0.515
        }, {
          x: 'NDBI',
          y: 0.479
        }, {
          x: 'NDVI',
          y: 0.663
        }, {
          x: 'NDWI',
          y: 0.242
        }, {
          x: 'SAVI',
          y: 0.663
        }]
      }
    ],
      chart: {
        id: 'heatmapKBBL82013',
        height: '90%',
        type: 'heatmap',
        toolbar: {
          show: false,
          tools: {
            download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
            // download: '<i class="fa fa-download" aria-hidden="true"></i>',
          }
        },
      },
      dataLabels: {
        width: '100',
        enabled: false
      },
      colors: ["#6ad06b"],
      // title: {
      //     text: 'Heatmap Feature Selection Landsat-8 2013 Bandung Barat',
      //     margin: 30,
      //     style: {
      //       fontSize:  '1.11em',
      //       fontWeight:  'light',
      //       fontFamily:  "Poppins, Arial, sans-serif",
      //     },
      // },
      xaxis: {
        labels: {
           rotate: -45,
           rotateAlways: true
        }
      },
      yaxis:{
        labels:{
          offsetX: 3,
        }
      }
    };
    
    var chart = new ApexCharts(document.querySelector("#heatmapKBBL82013"), options);
    chart.render();
    

  //2. HEATMAPS PWK Landsat-8 2013
  var options = {
    series: [{
      name: ["Lahan kosong", "non-vegetatif"],
      data: [{
        x: 'B2',
        y: 0.069
      }, {
        x: 'B3',
        y: 0.082
      }, {
        x: 'B4',
        y: 0.114
      }, {
        x: 'B5',
        y: 0.407
      }, {
        x: 'B6',
        y: 0.250
      }, {
        x: 'B7',
        y: 0.164
      }, {
        x: 'B10',
        y: 0.566
      }, {
        x: 'B11',
        y: 0.606
      }, {
        x: 'BSI',
        y: 0.550
      }, {
        x: 'EVI',
        y:  0.534
      }, {
        x: 'NDBI',
        y: 0.474
      },{
        x: 'NDTI',
        y: 0.566
      }, {
        x: 'NDVI',
        y: 0.649
      }, {
        x: 'NDWI',
        y: 0.238
      }, {
        x: 'SAVI',
        y: 0.649
      }]
    },{
      name: "Badan air",
      data: [{
        x: 'B2',
        y: 0.053
      }, {
        x: 'B3',
        y: 0.023
      }, {
        x: 'B4',
        y: 0.025
      }, {
        x: 'B5',
        y: 0.007
      }, {
        x: 'B6',
        y: 0.013
      }, {
        x: 'B7',
        y: 0.013
      }, {
        x: 'B10',
        y: 0.470
      }, {
        x: 'B11',
        y: 0.511
      }, {
        x: 'BSI',
        y: 0.431
      }, {
        x: 'EVI',
        y: 0.103
      }, {
        x: 'NDBI',
        y: 0.374
      },{
        x: 'NDTI',
        y: 0.382
      }, {
        x: 'NDVI',
        y: 0.156
      }, {
        x: 'NDWI',
        y: 0.894
      }, {
        x: 'SAVI',
        y: 0.156
      }]
    },{
      name: "Hutan",
      data: [{
        x: 'B2',
        y: 0.031
      }, {
        x: 'B3',
        y: 0.036
      },{
        x: 'B4',
        y: 0.031
      }, {
        x: 'B5',
        y: 0.471
      }, {
        x: 'B6',
        y: 0.197
      }, {
        x: 'B7',
        y: 0.092
      }, {
        x: 'B10',
        y: 0.527
      }, {
        x: 'B11',
        y: 0.571
      }, {
        x: 'BSI',
        y: 0.244
      }, {
        x: 'EVI',
        y: 0.870
      }, {
        x: 'NDBI',
        y: 0.248
      }, {
        x: 'NDTI',
        y: 0.849
      }, {
        x: 'NDVI',
        y: 0.915
      }, {
        x: 'NDWI',
        y: 0.078
      }, {
        x: 'SAVI',
        y: 0.915
      }]
    }, {
      name: ['Lahan', 'terbangun'],
      data: [{
        x: 'B2',
        y: 0.081
      }, {
        x: 'B3',
        y: 0.085
      }, {
        x: 'B4',
        y: 0.133
      }, {
        x: 'B5',
        y: 0.350
      }, {
        x: 'B6',
        y: 0.265
      }, {
        x: 'B7',
        y: 0.212
      }, {
        x: 'B10',
        y: 0.610
      }, {
        x: 'B11',
        y: 0.652
      }, {
        x: 'BSI',
        y: 0.686
      }, {
        x: 'EVI',
        y: 0.427
      }, {
        x: 'NDBI',
        y: 0.608
      },{
        x: "NDTI",
        y: 0.376
      }, {
        x: 'NDVI',
        y: 0.547
      }, {
        x: 'NDWI',
        y: 0.301
      }, {
        x: 'SAVI',
        y: 0.547
      }]
    }, {
      name: 'Sawah',
      data: [{
        x: 'B2',
        y: 0.060
      }, {
        x: 'B3',
        y: 0.073
      }, {
        x: 'B4',
        y: 0.096
      }, {
        x: 'B5',
        y: 0.398
      }, {
        x: 'B6',
        y: 0.224
      }, {
        x: 'B7',
        y: 0.139
      }, {
        x: 'B10',
        y: 0.565
      }, {
        x: 'B11',
        y: 0.613
      }, {
        x: 'BSI',
        y: 0.465
      }, {
        x: 'EVI',
        y: 0.580
      }, {
        x: 'NDBI',
        y:  0.399
      }, {
        x: 'NDTI',
        y: 0.604
      }, {
        x: 'NDVI',
        y: 0.690
      }, {
        x: 'NDWI',
        y: 0.218
      }, {
        x: 'SAVI',
        y: 0.690
      }]
    }
  ],
    chart: {
      id: 'heatmapPWKL82013',
      height: '90%',
      type: 'heatmap',
      toolbar: {
          show: false,
          tools: {
            download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
            // download: '<i class="fa fa-download" aria-hidden="true"></i>',
          }
        },
    },
      dataLabels: {
      enabled: false
    },
      colors: ["#6ad06b"],
      // title: {
      //     text: 'Heatmap Feature Selection Landsat-8 2013 Purwakarta',
      //     margin: 30,
      //     style: {
      //       fontSize:  '1.0em',
      //       fontWeight:  'light',
      //       fontFamily:  "Poppins, sans-serif",
      //     },
      // },
      xaxis: {
        labels: {
           rotate: -45,
           rotateAlways: true
        }
      },
      yaxis:{
        labels:{
          offsetX: 3,
        }
      }
  };
  
  var chart = new ApexCharts(document.querySelector("#heatmapPWKL82013"), options);
  chart.render();
    
  //3. HEATMAPS KBB Landsat-8 2021
  var options = {
    series: [{
      name: ["Lahan kosong", "non-vegetatif"],
      data: [{
        x: 'B2',
        y: 0.231
      }, {
        x: 'B3',
        y: 0.194
      }, {
        x: 'B4',
        y: 0.171
      }, {
        x: 'B5',
        y: 0.207
      }, {
        x: 'B6',
        y: 0.202
      }, {
        x: 'B7',
        y: 0.121
      }, {
        x: 'B10',
        y: 0.928
      }, {
        x: 'B11',
        y: 0.937
      }, {
        x: 'BSI',
        y: 0.738
      }, {
        x: 'EVI',
        y:  0.052
      }, {
        x: 'NDBI',
        y: 0.695
      },{
        x: 'NDTI',
        y: 0.746
      }, {
        x: 'NDVI',
        y: 0.300
      }, {
        x: 'NDWI',
        y: 0.401
      }, {
        x: 'SAVI',
        y: 0.300
      }]
    },{
      name: "Badan air",
      data: [{
        x: 'B2',
        y: 0.183
      }, {
        x: 'B3',
        y: 0.170
      }, {
        x: 'B4',
        y: 0.091
      }, {
        x: 'B5',
        y: 0.013
      }, {
        x: 'B6',
        y: 0.010
      }, {
        x: 'B7',
        y: 0.008
      }, {
        x: 'B10',
        y: 0.891
      }, {
        x: 'B11',
        y: 0.906
      }, {
        x: 'BSI',
        y: 0.504
      }, {
        x: 'EVI',
        y: 0.035
      }, {
        x: 'NDBI',
        y: 0.492
      },{
        x: 'NDTI',
        y: 0.860
      }, {
        x: 'NDVI',
        y: 0.221
      }, {
        x: 'NDWI',
        y: 0.344
      }, {
        x: 'SAVI',
        y: 0.221
      }]
    },{
      name: "Hutan",
      data: [{
        x: 'B2',
        y: 0.191
      }, {
        x: 'B3',
        y: 0.146
      },{
        x: 'B4',
        y: 0.102
      }, {
        x: 'B5',
        y: 0.219
      }, {
        x: 'B6',
        y: 0.126
      }, {
        x: 'B7',
        y: 0.060
      }, {
        x: 'B10',
        y: 0.863
      }, {
        x: 'B11',
        y: 0.878
      }, {
        x: 'BSI',
        y: 0.337
      }, {
        x: 'EVI',
        y: 0.115
      }, {
        x: 'NDBI',
        y: 0.378
      }, {
        x: 'NDTI',
        y: 0.640
      }, {
        x: 'NDVI',
        y: 0.502
      }, {
        x: 'NDWI',
        y: 0.078
      }, {
        x: 'SAVI',
        y: 0.502
      }]
    }, {
      name: ['Lahan', 'terbangun'],
      data: [{
        x: 'B2',
        y: 0.230
      }, {
        x: 'B3',
        y: 0.189
      }, {
        x: 'B4',
        y: 0.168
      }, {
        x: 'B5',
        y: 0.176
      }, {
        x: 'B6',
        y: 0.199
      }, {
        x: 'B7',
        y: 0.161
      }, {
        x: 'B10',
        y: 0.913
      }, {
        x: 'B11',
        y: 0.906
      }, {
        x: 'BSI',
        y: 0.735
      }, {
        x: 'EVI',
        y: 0.054
      }, {
        x: 'NDBI',
        y: 0.697
      },{
        x: "NDTI",
        y: 0.741
      }, {
        x: 'NDVI',
        y: 0.308
      }, {
        x: 'NDWI',
        y: 0.241
      }, {
        x: 'SAVI',
        y: 0.308
      }]
    }, {
      name: 'Sawah',
      data: [{
        x: 'B2',
        y: 0.208
      }, {
        x: 'B3',
        y: 0.170
      }, {
        x: 'B4',
        y: 0.138
      }, {
        x: 'B5',
        y: 0.200
      }, {
        x: 'B6',
        y: 0.165
      }, {
        x: 'B7',
        y: 0.098
      }, {
        x: 'B10',
        y:  0.909
      }, {
        x: 'B11',
        y: 0.918
      }, {
        x: 'BSI',
        y: 0.598
      }, {
        x: 'EVI',
        y: 0.076
      }, {
        x: 'NDBI',
        y:  0.571
      }, {
        x: 'NDTI',
        y: 0.695
      }, {
        x: 'NDVI',
        y:  0.391
      }, {
        x: 'NDWI',
        y: 0.467
      }, {
        x: 'SAVI',
        y: 0.391
      }]
    }
  ],
    chart: {
      id: 'heatmapKBBL82021',
      height: '90%',
      type: 'heatmap',
      toolbar: {
        show: false,
        tools: {
          download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
        }
      }
    },
      dataLabels: {
      enabled: false
    },
      colors: ["#6ad06b"],
      // title: {
      //     text: 'Heatmap Feature Selection Landsat-8 2021 Bandung Barat',
      //     margin: 30,
      //     style: {
      //       fontSize:  '1.0em',
      //       fontWeight:  'light',
      //       fontFamily:  "Poppins, sans-serif",
      //     },
      // },
      xaxis: {
        labels: {
           rotate: -45,
           rotateAlways: true
        }
      },
      yaxis:{
        labels:{
          offsetX: 3,
        }
      }
  };
  
  var chart = new ApexCharts(document.querySelector("#heatmapKBBL82021"), options);
  chart.render();  

  //4. HEATMAPS PWK Landsat-8 2021
  var options = {
    series: [{
      name: ["Lahan kosong", "non-vegetatif"],
      data: [{
        x: 'B2',
        y: 0.158
      }, {
        x: 'B3',
        y: 0.065
      }, {
        x: 'B4',
        y: 0.076
      }, {
        x: 'B5',
        y: 0.170
      }, {
        x: 'B6',
        y: 0.170
      }, {
        x: 'B7',
        y: 0.092
      }, {
        x: 'B10',
        y: 0.854
      }, {
        x: 'B11',
        y: 0.887
      }, {
        x: 'BSI',
        y: 0.608
      }, {
        x: 'EVI',
        y:  0.308
      }, {
        x: 'NDBI',
        y: 0.569
      },{
        x: 'NDTI',
        y: 0.741
      }, {
        x: 'NDVI',
        y: 0.498
      }, {
        x: 'NDWI',
        y: 0.397
      }, {
        x: 'SAVI',
        y: 0.498
      }]
    },{
      name: "Badan air",
      data: [{
        x: 'B2',
        y: 0.145
      }, {
        x: 'B3',
        y: 0.032
      }, {
        x: 'B4',
        y: 0.030
      }, {
        x: 'B5',
        y: 0.007
      }, {
        x: 'B6',
        y: 0.002
      }, {
        x: 'B7',
        y: 0.002
      }, {
        x: 'B10',
        y: 0.816
      }, {
        x: 'B11',
        y: 0.856
      }, {
        x: 'BSI',
        y: 0.341
      }, {
        x: 'EVI',
        y: 0.134
      }, {
        x: 'NDBI',
        y: 0.262
      },{
        x: 'NDTI',
        y: 0.726
      }, {
        x: 'NDVI',
        y: 0.256
      }, {
        x: 'NDWI',
        y: 0.814
      }, {
        x: 'SAVI',
        y: 0.256
      }]
    },{
      name: "Hutan",
      data: [{
        x: 'B2',
        y: 0.143
      }, {
        x: 'B3',
        y: 0.044
      },{
        x: 'B4',
        y: 0.034
      }, {
        x: 'B5',
        y: 0.252
      }, {
        x: 'B6',
        y: 0.140
      }, {
        x: 'B7',
        y: 0.051
      }, {
        x: 'B10',
        y: 0.832
      }, {
        x: 'B11',
        y: 0.869
      }, {
        x: 'BSI',
        y: 0.271
      }, {
        x: 'EVI',
        y: 0.612
      }, {
        x: 'NDBI',
        y: 0.329
      }, {
        x: 'NDTI',
        y: 0.901
      }, {
        x: 'NDVI',
        y: 0.779
      }, {
        x: 'NDWI',
        y: 0.200
      }, {
        x: 'SAVI',
        y: 0.779
      }]
    }, {
      name: ['Lahan', 'terbangun'],
      data: [{
        x: 'B2',
        y: 0.166
      }, {
        x: 'B3',
        y: 0.074
      }, {
        x: 'B4',
        y: 0.092
      }, {
        x: 'B5',
        y: 0.173
      }, {
        x: 'B6',
        y: 0.213
      }, {
        x: 'B7',
        y: 0.152
      }, {
        x: 'B10',
        y: 0.872
      }, {
        x: 'B11',
        y: 0.903
      }, {
        x: 'BSI',
        y: 0.713
      }, {
        x: 'EVI',
        y: 0.276
      }, {
        x: 'NDBI',
        y: 0.662
      },{
        x: "NDTI",
        y: 0.601
      }, {
        x: 'NDVI',
        y: 0.459
      }, {
        x: 'NDWI',
        y: 0.413
      }, {
        x: 'SAVI',
        y: 0.459
      }]
    }, {
      name: 'Sawah',
      data: [{
        x: 'B2',
        y: 0.150
      }, {
        x: 'B3',
        y: 0.058
      }, {
        x: 'B4',
        y: 0.055
      }, {
        x: 'B5',
        y: 0.196
      }, {
        x: 'B6',
        y: 0.143
      }, {
        x: 'B7',
        y: 0.064
      }, {
        x: 'B10',
        y: 0.847
      }, {
        x: 'B11',
        y: 0.882
      }, {
        x: 'BSI',
        y: 0.418
      }, {
        x: 'EVI',
        y: 0.434
      }, {
        x: 'NDBI',
        y:  0.411
      }, {
        x: 'NDTI',
        y: 0.802
      }, {
        x: 'NDVI',
        y: 0.630
      }, {
        x: 'NDWI',
        y: 0.313
      }, {
        x: 'SAVI',
        y: 0.630
      }]
    }
  ],
    chart: {
      id : 'heatmapPWKL82021',
      height: '90%',
      type: 'heatmap',
      toolbar: {
        show: false,
        tools: {
          download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
        }
      }
    },
      dataLabels: {
      enabled: false
    },
      colors: ["#6ad06b"],
      xaxis: {
        labels: {
           rotate: -45,
           rotateAlways: true
        }
      },
      yaxis:{
        labels:{
          offsetX: 3,
        }
      }
      // title: {
      //     text: 'Heatmap Feature Selection Landsat-8 2021 Purwakarta',
      //     margin: 30,
      //     style: {
      //       fontSize:  '1.0em',
      //       fontWeight:  'light',
      //       fontFamily:  "Poppins, sans-serif",
      //     },
      // },
  };
  
  var chart = new ApexCharts(document.querySelector("#heatmapPWKL82021"), options);
  chart.render();
    
  //5. HEATMAPS KBB SENTINEL-2  
  var options = {
    series: [{
      name: ["Lahan kosong", "non-vegetatif"],
      data: [{
        x: 'B1',
        y: 0.087
      }, {
        x: 'B2',
        y: 0.111
      }, {
        x: 'B3',
        y: 0.144
      }, {
        x: 'B4',
        y: 0.185
      }, {
        x: 'B5',
        y: 0.190
      }, {
        x: 'B6',
        y: 0.216
      }, {
        x: 'B7',
        y: 0.235
      },{
        x: 'B8',
        y: 0.229
      }, {
        x: 'B8A',
        y: 0.238
      }, {
        x: 'B9',
        y: 0.157
      },{
        x: 'B11',
        y: 0.272
      }, {
        x: 'B12',
        y: 0.198
      }, {
        x: 'BSI',
        y: 0.322
      }, {
        x: 'EVI',
        y:  0.511
      }, {
        x: 'NDBI',
        y: 0.382
      },{
        x: 'NDTI',
        y: 0.467
      }, {
        x: 'NDVI',
        y: 0.513
      }, {
        x: 'NDWI',
        y: 0.577
      }, {
        x: 'SAVI',
        y: 0.586
      }]
    },{
      name: "Badan air",
      data: [{
        x: 'B1',
        y: 0.026
      }, {
        x: 'B2',
        y: 0.027
      }, {
        x: 'B3',
        y: 0.028
      }, {
        x: 'B4',
        y: 0.022
      }, {
        x: 'B5',
        y: 0.017
      }, {
        x: 'B6',
        y: 0.017
      }, {
        x: 'B7',
        y: 0.022
      },{
        x: 'B8',
        y: 0.016
      }, {
        x: 'B8A',
        y: 0.018
      }, {
        x: 'B9',
        y: 0.019
      },{
        x: 'B11',
        y: 0.010
      }, {
        x: 'B12',
        y: 0.198
      }, {
        x: 'BSI',
        y: 0.202
      }, {
        x: 'EVI',
        y:  0.358
      }, {
        x: 'NDBI',
        y: 0.711
      },{
        x: 'NDTI',
        y: 0.517
      }, {
        x: 'NDVI',
        y: 0.360
      }, {
        x: 'NDWI',
        y: 0.362
      }, {
        x: 'SAVI',
        y: 0.361
      }]
    },{
      name: "Hutan",
      data: [{
        x: 'B1',
        y: 0.022
      }, {
        x: 'B2',
        y: 0.024
      }, {
        x: 'B3',
        y: 0.036
      }, {
        x: 'B4',
        y: 0.022
      }, {
        x: 'B5',
        y: 0.055
      }, {
        x: 'B6',
        y: 0.202
      }, {
        x: 'B7',
        y: 0.259
      },{
        x: 'B8',
        y: 0.266
      }, {
        x: 'B8A',
        y: 0.286
      }, {
        x: 'B9',
        y: 0.179
      },{
        x: 'B11',
        y: 0.151
      }, {
        x: 'B12',
        y: 0.059
      }, {
        x: 'BSI',
        y: 0.854
      }, {
        x: 'EVI',
        y:  0.928
      }, {
        x: 'NDBI',
        y: 0.089
      },{
        x: 'NDTI',
        y: 0.688
      }, {
        x: 'NDVI',
        y: 0.928
      }, {
        x: 'NDWI',
        y: 0.308
      }, {
        x: 'SAVI',
        y: 0.143
      }]
    }, {
      name: ['Lahan', 'terbangun'],
      data: [{
        x: 'B1',
        y: 0.061
      }, {
        x: 'B2',
        y: 0.066
      }, {
        x: 'B3',
        y: 0.080
      }, {
        x: 'B4',
        y: 0.107
      }, {
        x: 'B5',
        y: 0.114
      }, {
        x: 'B6',
        y: 0.155
      }, {
        x: 'B7',
        y: 0.175
      },{
        x: 'B8',
        y: 0.176
      }, {
        x: 'B8A',
        y: 0.188
      }, {
        x: 'B9',
        y: 0.123
      },{
        x: 'B11',
        y: 0.244
      }, {
        x: 'B12',
        y: 0.195
      }, {
        x: 'BSI',
        y: 0.384
      }, {
        x: 'EVI',
        y:  0.578
      }, {
        x: 'NDBI',
        y: 0.318
      },{
        x: 'NDTI',
        y: 0.435
      }, {
        x: 'NDVI',
        y: 0.579
      }, {
        x: 'NDWI',
        y: 0.627
      }, {
        x: 'SAVI',
        y: 0.635
      }]
    }, {
      name: 'Sawah',
      data: [{
        x: 'B1',
        y: 0.038
      }, {
        x: 'B2',
        y: 0.046
      }, {
        x: 'B3',
        y: 0.066
      }, {
        x: 'B4',
        y: 0.071
      }, {
        x: 'B5',
        y: 0.101
      }, {
        x: 'B6',
        y: 0.193
      }, {
        x: 'B7',
        y: 0.228
      },{
        x: 'B8',
        y: 0.233
      }, {
        x: 'B8A',
        y: 0.250
      }, {
        x: 'B9',
        y: 0.161
      }, {
        x: 'B11',
        y: 0.199
      }, {
        x: 'B12',
        y: 0.109
      }, {
        x: 'BSI',
        y: 0.567
      }, {
        x:'EVI',
        y: 0.733
      }, {
        x: 'NDBI',
        y: 0.219
      },{
        x: 'NDTI',
        y: 0.573
      }, {
        x: 'NDVI',
        y: 0.734
      }, {
        x: 'NDWI',
        y: 0.455
      }, {
        x: 'SAVI',
        y: 0.392
      }]
    }
  ],
    chart: {
      id: 'heatmapKBBS2',
      height: '90%',
      type: 'heatmap',
      toolbar: {
        show: false,
        tools: {
          download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />',
        }
      }
    },
      dataLabels: {
      enabled: false
    },
      colors: ["#6ad06b"],
      xaxis: {
        labels: {
           rotate: -45,
           rotateAlways: true
        }
      },
      yaxis:{
        labels:{
          offsetX: 3,
        }
      }
      // title: {
      //     text: 'Heatmap Feature Selection Sentinel-2 Bandung Barat',
      //     margin: 30,
      //     style: {
      //       fontSize:  '1.0em',
      //       fontWeight:  'light',
      //       fontFamily:  "Poppins, sans-serif",
      //     },
      // },
  };
  
  var chart = new ApexCharts(document.querySelector("#heatmapKBBS2"), options);
  chart.render();
    
  //5. HEATMAPS PWK SENTINEL-2  
  var options = {
    series: [{
      name: ["Lahan kosong", "non-vegetatif"],
      data: [{
        x: 'B1',
        y: 0.190
      }, {
        x: 'B2',
        y: 0.100
      }, {
        x: 'B3',
        y: 0.110
      }, {
        x: 'B4',
        y: 0.150
      }, {
        x: 'B5',
        y: 0.220
      }, {
        x: 'B6',
        y: 0.330
      }, {
        x: 'B7',
        y: 0.340
      },{
        x: 'B8',
        y: 0.230
      }, {
        x: 'B8A',
        y: 0.270
      }, {
        x: 'B9',
        y: 0.390
      },{
        x: 'B11',
        y: 0.280
      }, {
        x: 'B12',
        y: 0.190
      }, {
        x: 'BSI',
        y: 0.610
      }, {
        x: 'EVI',
        y:  0.400
      }, {
        x: 'NDBI',
        y: 0.590
      },{
        x: 'NDTI',
        y: 0.560
      }, {
        x: 'NDVI',
        y: 0.450
      }, {
        x: 'NDWI',
        y: 0.390
      }, {
        x: 'SAVI',
        y: 0.450
      }]
    },{
      name: "Badan air",
      data: [{
        x: 'B1',
        y: 0.054
      }, {
        x: 'B2',
        y: 0.027
      }, {
        x: 'B3',
        y: 0.015
      }, {
        x: 'B4',
        y: 0.013
      }, {
        x: 'B5',
        y: 0.009
      }, {
        x: 'B6',
        y: 0.015
      }, {
        x: 'B7',
        y: 0.014
      },{
        x: 'B8',
        y: 0.009
      }, {
        x: 'B8A',
        y: 0.011
      }, {
        x: 'B9',
        y: 0.002
      },{
        x: 'B11',
        y: 0.002
      }, {
        x: 'B12',
        y: 0.003
      }, {
        x: 'BSI',
        y: 0.290
      }, {
        x: 'EVI',
        y:  0.640
      }, {
        x: 'NDBI',
        y: 0.240
      },{
        x: 'NDTI',
        y: 0.550
      }, {
        x: 'NDVI',
        y: 0.240
      }, {
        x: 'NDWI',
        y: 0.810
      }, {
        x: 'SAVI',
        y: 0.240
      }]
    },{
      name: "Hutan",
      data: [{
        x: 'B1',
        y: 0.027
      }, {
        x: 'B2',
        y: 0.023
      }, {
        x: 'B3',
        y: 0.031
      }, {
        x: 'B4',
        y: 0.019
      }, {
        x: 'B5',
        y: 0.078
      }, {
        x: 'B6',
        y: 0.360
      }, {
        x: 'B7',
        y: 0.440
      },{
        x: 'B8',
        y: 0.310
      }, {
        x: 'B8A',
        y: 0.370
      }, {
        x: 'B9',
        y: 0.530
      },{
        x: 'B11',
        y: 0.170
      }, {
        x: 'B12',
        y: 0.067
      }, {
        x: 'BSI',
        y: 0.280
      }, {
        x: 'EVI',
        y:  0.033
      }, {
        x: 'NDBI',
        y: 0.330
      },{
        x: 'NDTI',
        y: 0.770
      }, {
        x: 'NDVI',
        y: 0.940
      }, {
        x: 'NDWI',
        y: 0.071
      }, {
        x: 'SAVI',
        y: 0.940
      }]
    }, {
      name: ['Lahan', 'terbangun'],
      data: [{
        x: 'B1',
        y: 0.160
      }, {
        x: 'B2',
        y: 0.083
      }, {
        x: 'B3',
        y: 0.077
      }, {
        x: 'B4',
        y: 0.110
      }, {
        x: 'B5',
        y: 0.160
      }, {
        x: 'B6',
        y: 0.270
      }, {
        x: 'B7',
        y: 0.290
      },{
        x: 'B8',
        y: 0.200
      }, {
        x: 'B8A',
        y: 0.240
      }, {
        x: 'B9',
        y: 0.350
      },{
        x: 'B11',
        y: 0.250
      }, {
        x: 'B12',
        y: 0.200
      }, {
        x: 'BSI',
        y: 0.620
      }, {
        x: 'EVI',
        y:  0.340
      }, {
        x: 'NDBI',
        y: 0.610
      },{
        x: 'NDTI',
        y: 0.490
      }, {
        x: 'NDVI',
        y: 0.520
      }, {
        x: 'NDWI',
        y: 0.350
      }, {
        x: 'SAVI',
        y: 0.520
      }]
    }, {
      name: 'Sawah',
      data: [{
        x: 'B1',
        y: 0.074
      }, {
        x: 'B2',
        y: 0.050
      }, {
        x: 'B3',
        y: 0.057
      }, {
        x: 'B4',
        y: 0.065
      }, {
        x: 'B5',
        y: 0.135
      }, {
        x: 'B6',
        y: 0.300
      }, {
        x: 'B7',
        y: 0.335
      },{
        x: 'B8',
        y: 0.235
      }, {
        x: 'B8A',
        y: 0.285
      }, {
        x: 'B9',
        y: 0.410
      }, {
        x: 'B11',
        y: 0.225
      }, {
        x: 'B12',
        y: 0.127
      }, {
        x: 'BSI',
        y: 0.495
      }, {
        x:'EVI',
        y: 0.190
      }, {
        x: 'NDBI',
        y: 0.500
      },{
        x: 'NDTI',
        y: 0.650
      }, {
        x: 'NDVI',
        y: 0.710
      }, {
        x: 'NDWI',
        y: 0.215
      }, {
        x: 'SAVI',
        y: 0.710
      }]
    }
  ],
    chart: {
      id: 'heatmapPWKS2',
      height: '90%',
      type: 'heatmap',
      toolbar: {
        show: false,
        tools: {
          download: '<img src="<?=base_url("/img/dashboard/riset2/download.svg")?>", width= "20" />'
        }
      }
    },
      dataLabels: {
      enabled: false
    },
      colors: ["#6ad06b"],
      // title: {
      //     text: 'Heatmap Feature Selection Sentinel-2 Purwakarta',
      //     margin: 30,
      //     style: {
      //       fontSize:  '1.1em',
      //       fontWeight:  'light',
      //       fontFamily:  "Poppins, sans-serif",
      //     },
      // },
      xaxis: {
        labels: {
          // rotate: -45,
          hideOverlappingLabels: false
        }
      },
      yaxis:{
        labels:{
          offsetX: 3,
        }
      }
  };
  
  var chart = new ApexCharts(document.querySelector("#heatmapPWKS2"), options);
  chart.render();

  // Tujuan 2
  $(function () {
    if (window.location.href.endsWith("#tab2")) document.getElementById("tab-2").click();
    ctx = document.getElementById('barChartKBB').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', ['Lahan Kosong','non-vegetatif']],
          datasets: [
            {
              label: 'Luas Tutupan Lahan',
              data: [69607.37, 39968.55, 13796.24, 1149.73, 784.51],
              backgroundColor: [
                  '#eafae8',
                  '#77dd77',
                  '#eafae8',
                  '#eafae8',
                  '#eafae8',
              ],
              borderColor: [
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
              ],
              borderWidth: 1
          }
        ],
      },
      options: {
        maintainAspectRatio: false,
        scales: {
                  xAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    }
                  }],
                  yAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    },
                    beginAtZero: true
                  }]
            },
            tooltips: {
              callbacks: {
                label: function (ctx, data) {
                  return data.datasets[0].data[ctx.index] + " ha";
                },
              },
            },
            legend: {
              display: false
            }         
      }
    });

    ctx = document.getElementById('pieChartKBB').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', 'Lahan kosong non-vegetatif'],
          datasets: [{
              label: 'Tutupan Lahan',
              data: [55.55, 31.9, 11.01, 0.92, 0.62],
              backgroundColor: [
                  '#508d4f',
                  '#77dd77',
                  '#a9e9a4',
                  '#bfefbb',
                  '#eafae8',
              ],
              borderWidth: 0
          }]
      },
      options: {
        maintainAspectRatio: false,
        scales: {
              y: {
                  beginAtZero: true
              }
          },
          "legend": {
            "display": true,
            "labels": {
                "fontSize": 13,
            },
            "position": "bottom"
        },
        tooltips: {
          callbacks: {
            label: function (ctx, data) {
              return data.labels[ctx.index] + " : " + data.datasets[0].data[ctx.index] + "%";
            },
          },
        }
      }
    });

    ctx = document.getElementById('barChartPWK').getContext('2d');
    barChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan Terbangun', 'Badan air', ['Lahan Kosong','non-vegetatif']],
          datasets: [{
              label: 'Luas Tutupan Lahan',
              data: [52164.11, 25377.16, 14268.91 , 6094.43, 1529.49],
              backgroundColor: [
                  '#eafae8',
                  '#77dd77',
                  '#eafae8',
                  '#eafae8',
                  '#eafae8',
              ],
              borderColor: [
                 '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f',
                  '#508d4f'
              ],
              borderWidth: 1
          }]
      },
      options: {
        maintainAspectRatio: false,
            scales: {
                  xAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    }
                  }],
                  yAxes: [{
                    gridLines: {
                      drawOnChartArea: false
                    },
                    beginAtZero: true
                  }]
              },
            tooltips: {
              callbacks: {
                label: function (ctx, data) {
                  return data.datasets[0].data[ctx.index] + " ha";
                },
              },
            },
            legend: {
              display: false
            }   
      }
    });

    ctx = document.getElementById('pieChartPWK').getContext('2d');
    pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Hutan', 'Sawah', 'Lahan terbangun', 'Badan air', 'Lahan kering non-vegetatif'],
          datasets: [{
              label: '# of Votes',
              data: [52.46, 25.52, 14.35, 6.13, 1.54],
              backgroundColor: [
                  '#508d4f',
                  '#77dd77',
                  '#a9e9a4',
                  '#bfefbb',
                  '#eafae8',
              ],
              borderWidth: 0
          }]
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          y: {
              beginAtZero: true
          }
        },
          "legend": {
          "display": true,
          "labels": {
            "fontSize": 13,
          },
          "position": "bottom"
        },
        tooltips: {
          callbacks: {
            label: function (ctx, data) {
              return data.labels[ctx.index] + " : " + data.datasets[0].data[ctx.index] + "%";
            },
          },
        }
      }
    });
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
    const base64 = ApexCharts.exec(id, 'dataURI');

    //Usage example:
    base64.then(({imgURI, blob}) => { 
        var a = document.createElement("a"); 
        a.href = imgURI
        a.download = "Image.png"; 
        a.click();
    })
  }

</script>
<?= $this->endSection() ?>
