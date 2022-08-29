@extends('layouts.app')

@section('content')

<div id="pagepiling" class="hidden-xs">
	<div class="pill-inner ">
		<div id="cover-text" class="slide cover-slide pp-easing hidden-xs hidden-sm">
			<div class="contents-inner" style="text-align:center">
				<h1 class="bg-green">Kumpulan <br> Link</h1>
				<br>
				<p class="text-white mt-4 bounce"><strong>Scroll Down</strong></p>
			</div>
		</div>
		<div class="me-intro hidden-xs hidden-sm"><div class="me-block"><img src="/assets/img/orang2.png"></div></div>
		<div class="section hidden-xs hidden-sm" id="section1"></div>
		<div class="section" id="section2">
			<div class="intro" id="sindikat">
				<div class="intro-inner mt-xs-5">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 left">
								<div class="heading-text mb-3"><strong>Saluran Komunikasi:</strong></div>
                                    <a href="https://api.whatsapp.com/send?phone=62811899895&text=Hi%20Sindikat%F0%9F%95%B5%EF%B8%8F%20saya%20sedang%20butuh%20layanan%20">
                                        <p class="bg-green text-dark">Chat Whatsapp</p>
                                    </a>
                                    <a href="tel:+62811899895">
                                        <p class="bg-green text-dark">Telpon Langsung</p>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?phone=62811899895&text=Hi%20Sindikat%F0%9F%95%B5%EF%B8%8F%20saya%20mau%20konsultasi%20online%20">
                                        <p class="bg-green text-dark">Buat Janji Konsultasi Online</p>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?phone=62811899895&text=Hi%20Sindikat%F0%9F%95%B5%EF%B8%8F%20saya%20mau%20konsultasi%20tatap%20muka%20">
                                        <p class="bg-green text-dark">Buat Janji Konsultasi Tatap Muka</p>
                                    </a>
									<a href="https://g.page/r/CSA8M5Di8EfVEAE">
                                        <p class="bg-green text-dark">Google Maps Kantor</p>
                                    </a>
									<a href="/formulir-online">
                                        <p class="bg-green text-dark">Formulir Online</p>
                                    </a>
							</div>
							<div class="col-lg-4 col-lg-offset-4 right ">
								<h3 class="uppercase bg-green mb-3 uppercase">Bertanya </h3>
								<form class="contact-form login-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="{{route('hub.kami')}}" novalidate="novalidate">
									@csrf()
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group label-floating is-empty">
												<label class="input-label control-label">Tulis Pesan: <abbr class="required" title="required">*</abbr></label>
												<textarea name="message" class="form-control input--squared height-140" placeholder="" required=""></textarea>
											<span class="material-input"></span></div>
										</div>
										
									</div>
									<div class="row mt-2">
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
									<div class="row mt-3">
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

<!-- view mobile -->
<div class="main-content-wrapper">
<section class="visible-xs">
	<div class="page-cover bg-home full60"></div>
		<div class="container">
			<div class="row">
				<div class="cover-slide3">
					<div class="contents-inner contents-inner-judul">
						<h1 class="uppercase align-center heading"> Kumpulan Link</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="intro" id="sindikat">
			<div class="intro-inner mt-4 mb-5 pb-3">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 left">
							<div class="heading-text mb-3"><strong>Saluran Komunikasi:</strong></div>
								<a href="https://api.whatsapp.com/send?phone=62811899895&text=Hi%20Sindikat%F0%9F%95%B5%EF%B8%8F%20saya%20sedang%20butuh%20layanan%20">
									<p class="bg-green text-dark">Chat Whatsapp</p>
								</a>
								<a href="tel:+62811899895">
									<p class="bg-green text-dark">Telpon Langsung</p>
								</a>
								<a href="https://api.whatsapp.com/send?phone=62811899895&text=Hi%20Sindikat%F0%9F%95%B5%EF%B8%8F%20saya%20mau%20konsultasi%20online%20">
									<p class="bg-green text-dark">Buat Janji Konsultasi Online</p>
								</a>
								<a href="https://api.whatsapp.com/send?phone=62811899895&text=Hi%20Sindikat%F0%9F%95%B5%EF%B8%8F%20saya%20mau%20konsultasi%20tatap%20muka%20">
									<p class="bg-green text-dark">Buat Janji Konsultasi Tatap Muka</p>
								</a>
								<a href="https://g.page/r/CSA8M5Di8EfVEAE">
                                        <p class="bg-green text-dark">Google Maps Kantor</p>
                                    </a>
								<a href="/formulir-online">
									<p class="bg-green text-dark">Formulir Online</p>
								</a>
						</div>
						<div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 right ">
							<div class="heading-text mb-3"><strong>Formulir Online:</strong></div>
								<a href="/formulir-online">
									<p class="bg-green text-dark">Formulir PT / PMA</p>
								</a>
								<a href="/formulir-online">
									<p class="bg-green text-dark">Formulir PT Perorangan</p>
								</a>
								<a href="/formulir-online">
									<p class="bg-green text-dark">Formulir CV</p>
								</a>
								<a href="/formulir-online">
									<p class="bg-green text-dark">Formulir Firma / Persekutuan Perdata</p>
								</a>
								<a href="/formulir-online">
									<p class="bg-green text-dark">Formulir Perkumpulan / Yayasan</p>
								</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    
</div>



@endsection