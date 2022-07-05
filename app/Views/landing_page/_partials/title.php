<section id="header-section">

    <div class="container-fluid h-auto vector">
        <!-- Desktop Version -->
        <div class="row p-md-5 p-3 d-md-flex d-none">
            <?php if ($title == 'Riset 2') : ?>
                <div class="position-absolute pt-3" id="satelite">
                    <img id="gambar-satelite" src="<?= base_url('img/landing_page/riset2/satelite_icon.png') ?>" style="width: 16em;" alt="">
                </div>
            <?php endif; ?>
            <div class="col p-lg-5 p-md-4 p-3 d-flex flex-column justify-content-center align-items-center text-center" data-aos="fade-left" data-aos-duration="1000">
                <h1 class="text-center text-white" style="font-size: 2.3vw;"><?= $judul ?></h1>
                <div class="garis mt-3 mb-5"></div>
                <a href="<?= base_url($href.'/dashboard'); ?>" class="btn btn-success btn-lg rounded-pill border border-3" style="font-size:1.5vw;">
                    Dashboard <i class="fas fa-arrow-circle-right arrow"></i>
                </a>
            </div>
            <div class="col d-inline-flex" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?= $img ?>" <?= $title == 'Riset 2' ? 'style="width: 23em;"' : ''; ?> alt="Maskot">
                <div class="pt-2 ps-3">
                    <a href="#" class="text-decoration-none">
                        <h3 class="text-white text-center" style="font-size: 2.4vw"><?= $title ?></h3>
                    </a>
                    <div class="garis"></div>
                </div>
            </div>
        </div>

        <!-- Mobile Version -->
        <div class="d-md-none p-5">
            <div class="d-inline-flex flex-column block" data-aos="fade-left" data-aos-duration="1000">
                <a href="#" class="text-decoration-none">
                    <h3 class="text-white"><?= $title ?></h3>
                </a>
                <div class="garis"></div>
            </div>
            <div class="d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
                <img src="<?= $img ?>" alt="Maskot" style="width: 13rem;">
            </div>
            <div class="d-block mt-5 text-center" data-aos="zoom-out" data-aos-duration="1000">
                <h3 class="subbab fs-2"><?= $judul ?></h3>
                <a href="<?= base_url($href.'/dashboard'); ?>" class="btn btn-success btn-md rounded-pill border border-2" style="font-size:1rem;">
                    Dashboard <i class="fas fa-arrow-circle-right arrow"></i>
                </a>
            </div>
        </div>
    </div>
</section>