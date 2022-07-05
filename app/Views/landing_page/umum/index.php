<?= $this->extend('landing_page/layout/main') ?>

<?= $this->section('css') ?>
<!-- Tambahkan css jika diperlukan -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="umum" class="py-5 content">

    <section id="latar" class="container-fluid py-5">
        <div class="d-flex justify-content-start me-4">
            <div class="pt-5">
                <img class="orn41" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="900" src="../../img/landing_page/umum/ornamen 4 1.png" alt="ornamen 4 1">
            </div>

            <div class="opacity">
                <div class="box" data-aos="fade-right" data-aos-duration="1500">
                    <p class="title">Latar Belakang</p>
                    <p class="text text-center text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>
        </div>
    </section>

    <section id="tujuan" class="container-fluid py-5">
        <div class="d-flex justify-content-start me-4">
            <div class="pt-5">
                <img class="orn41" data-aos="fade-right" data-aos-duration="900" src="../../img/landing_page/umum/ornamen 4 1.png" alt="ornamen 4 1">
            </div>

            <div class="opacity">
                <div class="box" data-aos="fade-right" data-aos-duration="1500">
                    <p class="title">Tujuan Penelitian</p>
                    <p class="text text-center text-secondary"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="ruang" class="container-fluid py-5 text-center">
        <p class="title text-success" data-aos="fade-down" data-aos-duration="1000">Ruang Lingkup</p>

        <div class="d-none d-md-block">
            <div class="d-flex mx-4 my-3 opacity">
                <div class="box flex-fill" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                    <p class="title"><small><small>Populasi Target</small></small></p>
                    <p class="text-secondary"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="box flex-fill" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <p class="title"><small><small>Populasi Survei</small></small></p>
                    <p  class="text-secondary"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="box flex-fill" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                    <p class="title"><small><small>Unit Analisis</small></small></p>
                    <p  class="text-secondary"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
        </div>
        

        <!-- mobile to md display -->
        <div class="d-md-none">
            <div id="demo" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false" data-aos="zoom-in" data-aos-duration="1500">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <a class="carousel-control-prev" href="#demo" role="button" data-bs-slide="prev">
							<span><i class="fas fa-arrow-left sliderButton2"></i></span>
							<span class="visually-hidden">Previous</span>
					</a>
					<a class="carousel-control-next" href="#demo" role="button" data-bs-slide="next">
							<span><i class="fas fa-arrow-right sliderButton2"></i></span>
							<span class="visually-hidden">Next</span>
					</a>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box opacity">
                            <p class="title"><small><small>Populasi Target</small></small></p>
                            <p class="text text-secondary px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box opacity">
                            <p class="title"><small><small>Populasi Survei</small></small></p>
                            <p class="text text-secondary px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box opacity">
                            <p class="title"><small><small>Unit Analisis</small></small></p>
                            <p class="text text-secondary px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                </div>

                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button> -->
            </div>
        </div>
    </section>
    
    <section id="variabel" class="container-fluid pt-5 text-center">
        <p class="title text-success text-center" data-aos="fade-down" data-aos-duration="1000">Variabel Utama</p>

        <div class="d-none d-md-block">
            <div class="d-flex justify-content-start me-5 my-3">
                <div class="" data-aos="fade-right" data-aos-duration="900">
                    <img class="group" src="../../img/landing_page/umum/Group 47.png">
                </div>
                <div class="align-self-center px-5" data-aos="fade-right" data-aos-duration="1200">
                    <p class="display-6 text-success">Variabel 1</p>
                </div>
                <div class="align-self-center pe-1">
                    <p class="text text-secondary" data-aos="fade-right" data-aos-duration="1500"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>

            <div class="d-flex var2 justify-content-start ms-5 my-3">
                <div class="d-none d-md-block" data-aos="fade-right" data-aos-duration="900">
                    <img class="group" src="../../img/landing_page/umum/Group 47.png">
                </div>
                <div class="align-self-center px-5" data-aos="fade-right" data-aos-duration="1200">
                    <p class="display-6 text-success">Variabel 2</p>
                </div>
                <div class="align-self-center pe-1">
                    <p class="text text-secondary" data-aos="fade-right" data-aos-duration="1500"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>

            <div class="d-flex justify-content-start me-5 my-3">
                <div class="d-none d-md-block" data-aos="fade-right" data-aos-duration="900">
                    <img class="group" src="../../img/landing_page/umum/Group 47.png">
                </div>
                <div class="align-self-center px-5" data-aos="fade-right" data-aos-duration="1200">
                    <p class="display-6 text-success">Variabel 3</p>
                </div>
                <div class="align-self-center pe-1">
                    <p class="text text-secondary" data-aos="fade-right" data-aos-duration="1500"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>
        </div>

        <!-- mobile to md display -->
        <div class="d-md-none">
            <div class="d-flex justify-content-start me-5 my-3">
                <div class="align-self-center" data-aos="fade-right" data-aos-duration="900">
                    <img class="group" src="../../img/landing_page/umum/Group 47.png">
                </div>
                <div class="align-self-center box px-5" data-aos="fade-right" data-aos-duration="1200">
                    <p class="display-6">Variabel 1</p>
                    <p class="text text-secondary" data-aos="fade-right" data-aos-duration="1500"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>

            <div class="d-flex var2 justify-content-start ms-5 my-3">
                <div class="align-self-center" data-aos="fade-right" data-aos-duration="900">
                    <img class="group" src="../../img/landing_page/umum/Group 47.png">
                </div>
                <div class="align-self-center box px-5" data-aos="fade-right" data-aos-duration="1200">
                    <p class="display-6">Variabel 2</p>
                    <p class="text text-secondary" data-aos="fade-right" data-aos-duration="1500"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>

            <div class="d-flex justify-content-start me-5 my-3">
                <div class="align-self-center" data-aos="fade-right" data-aos-duration="900">
                    <img class="group" src="../../img/landing_page/umum/Group 47.png">
                </div>
                <div class="align-self-center box px-5" data-aos="fade-right" data-aos-duration="1200">
                    <p class="display-6">Variabel 3</p>
                    <p class="text text-secondary" data-aos="fade-right" data-aos-duration="1500"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
                </div>
            </div>
        </div>       
    </section>

    <!-- MODEL 1 -->
    <!-- <section id="example" class="container-fluid">
        <img class="wave" src="../../img/landing_page/umum/wave.png">
        <img class="wave" src="../../img/landing_page/umum/wavey.png">
        <div class="d-flex justify-content-center m-5">
            <div class="box opacity">
                <p class="title py-1" data-aos="fade-down" data-aos-duration="1000">Responden</p>
                <p class="text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Non nisi est sit amet facilisis magna.</small></p>
            </div>
        </div>
    </section>

    <section id="hasil" class="container-fluid text-center">
        <div class="d-flex justify-content-center mx-3">
            <div class="px-3">
                <p class="title text-success" data-aos="fade-down" data-aos-duration="1000">Responden</p>
                <p class="text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Non nisi est sit amet facilisis magna. Pellentesque habitant morbi tristique senectus. In nibh mauris cursus mattis. Aliquet nibh praesent tristique magna sit amet. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus.
                <br>
                Lectus quam id leo in vitae turpis. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Tristique magna sit amet purus gravida. Arcu non odio euismod lacinia at quis. Curabitur gravida arcu ac tortor dignissim. Eget felis eget nunc lobortis. Non consectetur a erat nam at lectus urna duis convallis. Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Volutpat blandit aliquam etiam erat velit scelerisque in. Varius sit amet mattis vulputate enim. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Sit amet luctus venenatis lectus. Mauris nunc congue nisi vitae. Eu consequat ac felis donec et odio pellentesque.</small></p>
            </div>
            <div class="align-self-center">
                <img class="rec11 d-md-block d-none" src="../../img/landing_page/umum/Rectangle 11.png" alt="Rectangle 11">
            </div>
            <div class="px-3">
                <p class="title text-success" data-aos="fade-down" data-aos-duration="1000">Hasil Penelitian</p>
                <p class="text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Non nisi est sit amet facilisis magna. Pellentesque habitant morbi tristique senectus. In nibh mauris cursus mattis. Aliquet nibh praesent tristique magna sit amet. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus.
                <br>
                Lectus quam id leo in vitae turpis. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Tristique magna sit amet purus gravida. Arcu non odio euismod lacinia at quis. Curabitur gravida arcu ac tortor dignissim. Eget felis eget nunc lobortis. Non consectetur a erat nam at lectus urna duis convallis. Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Volutpat blandit aliquam etiam erat velit scelerisque in. Varius sit amet mattis vulputate enim. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Sit amet luctus venenatis lectus. Mauris nunc congue nisi vitae. Eu consequat ac felis donec et odio pellentesque.</small></p>
            </div>
        </div>
    </section> -->

    <!-- MODEL 2 -->
    <section id="pembatas" class="container-fluid py-5 text-center">
        <div class="d-flex justify-content-center">
            <div class="box">
                <p class="title py-1" data-aos="fade-down" data-aos-duration="1000">Responden</p>
                <p class="text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Non nisi est sit amet facilisis magna.</p>
            </div>
        </div> 
    </section>

    <section id="penelitian" class="container-fluid py-5 text-center">
        <p class="title text-success" data-aos="fade-down" data-aos-duration="1000">Hasil Penelitian</p>
        <div class="mx-5">
            <div id="slide" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false" data-aos="zoom-in" data-aos-duration="1500">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#slide" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#slide" data-bs-slide-to="2" aria-label="Slide 3"></button>
						<a class="carousel-control-prev" href="#slide" role="button" data-bs-slide="prev">
							<span><i class="fas fa-arrow-left sliderButton2"></i></span>
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next" href="#slide" role="button" data-bs-slide="next">
							<span><i class="fas fa-arrow-right sliderButton2"></i></span>
							<span class="visually-hidden">Next</span>
						</a>
                </div>

                <div class="carousel-inner bg-light border rounded-2">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center pb-4">
                            <div class="box m-3">
                                <img class="" src="../../img/landing_page/umum/hasil.png" alt="hasil penelitian 1">
                            </div>
                            <div class="box text m-3">
                                <p class="title"><small>Hasil Penelitian 1</small></p>
                                <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Non nisi est sit amet facilisis magna. Pellentesque habitant morbi tristique senectus. In nibh mauris cursus mattis. Aliquet nibh praesent tristique magna sit amet. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex pb-3">
                            <div class="box m-3">
                                <img class="justify-content-center" src="../../img/landing_page/umum/hasil.png" alt="hasil penelitian 1">
                            </div>
                            <div class="box text m-3">
                                <p class="title"><small>Hasil Penelitian 2</small></p>
                                <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Non nisi est sit amet facilisis magna. Pellentesque habitant morbi tristique senectus. In nibh mauris cursus mattis. Aliquet nibh praesent tristique magna sit amet. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex pb-3">
                            <div class="box graph m-3">
                                <img class="justify-content-center" src="../../img/landing_page/umum/hasil.png" alt="hasil penelitian 1">
                            </div>
                            <div class="box text m-3">
                                <p class="title"><small>Hasil Penelitian 3</small></p>
                                <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Non nisi est sit amet facilisis magna. Pellentesque habitant morbi tristique senectus. In nibh mauris cursus mattis. Aliquet nibh praesent tristique magna sit amet. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#slide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slide" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button> -->
            </div>
        </div>
    </section>

    

</section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<!-- Tambahkan Javascript jika diperlukan -->
<?= $this->endSection() ?>
