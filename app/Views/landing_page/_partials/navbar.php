<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid mx-sm-5">
        <div class="navbar-brand text-white" href="#">
            <a class="text-decoration-none text-white" href="<?= base_url('/') ?>"><img src="/assets/dist/img/LogoPKL.png" alt="Logo PKL" height="45">
                <span class="text-decoration-none text-white ms-2 fw-bold">PKL 61</span>
            </a>
        </div>
        <button class="navbar-toggler d-lg-none custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-white" type="submit">Search</button>
                </form> -->
            <ul class="navbar-nav mb-2 mb-lg-0 me-4 d-lg-flex d-none">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Riset
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="<?= base_url('/riset1') ?>">Riset 1</a></li>
                        <li><a class="dropdown-item text-white" href="<?= base_url('/riset2') ?>">Riset 2</a></li>
                        <li><a class="dropdown-item text-white" href="<?= base_url('/riset3') ?>">Riset 3</a></li>
                        <li><a class="dropdown-item text-white" href="<?= base_url('/riset4') ?>">Riset 4</a></li>
                        <li><a class="dropdown-item text-white" href="<?= base_url('/riset5') ?>">Riset 5</a></li>
                        <li><a class="dropdown-item text-white" href="<?= base_url('/umum') ?>">Umum</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Responsive Mobile -->
            <ul id="mobile" class="navbar-nav d-lg-none">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('/riset1') ?>">Riset 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('/riset2') ?>">Riset 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('/riset3') ?>">Riset 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('/riset4') ?>">Riset 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('/riset5') ?>">Riset 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('/umum') ?>">Umum</a>
                </li>
            </ul>

        </div>
    </div>
</nav>