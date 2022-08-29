<div id="pagepiling" class="hidden-xs">
	<div class="pill-inner-xx ">
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
										<strong>Konsultasi Online</strong> <br> Senin - Jumat. <a href="/link" class="line">Buat Janji</a> <br>
										<strong>Konsultasi Tatap Muka</strong> <br> Senin Rabu Jumat. <a href="/link" class="line">Buat Janji</a>
									</p>
									<div class="bg-gray pb-0">
										
										<p class="c-black">Menara Cakrawala 12th FL/1205A <br>Thamrin Jakarta Pusat 10340 <br><a href="/link" class="line">Google Maps</a>
										</p>
										
										<p class="c-black">
											Ph/WA: <a href="/link" class="line">0811-899-895</a> <br>
											E: <a href="/link" class="line">info@sindikat.co.id</a></p>
									</div>
								</header>

							</div>
							<div class="col-lg-4 col-lg-offset-4 right ">
								<h3 class="uppercase bg-green mb-3 uppercase">Bertanya</h3>
								<form class="contact-form login-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="{{route('hub.kami')}}" novalidate="novalidate">
									@csrf()
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
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
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
											<div class="form-group label-floating is-empty">
												<label class="input-label control-label">Email: <abbr class="required" title="required">*</abbr></label>
												<input name="email" class="form-control input--squared" type="email" value="" required="">
											<span class="material-input"></span></div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
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
	</div>
</div>
