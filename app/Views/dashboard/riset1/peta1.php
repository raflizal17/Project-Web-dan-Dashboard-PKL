<?= $this->extend('dashboard/layout/main') ?>

<?= $this->Section('css') ?>
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
    .container-fluid > .nav-pills > .nav-item > .nav-link.active{
        width: 289.08px;
        height: 50px;
        background-color: #0A5446;
        border-radius: 20px 20px 0px 0px;
        border: none;
        font-size: 20px;
        color: #FFFFFF; 
        font-weight:bold;
    }
    .tab-content{
        width: 98%;
        margin-top: -16px;
        margin-left: 8px;
        padding: 15px;
        background: #FFFFFF;
        border-radius: 0px 8px 8px 8px;
    }
    .container-fluid > .nav-pills > .nav-item > .nav-link{
        width: 289.08px;
        height: 50px;
        background: #FFFFFF;
        border-radius: 10px 10px 0px 0px;
        border: none;
        font-size: 20px;
        color: #0A5446; 
        font-weight:bold;
    }
  </style>
<?= $this->endSection() ?>

<?= $this->Section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid pl-4" style="color: rgb(0, 75, 60);">
        <div class="row mb-2 baris-judul-riset">
          <div class="col-sm-6">
            <h3 class="judul-riset">Peta Persebaran Petani</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content pl-4 mt-4">
      <div class="container-fluid">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Kabupaten Cianjur</button>
                </li>
                <li class="nav-item" role="presentation" style="margin-left:-7px; border-radius:10px;">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Kabupaten Sukabumi</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="height:5em;">
                      <div class="chart" style="display: none;">
                        <!-- <canvas id="salesChart" height="300" style="background-color:black;"></canvas> -->
                      </div>
                      <div class="card-body p-0">
                        <div class="d-md-flex">
                            <!-- Map will be created here -->
                            <div id="world-map-markers" style="height: 40em; overflow: hidden; margin:0 auto;">
                              <div class="map"></div>
                            </div>
                        </div><!-- /.d-md-flex -->
                      </div>
                      <!-- /.card-body -->
                      <div class="chart-responsive" style="display: none;">
                        <canvas id="pieChart" height="0"></canvas>
                      </div>
                </div>
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <div class="chart" style="display: none;">
                          <canvas id="salesChart" height="10"></canvas>
                      </div>
                      <div class="card-body p-0">
                        <div class="d-md-flex">
                          <div class="p-1 flex-fill" style="overflow: hidden">
                            <!-- Map will be created here -->
                            <div id="world-map-markers" style="height: 40em; overflow: hidden;">
                              <div class="map"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <!-- <div class="chart-responsive" style="display: none;">
                        <canvas id="pieChart" height="150"></canvas>
                      </div> -->
                </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->Section('js') ?>
<!-- REQUIRED SCRIPTS -->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/plugins/raphael/raphael.min.js"></script>
<script src="/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/assets/dist/js/pages/dashboard2.js"></script>
<?= $this->endSection() ?>