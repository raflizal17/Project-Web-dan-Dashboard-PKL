<?= $this->extend('landing_page/layout/main') ?>

<?= $this->section('css') ?>
<!-- Tambahkan css jika diperlukan -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="riset2" class="bg-light">
	<section id="secondSec" class="offset-header">
		<div class="container-fluid pb-5">
			<div class="part1">
				<div class="row mx-md-5 mx-sm-3 latbel">
					<div class="col-md-3 p-5 p-sm-0 pt-lg-4" data-aos="fade-right" data-aos-duration="1000">
						<h1 class="hitam headline">Latar Belakang</h1>
						<div class="line pt-1"></div>
					</div>

					<div class="col-md-9 p-5 p-sm-2 pt-0" data-aos="zoom-in" data-aos-duration="1000">
						<div class="content1">
							<p id="par1">Kecenderungan terus meningkatnya kebutuhan lahan menyebabkan tingginya laju alih fungsi lahan terutama sawah. Hal tersebut dapat menjadi ancaman serius yang dapat mengganggu ketahanan pangan sehingga perlu diteliti lebih lanjut mengenai karakteristik dan faktor-faktor yang mempengaruhi alih fungsi lahan pertanian. Selain itu, dibutuhkan data estimasi luas tanam dan luas alih fungsi lahan yang up to date. Survei KSA yang biasa dilakukan oleh BPS memiliki beberapa keterbatasan dari segi ekonomi dan akurasi. Di sisi lain, penginderaan jauh dengan citra satelit dapat mengatasi keterbatasan tersebut.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<section id="thirdSec" class="offset-header">
		<div class="container-fluid pb-4 pt-lg-5 pt-0">
			<div class="part2 pt-lg-5 pt-3">
				<div class="row mx-md-5 mx-sm-3">
					<div class="col-lg-2 py-md-3 p-sm-0 pt-lg-5" data-aos="fade-left" data-aos-duration="1000">
						<h1 class="hitam1 headline pt-1">Kajian 1</h1>
						<div class="line pt-1"></div>
					</div>
					
					<div class="col-lg-10 order-lg-1 order-2" data-aos="zoom-in" data-aos-duration="1000">
						<div class="content2">
						<div class="row">
							<div class="col-md-5">
								<div class="card mx-3 mx-lg-0 p-1 p-md-3 my-3 my-lg-0 py-4 order-1 gambar1">
									
										<img src="<?= base_url('../../img/landing_page/riset2/Intro Kajian 1.png') ?>" class="w-100 h-100" alt="Hasil Penelitian 3">
								
								</div>
							</div>	
							<div class="col-md-7">
								<div class="card mx-3 mx-lg-0 p-1 p-md-3 order-2 hasil_p">
									<div class="card-body">
										<p class="card-text">
										Kajian 1 membahas tentang pembangunan model <i>machine learning</i> terbaik untuk mengklasifikasikan tutupan lahan yang ada di lokus penelitian dan evaluasi terhadap hasil klasifikasi model tersebut melalui proses ground check. Selain itu,  dilakukan juga estimasi luas lahan pertanian, khususnya padi dan analisis laju alih fungsi lahan pertanian khususnya sawah menjadi non-sawah. 
										</p>
									</div>
									
								</div>
							</div>
						</div>
						</div>
					</div>

				</div>
				<div class="row mx-md-5 mx-sm-3">
					<div class="col-lg-10 p-md-5 p-sm-2 order-md-1 order-2" data-aos="zoom-in" data-aos-duration="1000">
						<div class="content2">
						<div class="row">

							<div class="col-md-7">
								<div class="card mx-3 mx-lg-0 p-1 p-md-3 order-md-1 order-1 order-lg-2 hasil_p">
									<div class="card-body">
										<p class="card-text">
										Kajian 2 berfokus menganalisis karakteristik alih fungsi lahan dari sisi petani dan juga faktor-faktor yang mempengaruhi alih fungsi lahan di tingkat kewilayahan yang tidak dapat dijelaskan dari penginderaan jauh dengan citra satelit.
										</p>
									</div>
									
								</div>
							</div>
							<div class="col-md-5">
								<div class="card mx-3 mx-lg-0 p-1 p-md-3 my-3 my-lg-0 py-4 order-2 order-md-1 gambar">
									
										<img src="<?= base_url('../../img/landing_page/riset2/intro Kajian 2.png') ?>" class="w-100 h-100" alt="Hasil Penelitian 3">
									
								</div>
							</div>
						</div>
						</div>
					</div>

					<div class="col-lg-2 py-md-3 p-sm-0 pt-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-duration="1000">
						<h1 class="hitam1 headline pt-3">Kajian 2</h1>
						<div class="line pt-1"></div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section id="fourthSec" class="offset-header">
			<div class="row" style="background-color: #f7f5f9;">
				<div class="col-12" data-aos="fade-up" data-aos-duration="1000">
					<h1 class="headline text-center pt-3">Tujuan</h1>
					<div class="line pt-2"></div>
				</div>
			</div>
		<div class="container-fluid px-sm-0 px-0 pb-5 mt-0">
				<div class="d-none d-md-block fourth">
					<div class="row konten justify-content-center">
						<div class="col-lg-6 col-md-6 mb-3 mt-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
							<div class="card justify-content-center shadow box pt-4">
								<div class="card-body p-4" style="height: 70vh;">
									<h5 class="card-title text-uppercase text-center"><strong>Kajian 1</strong></h5>
									<br>
									<ol class="card-text justify-content-center" style="line-height: 2;">
										<li class="isi2">Membangun model terbaik untuk klasifikasi tutupan lahan berdasarkan data citra satelit dan melakukan ground checking untuk evaluasi model klasifikasi tutupan lahan.</li>
										<li class="isi2">Melakukan estimasi luas tanam padi di Bandung Barat & Purwakarta menggunakan data citra satelit.</li>
										<li class="isi2">Menganalisis alih fungsi lahan terutama untuk lahan tanam padi berdasarkan data citra satelit  di Bandung Barat & Purwakarta.</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-3 mt-3 h-100" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
							<div class="card justify-content-center shadow box pt-4">
								<div class="card-body p-4" style="height: 70vh;">
									<h5 class="card-title text-uppercase text-center"><strong>Kajian 2</strong></h5>
									<br>
									<ol class="card-text justify-content-center" style="line-height: 2;">
										<li class="isi2">Mengetahui karakteristik alih fungsi lahan pertanian dan alasan petani pemilik lahan melakukan alih fungsi lahan pertanian kabupaten bandung barat & purwakarta.</li>
										<li class="isi2">Mengetahui faktor-faktor yang mempengaruhi alih fungsi lahan pertanian di tingkat kewilayahan Bandung Barat & Purwakarta.</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-block d-md-none fourth">
				<div class="row">
					<div class="col-md-12">
						<div id="tujuan" class="carousel slide" data-ride="carousel" data-bs-interval="false" data-aos="zoom-in" data-aos-duration="1000">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="card w-100 justify-content-center shadow box">
										<div class="card-body p-4">
											<h6 class="card-title text-uppercase text-center"><strong>Kajian 1</strong></h6>
											<ol class="card-text justify-content-center">
												<li class="isi2">Membangun model terbaik untuk klasifikasi tutupan lahan berdasarkan data citra satelit dan Melakukan ground checking untuk evaluasi model klasifikasi tutupan lahan.</li>
												<li class="isi2">Melakukan estimasi luas tanam padi di Bandung Barat & Purwakarta menggunakan data citra satelit.</li>
												<li class="isi2">Menganalisis alih fungsi lahan terutama untuk lahan tanam padi berdasarkan data citra satelit  di Bandung Barat & Purwakarta.</li>
											</ol>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="card w-100 justify-content-center shadow box">
										<div class="card-body p-4">
											<h6 class="card-title text-uppercase text-center"><strong>Kajian 2</strong></h6>
											<ol class="card-text justify-content-center">
												<li class="isi2">Mengetahui Karakteristik Alih Fungsi Lahan Pertanian dan Alasan Petani Pemilik Lahan Melakukan Alih Fungsi Lahan Pertanian Kabupaten Bandung Barat & Purwakarta.</li>
												<li class="isi2">Mengetahui Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan pertanian di Tingkat Kewilayahan Bandung Barat & Purwakarta.</li>
											</ol>
										</div>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#tujuan" role="button" data-slide="prev">
								<span><i class="fa fa-arrow-circle-left sliderButton2"></i></span>
								<span class="visually-hidden">Previous</span>
							</a>
							<a class="carousel-control-next" href="#tujuan" role="button" data-slide="next">
								<span><i class="fa fa-arrow-circle-right sliderButton2"></i></span>
								<span class="visually-hidden">Next</span>
							</a>
						</div>
					</div>
				</div>
        </div>
		</div>
	</section>

	<section id="fifthSec" class="offset-header">
		<div class="container-fluid pb-5 mt-3">
			<img class="orn img-fluid mx-auto d-block" src="../../img/landing_page/riset2/ornamen1.png" alt="Ornamen">
			<div class="row">
				<div class="col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
					<h1 class="headline text-center pt-3">Keterkaitan Kajian 1 dan Kajian 2</h1>
					<div class="garis pt-2"></div>
				</div>
				<div class="card justify-content-center shadow box pt-4 mx-auto p-4 p-md-5 w-75" data-aos="zoom-in" data-aos-duration="1000">
					<div class="card-body">
						<div class="row">
							<div class="col-md-10 col-sm-12">
								<p class="card-text ">Pemilihan sampel kecamatan untuk pencacahan karakteristik dan alasan alih fungsi lahan kajian 2 menggunakan laju alih fungsi lahan dari kajian 1 sebagai auxiliary variabel.</p>
							</div>
							<div class="col-md-2 col-sm-none me-0 px-0">
								<img class="img-fluid d-md-block d-none h-100 mw-100" src="../../img/landing_page/riset2/ornamen 56.png" alt="Ornamen">
							</div>
						</div>
					</div>
				</div>
				<div class="card1 justify-content-center shadow box pt-4 mx-auto p-4 p-md-5 w-75" data-aos="zoom-in" data-aos-duration="1000">
					<div class="card-body">
						<div class="row">
							<div class="col-md-10 col-sm-12">
								<p class="card-text ">Kajian 1 melakukan perhitungan laju alih fungsi lahan menggunakan data dari citra satelit, sedangkan kajian 2 mengeksplorasi alih fungsi lahan lebih lanjut melalui pencacahan lapangan terkait informasi yang tidak bisa didapatkan dari citra satelit, yaitu karakteristik dan faktor-faktor yang mempengaruhi alih fungsi lahan pertanian.</p>
							</div>
							<div class="col-md-2 col-sm-none me-0 px-0">
								<img class="img-fluid d-md-block d-none h-70 mw-100" src="../../img/landing_page/riset2/ornamen 56.png" alt="Ornamen">
							</div>
						</div>
					</div>
				</div>
				<div class="card2 justify-content-center shadow box pt-4 mx-auto p-4 p-md-5 w-75"  data-aos="zoom-in" data-aos-duration="1000">
					<div class="card-body">
						<div class="row">
							<div class="col-md-10 col-sm-12">
								<p class="card-text1 ">Pemodelan faktor-faktor yang mempengaruhi alih fungsi lahan pertanian pada kajian 2 memanfaatkan laju alih fungsi lahan pertanian yang dihitung oleh kajian 1 dari citra satelit, tetapi dalam bentuk laju tahunan.</p>
							</div>
							<div class="col-md-2 col-sm-none me-0 px-0">
								<img class="img-fluid d-md-block d-none h-70 mw-100" src="../../img/landing_page/riset2/ornamen 56.png" alt="Ornamen">
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<img class="orn img-fluid mx-auto d-block mb-5" src="../../img/landing_page/riset2/Rectangle 11.png" alt="Ornamen">
		</div>
	</section>

	<section id="sixthSec" class="offset-header">
		<div class="container-fluid mt-5">
			<div class="row justify-content-center sixth mt-5 mb-3">
				<div class="text-center" data-aos="fade-up" data-aos-duration="1000">
					<h1 class="headline">Ruang Lingkup</h1>
					<div class="line pt-2"></div>
				</div>
			</div>
		
		<div class="container pt-3 pb-5 mb-md-0 mb-sm-0">
			<nav>
				<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
					<button class="nav-link active" id="kajj1" data-bs-toggle="tab" data-bs-target="#kajiann1" type="button" role="tab" aria-controls="kajian1" aria-selected="true" style="font-size: 22px;">Kajian 1</button>
					<button class="nav-link" id="kajj2" data-bs-toggle="tab" data-bs-target="#kajiann2" type="button" role="tab" aria-controls="kajian2" aria-selected="false" style="font-size: 22px;">Kajian 2</button>
				</div>
			</nav>
			<div class="tab-content tabKajian">
				<div class="tab-pane fade show active" id="kajiann1" role="tabpanel" aria-labelledby="kajj1">
					<div class="d-none d-md-block sixth1">
						<div class="row konten1 justify-content-center">
							<div class="col-lg-6 col-md-10 mb-5 mt-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl1 text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL1.png" alt="">
									</div>
									<div class="card-body1 p-3">
										<h5 class="card-title1 text-center text-uppercase"><strong>Sumber Data</strong></h5>
											<ul class="card-text1 py-3">
												<li>Citra Satelit Sentinel-1</li>
												<li>Citra Satelit Sentinel-2</li>
												<li>Citra Satelit Landsat-8</li>
											</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-10 mb-5 mt-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL2.png" alt="">
									</div>
									<div class="card-body1 p-3">
										<h5 class="card-title1 text-center text-uppercase"><strong>Kelas Tutupan Lahan</strong></h5>
											<ul class="card-text1 py-3">
												<li>Sawah</li>
												<li>Lahan Terbangun</li>
												<li>Hutan</li>
												<li>Badan Air</li>
												<li>Lahan Kosong Non-Vegetatif</li>
											</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-10 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL4.png" alt="">
									</div>
									<div class="card-body1 p-3">
										<h5 class="card-title1 text-center text-uppercase"><strong>Waktu dan Tempat</strong></h5>
											<ul class="card-text1 py-3">
												<li>Landsat-8 : Bandung Barat 2013 & 2021</li>
												<li>Landsat-8 : Purwakarta 2013 & 2021</li>
												<li>Sentinel-2 : Bandung Barat</li>
												<li>Sentinel-2 : Purwakarta</li>
											</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-block d-md-none sixth1">
						<div class="row">
							<div class="col-md-12">
								<div id="ruang-lingkup-1" class="carousel slide" data-ride="carousel" data-bs-interval="false" data-aos="zoom-in" data-aos-duration="1000">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div class="card shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Sumber Data</strong></h5>
													<ul class="card-text py-3 mt-3" style="font-size: 14px;">
														<li>Sentinel-1</li>
														<li>Sentinel-2</li>
														<li>Landsat-8</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="carousel-item">
											<div class="card shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Kelas Tutupan Lahan</strong></h5>
													<ul class="card-text py-3 mt-3" style="font-size: 14px;">
														<li>Sawah</li>
														<li>Lahan Terbangun</li>
														<li>Hutan</li>
														<li>Badan Air</li>
														<li>Lahan Kosong Non-Vegetatif</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="carousel-item">
											<div class="card shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Waktu dan Tempat</strong></h5>
													<ul class="card-text py-3 mt-3" style="font-size: 14px;">
														<li>Landsat-8 : Bandung Barat 2013 & 2021</li>
														<li>Landsat-8 : Purwakarta 2013 & 2021</li>
														<li>Sentinel-2 : Bandung Barat</li>
														<li>Sentinel-2 : Purwakarta</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#ruang-lingkup-1" role="button" data-slide="prev">
										<span><i class="fa fa-arrow-circle-left sliderButton2"></i></span>
										<span class="visually-hidden">Previous</span>
									</a>
									<a class="carousel-control-next" href="#ruang-lingkup-1" role="button" data-slide="next">
										<span><i class="fa fa-arrow-circle-right sliderButton2"></i></span>
										<span class="visually-hidden">Next</span>
									</a>
								</div>
							</div>
						</div>
            		</div>
				</div>
				<div class="tab-pane fade" id="kajiann2" role="tabpanel" aria-labelledby="kajj2">
						<div class="d-none d-md-block sixth1">
						<div class="row konten1 justify-content-center">
							<div class="col-lg-6 col-md-12 mb-3 mt-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl1 text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL1.png" alt="">
									</div>
									<div class="card-body2 p-3">
										<h5 class="card-title1 text-center text-uppercase"><strong>Populasi Target</strong></h5>
											<ul class="card-text2 py-3" style="font-size: 14px;">
												<li>Seluruh <strong>lahan pertanian</strong> di Kabupaten Bandung Barat dan Purwakarta <strong>yang beralih fungsi</strong> antara tahun 2013-2021.</li>
												<li>Seluruh <strong>petani pemilik lahan</strong> yang melakukan <strong> alih fungsi lahan</strong> di wilayah studi antara tahun 2013-2021.</li>
											</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 mb-3 mt-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL3.png" alt="">
									</div>
									<div class="card-body2 p-3">
										<h5 class="card-title1 text-center text-uppercase"><strong>Unit Observasi dan Informan</strong></h5>
											<ul class="card-text2 py-3" style="font-size: 14px;">
												<li>Unit observasi : Petani pemilik lahan yang telah mengalihfungsikan lahan pada tahun 2013-2021</li>
												<li>Informan : </li>
													<ol class="justify-content-center">
														<li> Kepala Desa, Pemerintah setempat, Ketua SLS.</li>
														<li> Pemilik lahan pertanian yang telah melakukan alih fungsi lahan antara 2013-2021 dan berprofesi sebagai petani pada saat memiliki lahan.</li>
													</ol>	
											</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-10 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" style="width: 20vw; ">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL4.png" alt="">
									</div>
									<div class="card-body3 p-1 mt-2">
										<h5 class="card-title1 text-center text-uppercase"><strong>Unit Analisis</strong></h5>
											<ul class="card-text3 py-3">
												<li>Tujuan 1 : <br>Lahan yang telah beralih fungsi tahun 2013-2021</li>
												<li>Tujuan 2 : <br>Kecamatan</li>
											</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-10 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" style="width: 20vw;">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl1 text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL1.png" alt="">
									</div>
									<div class="card-body3 p-1 mt-2">
										<h5 class="card-title1 text-center text-uppercase"><strong>Lokus</strong></h5>
										<br>
											<p class="card-text3 text-center">
												Kabupaten Bandung Barat dan Kabupaten Purwakarta.	
											</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" style="width: 20vw;">
								<div class="card shadow box">
									<div class="row">
										<img class="imgRl text-start ms-2 mt-2" src="./../img/landing_page/riset2/RL2.png" alt="">
									</div>
									<div class="card-body3 p-1 mt-2">
										<h5 class="card-title1 text-center text-uppercase"><strong>Dimensi Waktu</strong></h5>
										<br>
											<p class="card-text3 text-center">
												2013-2021
											</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="d-block d-md-none sixth1">
						<div class="row">
							<div class="col-md-12">
								<div id="ruang-lingkup-2" class="carousel slide" data-ride="carousel" data-bs-interval="false" data-aos="zoom-in" data-aos-duration="1000">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div class="card  shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Populasi Target</strong></h5>
													<ul class="card-text py-3 mt-2" style="font-size: 14px;">
														<li>Seluruh <strong>lahan pertanian</strong> di Kabupaten Bandung Barat dan Purwakarta <strong>yang beralih fungsi</strong> antara tahun 2013-2021.</li>
														<li>Seluruh <strong>petani pemilik lahan</strong> yang melakukan <strong> alih fungsi lahan</strong> di wilayah studi antara tahun 2013-2021.</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="carousel-item">
											<div class="card  shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Unit Observasi dan Informan</strong></h5>
													<ul class="card-text py-3" style="font-size: 13px;">
														<li>Unit observasi : Petani pemilik lahan yang telah mengalihfungsikan lahan pada tahun 2013-2021</li>
														<li>Informan : 
															<ol class="justify-content-center">
																<li> Kepala Desa, Pemerintah setempat, Ketua SLS.</li>
																<li> Pemilik lahan pertanian yang telah melakukan alih fungsi lahan antara 2013-2021 dan berprofesi sebagai petani pada saat memiliki lahan.</li>
															</ol>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="carousel-item">
											<div class="card shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Unit Analisis</strong></h5>
													<ul class="card-text py-3 mt-2" style="font-size: 14px;">
														<li>Tujuan 1 : <br>Lahan yang telah beralih fungsi tahun 2013-2021</li>
														<li>Tujuan 2 : <br>Kecamatan</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="carousel-item">
											<div class="card shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Lokus</strong></h5>
													<p class="card-text text-center px-3 mt-2" style="font-size: 14px;">Kabupaten Bandung Barat dan Kabupaten Purwakarta.	</p>
												</div>
											</div>
										</div>
										<div class="carousel-item">
											<div class="card shadow box">
												<div class="card-body" style="height: 50vh;">
													<h4 class="card-title text-center text-uppercase"><strong>Dimensi Waktu</strong></h5>
													<p class="card-text text-center px-3 mt-2" style="font-size: 14px;">2013-2021</p>
												</div>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#ruang-lingkup-2" role="button" data-slide="prev">
										<span><i class="fa fa-arrow-circle-left sliderButton2"></i></span>
										<span class="visually-hidden">Previous</span>
									</a>
									<a class="carousel-control-next" href="#ruang-lingkup-2" role="button" data-slide="next">
										<span><i class="fa fa-arrow-circle-right sliderButton2"></i></span>
										<span class="visually-hidden">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section id="seventhSec" class="offset-header">
		<div class="row" style="background-color: #f7f5f9;">
				<div class="col-12 mt-5" data-aos="fade-up" data-aos-duration="1000">
					<h1 class="headline text-center">Variabel Utama</h1>
					<div class="line pt-2"></div>
				</div>
		</div>
		<div class="container-fluid pb-5" style="background-color: #f7f5f9; ">
			<div class="row mx-md-5 mx-sm-3">
					<div class="col-lg-3 col-12 py-md-3 p-sm-0 mx-lg-5 mx-none var" data-aos="fade-left" data-aos-duration="1000">
						<h5 style="letter-spacing: 1em;"><strong>Kajian1</strong></h5>
					</div>
					<div class="col-lg-7 col-none py-md-3 p-sm-0 d-lg-block d-none" data-aos="fade-left" data-aos-duration="1000">
						<img src="../../img/landing_page/riset2/Line 8.png" style="width: 750px; height: 10px" alt="Line">
					</div>
			</div>

			<div class="row mx-md-5 mx-sm-3">
				<div id="carouselkajian1" class="carousel slide carousel slide px-md-0 mx-auto" data-bs-ride="carousel" data-bs-interval="true" data-bs-touch="false">
					<div class="carousel-indicators car1 mb-0">
						<button type="button" data-bs-target="#carouselkajian1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselkajian1" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselkajian1" data-bs-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-bs-target="#carouselkajian1" data-bs-slide-to="3" aria-label="Slide 4"></button>
						<button type="button" data-bs-target="#carouselkajian1" data-bs-slide-to="4" aria-label="Slide 5"></button>
						<button type="button" data-bs-target="#carouselkajian1" data-bs-slide-to="5" aria-label="Slide 6"></button>
					</div>
					
					<div class="carousel-inner">
							<div class="carousel-item active" data-bs-interval="10000">
									<div class="content1 ">
										<div class="col-md-12">
											<h5 class="dim ">Indeks Komposit</h5>
										</div>
										<div class="card2 justify-content-center shadow box" data-aos="zoom-in" data-aos-duration="1000">
											<div class="card-body">
												<section id="seventhSecA" class="offset-header">
													<div class="container-fluid">
														<div class="row mb-4">
																<div class="col-md-4 col-12 mt-lg-5 mt-5 align-items-center">
																	<h3 class="card-text text-center d-md-block"><strong>NDVI</strong></h3>
																</div>
																<div class="col-md-8 col-12 text-center align-items-center">
																	<p class="card-text d-md-block mb-0">Indeks yang menggambarkan tingkat kehijauan suatu tanaman, digunakan untuk mendeteksi tanaman hijau.</p>
																	<img class="img-fluid d-md-block mh-30 mw-30 mt-0" src="../../img/landing_page/riset2/ndvi.png" alt="Ornamen">
																</div>
														</div>
													</div>
												</section>
												<section id="seventhSecB" class="offset-header">
													<div class="container-fluid1">
														<div class="row pt-5 pt-sm-3 mb-4">
															<div class="col-md-8 col-12 order-md-1 order-2 text-center align-items-center">
																<p class="card-text d-md-block mb-0">Indeks yang menonjolkan info tubuh air. NDWI ini digunakan untuk pemantauan awal tanam ketika sawah masih tergenang air.</p>
																<img class="img-fluid d-md-block mh-30 mw-30" src="../../img/landing_page/riset2/NDWI.png" alt="Ornamen">
															</div>
															<div class="col-md-4 col-12 mt-lg-5 mt-5 order-md-2 order-1 align-items-center">
																<h3 class="card-text text-center d-md-block"><strong>NDWI</strong></h3>
															</div>
														</div>
													</div>
												</section>
												<section id="seventhSecA" class="offset-header">
													<div class="container-fluid2">
														<div class="row">
																<div class="col-md-4 col-12 mt-lg-5 mt-5 align-items-center">
																	<h3 class="card-text text-center d-md-block"><strong>NDTI</strong></h3>
																</div>
																<div class="col-md-8 col-12 text-center align-items-center">
																	<p class="card-text d-md-block mb-0">NDTI adalah indikator yang  digunakan untuk membedakan antara area terbangun, bera, dan jalan tol.</p>
																	<img class="img-fluid d-md-block mh-30 mw-30" src="../../img/landing_page/riset2/NDTI.png" alt="Ornamen">
																</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
							</div>
							<div class="carousel-item" data-bs-interval="10000">
									<div class="content1 ">
										<div class="col-md-12">
											<h5 class="dim ">Indeks Komposit</h5>
										</div>
										<div class="card2 justify-content-center shadow box" data-aos="zoom-in" data-aos-duration="1000">
											<div class="card-body">
												<section id="seventhSecA" class="offset-header">
													<div class="container-fluid1">
														<div class="row mt-5">
															<div class="col-md-4 col-12 mt-lg-5 mt-5 align-items-center">
																<h3 class="card-text text-center d-md-block"><strong>NDBI</strong></h3>
															</div>
															<div class="col-md-8 col-12 text-center align-items-center">
																<p class="card-text d-md-block mb-0">Indeks yang sangat sensitif terhadap lahan terbangun/lahan terbuka yang dikembangkan untuk menonjolkan kenampakan lahan terbangun dibandingkan dengan obyek yang lainnya.</p>
																<img class="img-fluid d-md-block mh-30 mw-30 mt-0 mb-5" src="../../img/landing_page/riset2/NDBI.png" alt="Ornamen">
															</div>
														</div>
													</div>
												</section>
												<section id="seventhSecB" class="offset-header">
													<div class="container-fluid1">
														<div class="row">
															<div class="col-md-8 col-12 order-md-1 order-2 text-center align-items-center">
																<p class="card-text d-md-block mb-0">EVI pengembangan dari indeks NDVI dengan cara meningkatkan tingkat kehijauan tanaman melalui pengaruh dari latar belakang tanah dan sinyal kanopi sehingga cocok digunakan untuk identifikasi tanaman.</p>
																<img class="img-fluid d-md-block mh-30 mw-30 mt-0" src="../../img/landing_page/riset2/EVI.png" alt="Ornamen">
															</div>
															<div class="col-md-4 col-12 mt-lg-5 mt-5 order-md-2 order-1 align-items-center">
																<h3 class="card-text text-center d-md-block"><strong>EVI</strong></h3>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
							</div>
							<div class="carousel-item" data-bs-interval="10000">
									<div class="content1 ">
										<div class="col-md-12">
											<h5 class="dim ">Indeks Komposit</h5>
										</div>
										<div class="card2 justify-content-center shadow box" data-aos="zoom-in" data-aos-duration="1000">
											<div class="card-body">
												<section id="seventhSecA" class="offset-header">
													<div class="container-fluid1">
														<div class="row mt-5">
															<div class="col-md-4 col-12 mt-lg-5 mt-5  align-items-center">
																<h3 class="card-text text-center d-md-block"><strong>SAVI</strong></h3>
															</div>
															<div class="col-md-8 col-12 text-center align-items-center">
																<p class="card-text d-md-block mb-0">Pengembangan dari NDVI dengan menekan pengaruh latar belakang tanah pada tingkat Kecerahan Kanopi. Paling baik digunakan di daerah dengan vegetasi yang relatif jarang di mana tanah terlihat.</p>
																<img class="img-fluid d-md-block mh-30 mw-30 mt-0 mb-5" src="../../img/landing_page/riset2/SAVI.png" alt="Ornamen">
															</div>
														</div>
													</div>
												</section>
												<section id="seventhSecB" class="offset-header">
													<div class="container-fluid1">
														<div class="row">
															<div class="col-md-8 col-12 order-md-1 order-2 text-center align-items-center">
																<p class="card-text d-md-block mb-0">Indikator numerik yang menggabungkan pita spektra inframerah biru, merah, inframerah dan gelombang pendek untuk menangkap variasi tanah. Indeks ini digunakan untuk menonjolkan aspek tanah terbuka pada hutan.</p>
																<img class="img-fluid d-md-block mh-30 mw-30 mt-0" src="../../img/landing_page/riset2/BSI.png" alt="Ornamen">
															</div>
															<div class="col-md-4 col-12 mt-lg-5 mt-5 order-md-2 order-1 align-items-center">
																<h3 class="card-text text-center d-md-block"><strong>BSI</strong></h3>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
							</div>
							<div class="carousel-item" data-bs-interval="10000">
									<div class="content1 ">
										<div class="col-md-12">
											<h5 class="dim ">Estimasi Luas Tanam Padi </h5>
										</div>
										<div class="card2 justify-content-center shadow box" data-aos="zoom-in" data-aos-duration="1000">
											<div class="card-body">
												<section id="seventhSecA" class="offset-header">
													<div class="container-fluid5">
														<div class="row mt-5">
															<div class="col-md-12 col-12 mt-5  align-items-center">
																<img class="img-fluid d-md-block mh-30 mw-30 mt-0 m-auto" src="../../img/landing_page/riset2/Luas.png" alt="Ornamen">
															</div>
															<div class="col-md-12 col-12 align-items-center">
																<ul class="card-text d-md-block" style="font-size: 18px; text-align: justify;">
																	Dimana:
																	<li>Luas (ha)&nbsp;= Luas dari tutupan lahan dalam satuan hektar</li> 
																	<li>Jumlah Pixel&nbsp;= Total jumlah pixel dari setiap tutupan lahan yang ingin dikonversi ukuran luasnya</li> 
																</ul>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
							</div>
							<div class="carousel-item" data-bs-interval="10000">
									<div class="content1 ">
										<div class="col-md-12">
											<h5 class="dim ">Perubahan Tutupan Lahan </h5>
										</div>
										<div class="card2 justify-content-center shadow box" data-aos="zoom-in" data-aos-duration="1000">
											<div class="card-body">
												<section id="seventhSecA" class="offset-header">
													<div class="container-fluid3">
														<div class="row mt-4">
															<div class="col-md-12 col-12 mt-5  align-items-center">
																<img class="img-fluid d-md-block mh-20 mw-20 m-auto" src="../../img/landing_page/riset2/Perubahan.png" alt="Ornamen">
															</div>
															<div class="col-md-12 col-12 align-items-center" style="font-size: 18px; text-align: justify;">
																Keterangan:
																<ul class="card-text d-md-block">
																	<li>V&nbsp;= Perubahan alih fungsi lahan (%)</li> 
																	<li>L2021&nbsp;= Luas lahan tahun 2021 (ha)</li>
																	<li>L2013&nbsp;= Luas lahan tahun 2013 (ha)</li>
																</ul>
																*Jika nilai V suatu tutupan lahan lebih kecil daripada 0, luas tutupan  lahan tersebut diartikan mengalami penyusutan.
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
							</div>
							<div class="carousel-item" data-bs-interval="10000">
									<div class="content1 ">
										<div class="col-md-12">
											<h5 class="dim ">Laju Alih Fungsi Lahan</h5>
										</div>
										<div class="card2 justify-content-center shadow box" data-aos="zoom-in" data-aos-duration="1000">
											<div class="card-body">
											<section id="seventhSecA" class="offset-header">
													<div class="container-fluid4">
														<div class="row">
															<div class="col-md-12 col-12 mt-5 align-items-center">
																<img class="img-fluid d-md-block h-8 w-10 m-auto" src="../../img/landing_page/riset2/Laju.png" alt="Ornamen">
															</div>
															<div class="col-md-12 col-12 align-items-center" style="font-size: 16px; text-align: justify;">
															Dimana:
																<ul class="card-text d-md-block">
																	<li>Xi&nbsp;= Laju alih fungsi lahan di kecamatan ke-i</li> 
																	<li>ni&nbsp;= Banyaknya <em>pixel of interest</em>  yang terklasifikasikan sebagai non-sawah pada tahun  2021 di suatu kecamatan ke-i</li>
																	<li>Ni&nbsp;= Banyaknya <em>pixel of interest</em>  yang terklasifikasikan sebagai sawah pada tahun  2013 di suatu kecamatan ke-i</li>
																</ul>
																*<em>Pixel of interest</em> merupakan piksel yang tidak terklasifikasikan sebagai awan pada tahun 2013 maupun 2021
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
							</div>
					</div>
					<div class="tombol">
					<a class="carousel-control-prev" href="#carouselkajian1" role="button" data-bs-slide="prev">
						<span><i class="carousel-control-prev-icon" aria-hidden="true"></i></span>
						<span class="visually-hidden">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselkajian1" role="button" data-bs-slide="next">
						<span><i class="carousel-control-next-icon" aria-hidden="true"></i></span>
						<span class="visually-hidden">Next</span>
					</a>
					</div>
				</div>
				
			</div>
			<div class="row mx-md-5 mx-sm-3 pt-5">
					<div class="col-lg-7 col-none py-md-3 p-sm-0 mx-lg-5 mx-none d-lg-block d-none gbr" data-aos="fade-right" data-aos-duration="1000">
						<img src="../../img/landing_page/riset2/Line 8.png" style="width: 750px; height: 10px; position:relative; left: 15px" alt="Line">
					</div>
					<div class="col-lg-3 col-12 py-md-3 p-sm-0 var1" data-aos="fade-right" data-aos-duration="1000">
						<h5 style="letter-spacing: 1em;"><strong>Kajian2</strong></h5>
					</div>
			</div>
			<div class="container pt-3 pb-5 mb-md-0 mb-sm-0">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<button class="nav-link active" id="varut1" data-bs-toggle="tab" data-bs-target="#varutt1" type="button" role="tab" aria-controls="kajian1" aria-selected="true" style="font-size: 22px;">Tujuan 1</button>
						<button class="nav-link" id="varut2" data-bs-toggle="tab" data-bs-target="#varutt2" type="button" role="tab" aria-controls="kajian2" aria-selected="false" style="font-size: 22px;">Tujuan 2</button>
					</div>
				</nav>
				<div class="tab-content tabKajian">
					<div class="tab-pane fade show active" id="varutt1" role="tabpanel" aria-labelledby="varut1">
						<div class="row1">
							<div class="col-md-12 mx-auto mb-0 pt-5 pb-3 px-lg-3 px-5">
							<div id="carouselKajian1" class="carousel slide carousel slide px-md-0 mx-auto" data-bs-ride="carousel" data-bs-interval="true" data-bs-touch="false">
								<div class="carousel-indicators mb-0">
									<button type="button" data-bs-target="#carouselKajian1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselKajian1" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#carouselKajian1" data-bs-slide-to="2" aria-label="Slide 3"></button>
								</div>
								<div class="carousel-inner">
										
								<div class="carousel-item active" data-bs-interval="10000">
											<div class="row mb-3 justify-content-evenly">
												<div class="col-md-10">
													<div class="card3">
														<div class="card-body">
														<h6 class="card-title text-center"><strong>Karakteristik Petani Pemilik Lahan</strong></h6>
														<img class="orn img-fluid mx-auto d-block mb-5" src="../../img/landing_page/riset2/Line 9.png" alt="Ornamen">
															<ul class="card-text1 py-3" style="font-size: 20px; line-height: 2;">
																<li>Usia Petani</li>
																<li>Jumlah anggota RT</li>
																<li>Tingkat Pendidikan Petani</li>
																<li>Lama Bertani</li>
																<li>Perubahan pekerjaan</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="carousel-item" data-bs-interval="10000">
											<div class="row mb-3 justify-content-evenly">
												<div class="col-md-10">
													<div class="card3">
														<div class="card-body">
														<h6 class="card-title text-center"><strong>Karakteristik Lahan</strong></h6>
														<img class="orn img-fluid mx-auto d-block mb-5" src="../../img/landing_page/riset2/Line 9.png" alt="Ornamen">	
															<ul class="card-text1 py-3" style="font-size: 20px; line-height: 2;">
																<li>Luas kepemilikan lahan sawah </li>
																<li>Luas lahan yang dialihfungsikan</li>
																<li>Asal mula lahan</li>
																<li>Harga jual lahan</li>
																<li>Harga sewa lahan</li>
																<li>Jenis komoditas yang ditanam di lahan</li>
																<li>Mekanisme alih fungsi lahan</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="carousel-item" data-bs-interval="10000">
											<div class="row mb-3 justify-content-evenly">
												<div class="col-md-10">
													<div class="card3">
														<div class="card-body">
														<h6 class="card-title text-center"><strong>Alasan Alih fungsi lahan</strong></h6>
														<img class="orn img-fluid mx-auto d-block mb-5" src="../../img/landing_page/riset2/Line 9.png" alt="Ornamen">	
															<ul class="card-text1 py-3" style="font-size: 20px; line-height: 2;">
															Alasan alih fungsi lahan ditinjau dari aspek :
																<li>Aspek Ekonomi</li>
																<li>Aspek Sosial</li>
																<li>Aspek Demografi</li>
																<li>Aspek Teknis</li>
																<li>Aspek Lingkungan dan Geografis</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselKajian1" role="button" data-bs-slide="prev">
										<span><i class="carousel-control-prev-icon" aria-hidden="true"></i></span>
										<span class="visually-hidden">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselKajian1" role="button" data-bs-slide="next">
										<span><i class="carousel-control-next-icon" aria-hidden="true"></i></span>
										<span class="visually-hidden">Next</span>
									</a>
							</div>
									
							</div>
                	</div>
						
					</div>
					<div class="tab-pane fade" id="varutt2" role="tabpanel" aria-labelledby="varut2">
					<div class="row1">
							<div class="col-md-12 mx-auto mb-0 pt-5 pb-3 px-lg-3 px-5">
							<div id="carouselKajian2" class="carousel slide carousel slide px-md-0 mx-auto" data-bs-ride="carousel" data-bs-interval="true" data-bs-touch="false">
								<div class="carousel-indicators mb-0">
									<button type="button" data-bs-target="#carouselKajian2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselKajian2" data-bs-slide-to="1" aria-label="Slide 2"></button>
								</div>
								<div class="carousel-inner">
										
								<div class="carousel-item active" data-bs-interval="10000">
											<div class="row mb-3 justify-content-evenly">
												<div class="col-md-10">
													<div class="card3">
														<div class="card-body">
														<h6 class="card-title text-center"><strong>Variabel Independen</strong></h6>
														<img class="orn img-fluid mx-auto d-block mb-5" src="../../img/landing_page/riset2/Line 9.png" alt="Ornamen">
															<ul class="card-text1 py-3" style="font-size: 18px; line-height: 2;">
																<li>Persentase Laju Pertumbuhan Penduduk</li>
																<li>Rasio Fasilitas Ekonomi</li>
																<li>Rasio Fasilitas Pendidikan</li>
																<li>Rasio Fasilitas Kesehatan</li>
																<li>Ketinggian wilayah</li>
																<li>Variasi ketinggian wilayah</li>
																<li>Aksesibilitas</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="carousel-item" data-bs-interval="10000">
											<div class="row mb-3 justify-content-evenly">
												<div class="col-md-10">
													<div class="card3">
														<div class="card-body">
															<h6 class="card-title text-center"><strong>Variabel Dependen : Persentase Laju Alih Fungsi Lahan Sawah Tahunan</strong></h6>
															<img class="orn img-fluid mx-auto d-block mb-4" src="../../img/landing_page/riset2/Line 9.png" alt="Ornamen">
															<div class="col-md-12 col-12 m-0">
																<img class="img-fluid d-md-block h-8 w-20 pt-0 m-auto" src="../../img/landing_page/riset2/Dependen.png" alt="Ornamen">	
															</div>
																<ul class="card-text1 py-3">
																	Keterangan :
																	<li><em>pixel of interest</em>&nbsp;= Pixel yang tidak terklasifikasi sebagai awan baik pada 2013 maupun 2021.</li>
																	<li>ni&nbsp;= Banyaknya <em>pixel of interest</em>  yang terklasifikasi sebagai "sawah" pada tahun 2013 namun terklasifikasi sebagai "non-sawah" pada tahun 2021 di suatu desa ke-i.</li>
																	<li>Ni&nbsp;= Banyaknya <em>pixel of interest</em>  yang terklasifikasi sebagai "sawah" pada tahun 2013 di suatu desa ke-i.</li>
																	<li>t2&nbsp;= Tahun akhir (2021)</li>
																	<li>t1&nbsp;= Tahun awal (2013)</li>
																</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselKajian2" role="button" data-bs-slide="prev">
										<span><i class="carousel-control-prev-icon" aria-hidden="true"></i></span>
										<span class="visually-hidden">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselKajian2" role="button" data-bs-slide="next">
										<span><i class="carousel-control-next-icon" aria-hidden="true"></i></span>
										<span class="visually-hidden">Next</span>
									</a>
							</div>
									
							</div>
                	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="eighthSec" class="offset-header">
		<div class="container-fluid px-sm-5 px-3 pb-5 mt-0">
			<div class="row justify-content-center mb-3 mt-0">
				<img class="orn img-fluid mx-auto d-block" src="../../img/landing_page/riset2/ornamen1.png" alt="Ornamen">
			</div>
			<div class="row justify-content-center eighth mb-0">
				<div class="text-center" data-aos="fade-up" data-aos-duration="1000">
					<h1 class="headline">Jumlah Responden dan Titik <br>Sampel <em>Ground Check</em></h1>
					<div class="line pt-2"></div>
				</div>
			</div>

			<div class="row justify-content-center mb-3 py-2">
			<div class="col-lg-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
					<div class="box">
						<p class="parag text-justify"><strong><span class="stat-count">900</span></strong><br></p>
						<br>
						<p class="parag1 text-justify">Responden</p>
					</div>
				</div>
				<div class="col-lg-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
					<div class="box">
						<p class="parag text-justify"><strong><span class="stat-count">1800</span></strong><br></p>
						<br>
						<p class="parag1 text-justify">Titik Sampel</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="ninthSec" class="offset-header">
		<div class="row" style="background-color: #f7f5f9 ;">
				<div class="col-12" data-aos="fade-up" data-aos-duration="1000">
					<h1 class="headline text-center">Hasil Penelitian</h1>
					<div class="line pt-2"></div>
				</div>
		</div>
		<div class="container-fluid px-sm-5 px-5 pb-0 mb-5 mt-1">
			<div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
				<div class="col-md-12 px-sm-3 px-3">
				<img class="imgRl text-start" src="./../img/landing_page/riset2/RL3.png" alt="" style="width: 15vw; height: 8vh; position: absolute; border-top-left-radius: 27px;">
					<div class="content2">
						<h3 class="dim ">Infografis</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="card mx-3 mx-lg-0 p-1 p-md-3 my-3 my-lg-0 py-4 order-1 gambar">
									<div class="d-flex justify-content-between">
										<h6 class="card-title text-center"><strong>Kajian 1</strong></h6>
										<a id="download_image" style="color: black;" href="<?= base_url('../../img/landing_page/riset2/Infografis Kajian 1.png') ?>" download><i class="fas fa-download hover download" style="font-size: 18px;"></i></a>
									</div>
									<div id="infografis-kajian1"><img src="<?= base_url('../../img/landing_page/riset2/Infografis Kajian 1.png') ?>" class="w-100 h-100" alt="Infografis Kajian 1"></div>
								</div>
							</div>	
							<div class="col-md-6">
								<div class="card mx-3 mx-lg-0 p-1 p-md-3 my-3 my-lg-0 py-4 order-1 gambar">
									<div class="d-flex justify-content-between">
										<h6 class="card-title text-center"><strong>Kajian 2</strong></h6>
										<a id="download_image" style="color: black;" href="<?= base_url('../../img/landing_page/riset2/Infografis Kajian 2.png') ?>" download><i class="fas fa-download hover download" style="font-size: 18px;"></i></a>
									</div>	
									<img src="<?= base_url('../../img/landing_page/riset2/Infografis Kajian 2.png') ?>" class="w-100 h-100" alt="Infografis Kajian">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</section>

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
function count($this) {
  var current = parseInt($this.html(), 10);
  current = current + 1;
  $this.html(++current);
  if (current > $this.data('count')) {
    $this.html($this.data('count'));
  } else {
    setTimeout(function() {
      count($this)
    }, 1);
  }
}

$(".stat-count").each(function() {
  $(this).data('count', parseInt($(this).html(), 10));
  $(this).html('0');
  count($(this));
});

</script>

<script>
function toDataURL(url) {
    return fetch(url).then((response) => {
        return response.blob();
    }).then(blob => {
        return URL.createObjectURL(blob);
    });
};

function download() {
	const a = document.createElement("a");
	a.href = await toDataURL("");
	a.download = "";
	document.body.appendChild(a);
	a.click();
	document.body.removeChild(a);
};
</script>
<!-- Tambahkan Javascript jika diperlukan -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<?= $this->endSection() ?>
