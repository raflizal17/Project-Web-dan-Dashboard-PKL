<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-white navbar-light" style="height: 100px;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <div id="dropdown-riset" data-toggle="dropdown" class="row d-flex align-items-center">
            <h1 class="navbar-nav mr-2 judul-dashboard" style="font-size: 1.8em;"><?= $judul[$riset]['judul'] ?></h1>
            <span><i class="fas fa-chevron-down" style="font-size: 20px;"></i></span>
          </div>
            <ul class="position-absolute dropdown-menu dropdown-menu-md dropdown-menu-right">
              <?php foreach ($judul as $j) : ?>
                <?php if (!($j['riset'] == $riset)) : ?>
                  <a href="<?= $j['href'] ?>" class="dropdown-item"><?= $j['judul'] ?></a>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
      </li>
    </ul> 

    <!-- Right navbar links -->
    <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <div class="akun-user mr-2 d-flex justify-content-center align-items-center">
        <i class="fas fa-user" style="color: white;"></i>
      </div>
    </div>

    <div class="collapse navbar-collapse d-md-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav d-md-flex d-none">
          <li class="nav-item dropdown">
              <div data-toggle="dropdown" class="d-flex justify-content-center align-items-center mr-4" href="#" style="color: rgb(0, 75, 60);">
                <div class="akun-user mr-2 d-flex justify-content-center align-items-center">
                  <i class="fas fa-user" style="color: white;"></i>
                </div>
                <span class="mr-2 font-weight-bolder">LOREM IPSUM</span>
                <a href="#" style="color:rgb(0,75,60);">
                  <i class="fas fa-sign-out-alt" style="font-size: 25px;"></i> 
                </a>
              </div>
          </li>
      </ul>

      <ul class="navbar-nav d-md-none" style="background-color:#0A5446; width:100%; position:absolute;">
          <li class="nav-item" id="nav-item-profile">
              <a class="nav-link pl-3" style="text-align:center;" id="profile-menu">
                <span class="d-inline-block mr-3 font-weight-bolder">LOREM IPSUM</span>
              </a>
          </li>
          <li class="nav-item" id="nav-item-profile">
            <a class="nav-link pl-3" href="" style="text-align:center;" id="profile-menu">Logout</a>
          </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->