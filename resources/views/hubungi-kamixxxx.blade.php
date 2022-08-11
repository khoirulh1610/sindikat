@extends('layouts.app')

@section('content')

<!-- content here start -->

<div id="pagepiling" class="hidden-xs">
	<div class="pill-inner ">
		<div id="cover-text" class="slide cover-slide pp-easing hidden-xs hidden-sm">
			<div class="contents-inner" style="text-align:center">
				<h1 class="bg-green">Hubungi Kami</h1>
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
							<div class="col-lg-4 left">
								<header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
									<h3 class="uppercase bg-green mb-3 uppercase">Konsultasi</h3>
									<p class="bg-gray">
										<strong>Konsultasi Online</strong> <br> Senin - Jumat. <a href="#" class="line">Buat Janji</a> <br>
										<strong>Konsultasi Tatap Muka</strong> <br> Senin Rabu Jumat. <a href="#" class="line">Buat Janji</a>
									</p>
									<div class="bg-gray pb-0">
										
										<p class="c-black">Menara Cakrawala 12th FL/1205A <br>Thamrin Jakarta Pusat 10340 <br><a href="#" class="line">Google Maps</a>
										</p>
										
										<p class="c-black">
											Ph/WA: <a href="#" class="line">0811-899-895</a> <br>
											E: <a href="#" class="line">info@sindikat.co.id</a></p>
									</div>
								</header>

							</div>
							<div class="col-lg-4 col-lg-offset-4 right ">
								<h3 class="uppercase bg-green mb-3 uppercase">Bertanya</h3>
								<form class="contact-form login-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="modules/forms/submit.php" novalidate="novalidate">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group label-floating is-empty">
												<label class="input-label control-label">Tulis Pesan: <abbr class="required" title="required">*</abbr></label>
												<textarea name="message" class="form-control input--squared height-140" placeholder="" required=""></textarea>
											<span class="material-input"></span></div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group label-floating">
												<label class="input-label control-label">Nama: <abbr class="required" title="required">*</abbr></label>
												<input name="name" class="form-control input--squared" type="text" value="" required="">
											<span class="material-input"></span></div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group label-floating">
												<label class="input-label control-label">HP: <abbr class="required" title="required">*</abbr></label>
												<input name="phone" class="form-control input--squared" type="number" value="" required="">
											<span class="material-input"></span></div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group label-floating is-empty">
												<label class="input-label control-label">Email: <abbr class="required" title="required">*</abbr></label>
												<input name="email" class="form-control input--squared" type="email" value="" required="">
											<span class="material-input"></span></div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<button class="btn--medium full-width bg-blue text-white no-border-radius">Kirim</button>
										</div>

									</div>
								</form>
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
		
<!-- content end -->

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