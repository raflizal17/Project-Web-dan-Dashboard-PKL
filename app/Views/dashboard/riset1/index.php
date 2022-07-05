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
            <h3 class="judul-riset">Pengujian Prelist ST 2023</h3>
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
                  <button class="btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" type="button" onclick="putar(this)" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:rgb(0, 75, 60); font-weight: bold;">
                    Deskripsi Umum Hasil Penelitian Riset 1
                  <i class="accordion-icon fas fa-chevron-circle-down"></i>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionKotak1">
                <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" type="button" onclick="putar(this)" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:rgb(0, 75, 60); font-weight: bold;">
                    Judul Kajian 1
                    <i class="accordion-icon fas fa-chevron-circle-down"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionKotak1">
                <div class="card-body">
                  Some placeholder content for the second accordion panel. This panel is hidden by default.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left d-flex justify-content-between align-items-center collapsed" type="button" onclick="putar(this)" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:rgb(0, 75, 60); font-weight: bold;">
                    Judul Kajian 2
                    <i class="accordion-icon fas fa-chevron-circle-down"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionKotak1">
                <div class="card-body">
                  And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
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
<script>
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
  
