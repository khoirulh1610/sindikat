@extends('layouts.app')

@section('content')
<!-- view desktop -->
<div id="pagepiling" class="hidden-xs">
	<div class="pill-inner ">
		<div id="cover-text" class="slide cover-slide pp-easing hidden-xs hidden-sm">
			<div class="contents-inner" style="text-align:center">
				<h1 class="bg-green">Jasa Legalitas <br> Terpercaya</h1>
				<br>
				<p class="text-white mt-4 bounce"><strong>Scroll Down</strong></p>
			</div>
		</div>
		<div class="me-intro hidden-xs hidden-sm"><div class="me-block"><img src="/assets/img/orang3.png"></div></div>
		<div class="section hidden-xs hidden-sm" id="section1"></div>
		<div class="section" id="section2">
			<div class="intro" id="sindikat">
				<div class="intro-inner mt-xs-5">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 left">
								<header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
									<h2 class="uppercase bg-gray mb-3 uppercase">Spesialis Jasa Legalitas</h2>
									<div class="heading-text mb-3 hidden-xs hidden-sm"><strong>Kenapa kami spesial?</strong></div>
									<p class="bg-gray mb-3">Sindikat adalah portal legalitas bagi pelaku usaha yang memberikan <span class="istilah"><a href="#siasat">siasat<sup>[1]</sup></a> </span> dan  <span class="istilah"><a href="#layanan-legalitas">layanan legalitas<sup>[2]</sup></a></span> yang terpercaya.</p>
								</header>

							</div>
							<div class="col-lg-4  col-md-4 col-lg-offset-4 col-md-offset-4 right ">
								<ul class="crumina-module crumina-accordion accordion--style2" id="accordion2">
									<li class="accordion-panel">
										<div class="panel-heading">
											<a href="#toggle1" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5 class="uppercase">Badan Usaha</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>

										<div id="toggle1" class="panel-collapse collapse" aria-expanded="false" role="tree">
											<div class="panel-info">
												<a href="/badan-usaha/pt" class="">
													<div class="heading-text link--with-decoration"><strong>PT</strong></div>
												</a><br>
												<a href="/badan-usaha/pt-perorangan" class="">
													<div class="heading-text link--with-decoration"><strong>PT Perorangan</strong></div>
												</a><br>
												<a href="/badan-usaha/cv" class="">
													<div class="heading-text link--with-decoration"><strong>CV</strong></div>
												</a><br>
												<a href="/badan-usaha/pt-pma" class="">
													<div class="heading-text link--with-decoration"><strong>PT PMA</strong></div>
												</a><br>
												<a href="/badan-usaha/firma" class="">
													<div class="heading-text link--with-decoration"><strong>Firma</strong></div>
												</a><br>
												<a href="/badan-usaha/persekutuan-perdata" class="">
													<div class="heading-text link--with-decoration"><strong>Persekutuan Perdata</strong></div>
												</a><br>
												<a href="/badan/perkumpulan" class="">
													<div class="heading-text link--with-decoration"><strong>Perkumpulan</strong></div>
												</a><br>
												<a href="/badan/yayasan" class="">
													<div class="heading-text link--with-decoration"><strong>Yayasan</strong></div>
												</a>
											</div>
										</div>
									</li>

									<li class="accordion-panel">
										<a href="">
											<div class="panel-heading">
												<a href="#toggle2" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
													<span class="title"><h5 class="uppercase">Perizinan</h5></span>
													<span class="icons">
														<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
														<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
													</span>
												</a>
											</div>

											<div id="toggle2" class="panel-collapse collapse" aria-expanded="false" role="tree">
												<div class="panel-info">

													<a href="/izin-alat-kesehatan-alkes" class="">
														<div class="heading-text link--with-decoration"><strong>Izin Alkes</strong></div>
													</a><br>
													<a href="/izin-perbekalan-kesehatan-rumah-tangga-pkrt" class="">
														<div class="heading-text link--with-decoration"><strong>Perbekalan Kesehatan Rumah Tangga</strong></div>
													</a><br>
													<a href="/izin-edar-bpom" class="">
														<div class="heading-text link--with-decoration"><strong>Izin Edar BPOM</strong></div>
													</a><br>
													<a href="/sertifikat-halal-mui" class="">
														<div class="heading-text link--with-decoration"><strong>Sertifikat Halal MUI</strong></div>
													</a><br>
													<a href="/perizinan" class="">
														<div class="heading-text link--with-decoration"><strong>Lihat Semua Perizinan</strong></div>
													</a><br>
												</div>
											</div>
										</a>
									</li>

									<li class="accordion-panel">
										<a href="">
											<div class="panel-heading">
												<a href="#toggle22" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
													<span class="title"><h5 class="uppercase">Peralatan</h5></span>
													<span class="icons">
														<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
														<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
													</span>
												</a>
											</div>

											<div id="toggle22" class="panel-collapse collapse" aria-expanded="false" role="tree">
												<div class="panel-info">
													<a href="/kamus-hukum" class="">
														<div class="heading-text link--with-decoration"><strong>Kamus Hukum IND-ENG</strong></div>
													</a><br>
													<a href="/istilah-hukum" class="">
														<div class="heading-text link--with-decoration"><strong>Kamus Istilah Hukum</strong></div>
													</a><br>
													<a href="/kbli" class="">
														<div class="heading-text link--with-decoration"><strong>KBLI 2020</strong></div>
													</a>
												</div>
											</div>
										</a>
									</li>

									<li class="accordion-panel">
										<a href="/tentang">
											<div class="panel-heading">
												<div class="accordion-heading">
													<span class="title"><h5 class="uppercase">Tentang Kami</h5></span>
												</div>
											</div>
										</a>
									</li>

									<li class="accordion-panel">
										<a href="/siasat">
											<div class="panel-heading">
												<div class="accordion-heading">
													<span class="title"><h5 class="uppercase">Siasat</h5></span>
												</div>
											</div>
										</a>
									</li>

									<li class="accordion-panel">
										<a href="/hubungi-kami">
											<div class="panel-heading">
												<div class="accordion-heading">
													<span class="title"><h5 class="uppercase">Hubungi Kami</h5></span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-opac"></div>
		</div>

		<section class="bg-dark visible-xs">
		<div class="container">
			<div class="cover-slide3 mb60">
				<div class="contents-inner">
					<h2 class="uppercase align-center heading">Mau Konsultasi!</h2>
				</div>
			</div>
			<div class="row medium-padding60 mb60">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="promo-block">
						<div class="promo-content">
							<div class="promo-title text-white">Mau konsultasi dengan <b>konsultan Sindikat</b>?</div>
							<p class="c-white">Segera hubungi nomor handphone pribadi kami.</p>
						</div>
						<a href="tel:+62811899895" class="bg-blue text-white"><i class="fa fa-phone-square"></i>  0811-899-895</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</div>

