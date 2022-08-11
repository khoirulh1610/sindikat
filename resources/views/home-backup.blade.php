@extends('layouts.app')

@section('content')
<div id="pagepiling">
	<div class="pill-inner">
		<div id="cover-text" class="slide cover-slide pp-easing">
			<div class="contents-inner" style="text-align:center">
				<h1 class="">Jasa Legalitas <br> Terpercaya</h1>
				<p><span class="text-white mt-4">Scroll Down</span></p>
			</div>
		</div>
		<div class="me-intro hidden-xs"><div class="me-block"><img src="/assets/img/orang3.png"></div></div>
		<div class="section" id="section1"></div>
		<div class="section" id="section2">
			<div class="intro" id="sindikat">
				<div class="intro-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 left">
								<header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
									<h2 class="uppercase link--with-decoration mb30">Portal Bisnis &amp; Usaha</h2>
									<div class="heading-text mb30"><strong>Kenapa kami spesial?</strong></div>
									<p>Sindikat adalah portal bisnis bagi pengusaha pemula dengan memberikan informasi, siasat dan layanan untuk pengembangan usaha Anda. <strong>Intinya kami membantu semua urusan bisnis Anda.</strong></p>
								</header>

							</div>
							<div class="col-lg-4 col-lg-offset-4 right ">
								<ul class="crumina-module crumina-accordion accordion--style2" id="accordion2">
									<li class="accordion-panel">
										<div class="panel-heading">
											<a href="#toggle2" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5>PANDUAN BISNIS</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>

										<div id="toggle2" class="panel-collapse collapse" aria-expanded="false" role="tree">
											<div class="panel-info">
												<a href="/panduan/perseroan-terbatas" class="">
													<div class="heading-text link--with-decoration"><strong>Badan Usaha PT</strong></div>
												</a><br>
												<a href="/panduan/cv-comanditer-venotschaap" class="">
													<div class="heading-text link--with-decoration"><strong>Badan Usaha CV</strong></div>
												</a><br>
												<a href="/panduan/pajak" class="">
													<div class="heading-text link--with-decoration"><strong>Perpajakan</strong></div>
												</a><br>
												<a href="/panduan/pembukuan" class="">
													<div class="heading-text link--with-decoration"><strong>Pembukuan</strong></div>
												</a><br>
												<a href="/panduan/gaji" class="">
													<div class="heading-text link--with-decoration"><strong>Gaji &amp; UMR</strong></div>
												</a><br>
												<a href="/panduan/merek" class="">
													<div class="heading-text link--with-decoration"><strong>Perlindungan Merek</strong></div>
												</a><br>
												<a href="/panduan/jaminan-kesehatan" class="">
													<div class="heading-text link--with-decoration"><strong>Jaminan Kesehatan</strong></div>
												</a><br>
												<a href="/panduan/jaminan-tenaga-kerja" class="">
													<div class="heading-text link--with-decoration"><strong>Jaminan Tenaga Kerja</strong></div>
												</a><br>
												<a href="/panduan/oss-nib" class="">
													<div class="heading-text link--with-decoration"><strong>OSS &amp; NIB</strong></div>
												</a>
											</div>
										</div>
									</li>

									<li class="accordion-panel">
										<div class="panel-heading">
											<a href="#toggle3" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5>CHANNEL KAMI</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>

										<div id="toggle3" class="panel-collapse collapse" aria-expanded="false" role="tree">
											<div class="panel-info">

												<span class="align-left"><strong>Bincang seputar bisnis dan informasi terkait hukum, keuangan dan perpajakan</strong></span>
												<img src="/assets/img/spotify1-.png" class="mt30" alt="spotify sindikat">
												<img src="/assets/img/yt-c-.png" class="" alt="youtube sindikat">

												<a href="/siaran" class="">
													<div class="heading-text link--with-decoration"><strong>Lihat siaran</strong></div>
												</a>
											</div>
										</div>
									</li>

									<li class="accordion-panel">
										<div class="panel-heading">
											<a href="#toggle4" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5>LAYANAN</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>

										<div id="toggle4" class="panel-collapse collapse" aria-expanded="false" role="tree">
											<div class="panel-info">
												<a href="/jasa-lapor-pajak" class="">
													<div class="heading-text link--with-decoration"><strong> Jasa Lapor Pajak</strong></div>
												</a><br>
												<a href="/jasa-akuntansi" class="">
													<div class="heading-text link--with-decoration"><strong> Jasa Akuntansi</strong></div>
												</a><br>

												<a href="/pembuatan/pembuatan-perseroan-terbatas-pt" class="">
													<div class="heading-text link--with-decoration"><strong>Jasa Pendirian PT</strong></div>
												</a><br>
												<a href="/pembuatan/pembuatan-cv" class="">
													<div class="heading-text link--with-decoration"><strong> Jasa Pendirian CV</strong></div>
												</a><br>

												<a href="/pt-pma-foreign-owned-company" class="">
													<div class="heading-text link--with-decoration"><strong>PT PMA</strong></div>
												</a><br>
												<a href="/perizinan" class="">
													<div class="heading-text link--with-decoration"><strong>Pengurusan Izin</strong></div>
												</a><br>
												<a href="/virtual-office" class="">
													<div class="heading-text link--with-decoration"><strong>Virtual Office</strong></div>
												</a>
											</div>
										</div>
									</li>

									<li class="accordion-panel">
										<div class="panel-heading">
											<a href="#toggle5" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5>TOOLS</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>

										<div id="toggle5" class="panel-collapse collapse" aria-expanded="false" role="tree">
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
									</li>

									<li class="accordion-panel">
										<div class="panel-heading">
											<a href="#toggle6" class="accordion-heading collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
												<span class="title"><h5>BLOG</h5></span>
												<span class="icons">
													<svg class="woox-icon icon-plus-sign"><use xlink:href="#icon-plus-sign"></use></svg>
													<svg class="woox-icon active icon-min"><use xlink:href="#icon-min"></use></svg>
												</span>
											</a>
										</div>
										<div id="toggle6" class="panel-collapse collapse" aria-expanded="false" role="tree">
											<div class="panel-info">

												<a href="/blog" class="">
													<div class="heading-text link--with-decoration"><strong>Baca Blog Kami</strong></div>
												</a><br>
											</div>
										</div>
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