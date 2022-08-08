@extends('layouts.app')

@section('content')
<div id="pagepiling">
	<div class="pill-inner ">
		<div id="cover-text" class="slide cover-slide pp-easing hidden-xs">
			<div class="contents-inner" style="text-align:center">
				<h1 class="">Jasa Legalitas <br> Terpercaya</h1>
				<br>
				<p class="text-white mt-4 bounce"><strong>Scroll Down</strong></p>
			</div>
		</div>
		<div class="me-intro hidden-xs"><div class="me-block"><img src="/assets/img/orang3.png"></div></div>
		<div class="section hidden-xs" id="section1"></div>
		<div class="section" id="section2">
			<div class="intro" id="sindikat">
				<div class="intro-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 left">
								<header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
									<h2 class="uppercase link--with-decoration mb30 uppercase">Spesialis Jasa Legalitas</h2>
									<div class="heading-text mb30"><strong>Kenapa kami spesial?</strong></div>
									<p>Sindikat adalah portal bisnis bagi pelaku usaha yang memberikan siasat dan layanan legalitas untuk pengembangan usaha kamu.</p>
								</header>

							</div>
							<div class="col-lg-4 col-lg-offset-4 right ">
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
													<div class="heading-text link--with-decoration"><strong>Pembuatan PT</strong></div>
												</a>
												<a href="/badan-usaha/pt-perorangan" class="">
													<div class="heading-text link--with-decoration"><strong>Pembuatan PT Perorangan</strong></div>
												</a>
												<a href="/badan-usaha/cv" class="">
													<div class="heading-text link--with-decoration"><strong>Pendirian CV</strong></div>
												</a>
												<a href="/badan-usaha/pt-pma" class="">
													<div class="heading-text link--with-decoration"><strong>Pembuatan PT PMA</strong></div>
												</a>
												<a href="/badan-usaha/firma" class="">
													<div class="heading-text link--with-decoration"><strong>Pendirian Firma</strong></div>
												</a>
												<a href="/badan-usaha/persekutuan-perdata" class="">
													<div class="heading-text link--with-decoration"><strong>Pendirian Persekutuan Perdata</strong></div>
												</a>
												<a href="/badan-usaha/perkumpulan" class="">
													<div class="heading-text link--with-decoration"><strong>Pendirian Perkumpulan</strong></div>
												</a>
												<a href="/badan-usaha/yayasan" class="">
													<div class="heading-text link--with-decoration"><strong>Pendirian Yayasan</strong></div>
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

													<a href="/kbli" class="">
														<div class="heading-text link--with-decoration"><strong>KBLI 2017</strong></div>
													</a><br>
													<a href="/zonasi" class="">
														<div class="heading-text link--with-decoration"><strong>Cek Zonasi</strong></div>
													</a><br>
													<a href="/kamus-hukum" class="">
														<div class="heading-text link--with-decoration"><strong>Kamus Hukum</strong></div>
													</a>

												</div>
											</div>
										</a>
									</li>

									<li class="accordion-panel">
										<a href="/tentang">
											<div class="panel-heading">
												<div class="accordion-heading">
													<span class="title"><h5 class="uppercase">Tentang</h5></span>
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
										<a href="/Kontak">
											<div class="panel-heading">
												<div class="accordion-heading">
													<span class="title"><h5 class="uppercase">Kontak</h5></span>
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
						<a href="tel:+62811899895" class="btn btn--x-large btn--primary btn--transparent btn--hover-decoration full-width text-white"><i class="fa fa-phone-square"></i>  0811-899-895</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</div>
	{{-- <div>
		<div class="me-intro-samping fixed hidden-xs">
			<div class="me-block animated slideInRight slow delay-15">
					<img src="/assets/img/c-samping-c.png" alt="whatsapp button sindikat">
			</div>
		</div>
		<div class="me-intro-get fixed hidden-xs">
			<div class="me-block animated slideInRight slow delay-16">
				<a href="https://api.whatsapp.com/send?phone=62811899895&amp;text=Hi%20*Sindikat*%20d%2Fh%2C%20saya%20perlu%20bantuan">
					<img src="/assets/img/get-in-res.png" alt="whatsapp button sindikat">
				</a>
			</div>
		</div>
	</div> --}}

	<div>
		<div class="me-intro-bawah-wa fixed visible-xs">
			<div class="me-block animated slideInUp slow delay-15">
				<a href="https://api.whatsapp.com/send?phone=62811899895&amp;text=Hi%20*Sindikat*%20m%2Fh%2C%20saya%20perlu%20bantuan">
					<img src="/assets/img/c-wa-.png" alt="whatsapp button sindikat">
				</a>
			</div>
		</div>
		<div class="me-intro-bawah-m fixed visible-xs">
			<div class="me-block animated slideInUp slow delay-15">
				<a href="https://api.whatsapp.com/send?phone=62811899895&amp;text=Hi%20*Sindikat*%20m%2Fh%2C%20saya%20perlu%20bantuan">
					<img src="/assets/img/c-bawah.png" alt="whatsapp button sindikat">
				</a>
			</div>
		</div>
	</div>
@endsection