<!-- view mobile -->
<section class="visible-xs bg-white">
	<div class="page-cover bg-home full60"></div>
		<div class="container">
			<div class="row">
				<div class="cover-slide3">
					<div class="contents-inner contents-inner-judul">
						<h1 class="uppercase align-center heading"> Jasa Legalitas <br> Terpercaya</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="intro" id="sindikat">
			<div class="intro-inner mt-4 mb-5 pb-3">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 left">
							<header class="">
								<h2 class="uppercase bg-gray mb-3 uppercase">Spesialis Jasa Legalitas</h2>
								<div class="heading-text mb-3 hidden-xs hidden-sm"><strong>Kenapa kami spesial?</strong></div>
								<p class="bg-gray mb-3">Sindikat adalah portal legalitas bagi pelaku usaha yang memberikan <span class="istilah"><a href="#siasat">siasat<sup>[1]</sup></a> </span> dan  <span class="istilah"><a href="#layanan-legalitas">layanan legalitas<sup>[2]</sup></a></span> yang terpercaya.</p>
							</header>

						</div>
						<div class="col-lg-4 col-lg-offset-4 right ">
							<h5 class="link--with-decoration uppercase heading mb-3 mt-3"> Pilih Menu</h5>
							<ul class="crumina-module crumina-accordion accordion--style2" id="accordion2">
								<li class="accordion-panel">
									<div class="panel-heading">
										<a href="#togglea1" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
											<span class="title"><h5 class="uppercase">Badan Usaha</h5></span>
											<span class="icons">
												<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
												<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
											</span>
										</a>
									</div>

									<div id="togglea1" class="panel-collapse collapse" aria-expanded="false" role="tree">
										<div class="panel-info">
											<a href="/badan-usaha/pt" class="">
												<div class="heading-text link--with-decoration"><strong>PT</strong></div>
											</a><br>
											<a href="/badan-usaha/pt-perorangan" class="">
												<div class="heading-text link--with-decoration"><strong>PT Perorangan</strong></div>
											</a><br>
											<a href="/badan-usaha/cv" class="">
												<div class="heading-text link--with-decoration"><strong>CV</strong></div>
											</a><br>
											<a href="/badan-usaha/pt-pma" class="">
												<div class="heading-text link--with-decoration"><strong>PT PMA</strong></div>
											</a><br>
											<a href="/badan-usaha/firma" class="">
												<div class="heading-text link--with-decoration"><strong>Firma</strong></div>
											</a><br>
											<a href="/badan-usaha/persekutuan-perdata" class="">
												<div class="heading-text link--with-decoration"><strong>Persekutuan Perdata</strong></div>
											</a><br>
											<a href="/badan/perkumpulan" class="">
												<div class="heading-text link--with-decoration"><strong>Perkumpulan</strong></div>
											</a><br>
											<a href="/badan/yayasan" class="">
												<div class="heading-text link--with-decoration"><strong>Yayasan</strong></div>
											</a>
										</div>
									</div>
								</li>

								<li class="accordion-panel">
									<a href="">
										<div class="panel-heading">
											<a href="#togglea2" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5 class="uppercase">Perizinan</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>

										<div id="togglea2" class="panel-collapse collapse" aria-expanded="false" role="tree">
											<div class="panel-info">

												<a href="/kbli" class="">
													<div class="heading-text link--with-decoration"><strong>Alat Kesehatan</strong></div>
												</a><br>
												<a href="/zonasi" class="">
													<div class="heading-text link--with-decoration"><strong>Perbekalan Kesehatan Rumah Tangga</strong></div>
												</a><br>
												<a href="/kamus-hukum" class="">
													<div class="heading-text link--with-decoration"><strong>Izin Edar BPOM</strong></div>
												</a><br>
												<a href="/kamus-hukum" class="">
													<div class="heading-text link--with-decoration"><strong>Sertifikat Halal MUI</strong></div>
												</a><br>
												<a href="/kamus-hukum" class="">
													<div class="heading-text link--with-decoration"><strong>Lihat Semua Perizinan</strong></div>
												</a><br>
											</div>
										</div>
									</a>
								</li>

								<li class="accordion-panel">
									<a href="">
										<div class="panel-heading">
											<a href="#togglea22" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5 class="uppercase">Peralatan</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>

										<div id="togglea22" class="panel-collapse collapse" aria-expanded="false" role="tree">
											<div class="panel-info">
												<a href="/kamus-hukum" class="">
													<div class="heading-text link--with-decoration"><strong>Kamus Hukum IND-ENG</strong></div>
												</a><br>
												<a href="/istilah-hukum" class="">
													<div class="heading-text link--with-decoration"><strong>Kamus Istilah Hukum</strong></div>
												</a><br>
												<a href="/kbli" class="">
													<div class="heading-text link--with-decoration"><strong>KBLI 2020</strong></div>
												</a>
											</div>
										</div>
									</a>
								</li>

								<li class="accordion-panel">
									<a href="/tentang">
										<div class="panel-heading">
											<div class="accordion-heading">
												<span class="title"><h5 class="uppercase">Tentang Kami</h5></span>
											</div>
										</div>
									</a>
								</li>

								<li class="accordion-panel">
									<a href="/siasat">
										<div class="panel-heading">
											<div class="accordion-heading">
												<span class="title"><h5 class="uppercase">Siasat</h5></span>
											</div>
										</div>
									</a>
								</li>

								<li class="accordion-panel hidden-xs">
									<a href="/hubungi-kami">
										<div class="panel-heading">
											<div class="accordion-heading">
												<span class="title"><h5 class="uppercase">Hubungi Kami</h5></span>
											</div>
										</div>
									</a>
								</li>

								<li class="accordion-panel visible-xs">
									<a href="#site-footer">
										<div class="panel-heading">
											<div class="accordion-heading">
												<span class="title"><h5 class="uppercase">Hubungi Kami</h5></span>
											</div>
										</div>
									</a>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-dark visible-xs">
	<div class="container">
		<div class="cover-slide3 mb60">
			<div class="contents-inner">
				<h2 class="uppercase align-center heading">Mau Konsultasi!</h2>
			</div>
		</div>
		<div class="row medium-padding60 mb60">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="promo-block">
					<div class="promo-content">
						<div class="promo-title text-white">Mau konsultasi dengan <b>konsultan Sindikat</b>?</div>
						<p class="c-white">Segera hubungi nomor handphone pribadi kami.</p>
					</div>
					<a href="tel:+62811899895" class="bg-blue text-white"><i class="fa fa-phone-square"></i>  0811-899-895</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="siasat" class="modalDialog">
	<div>
		<p><strong>siasat</strong> /si·a·sat/ </p>
		<p>(1) periksa; pemeriksaan yang teliti; penyelidikan:</p>
		<p>(2) menggunakan <strong>siasat</strong> (dengan bijaksana, muslihat, taktik); bertindak atau bekerja dengan cara baik;</p>
		@include('layouts.tutup')
	</div>
</div>

<div id="layanan-legalitas" class="modalDialog">
	<div>
		<p><strong>Layanan Legalitas</strong> </p>
		<p>Sindikat memberikan layanan badan usaha dan perizinan</p>
		@include('layouts.tutup')
	</div>
</div>

<!-- mobile end -->
@endsection