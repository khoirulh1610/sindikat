@extends('layouts.app')

@section('content')

<!-- content here start -->

<div class="main-content-wrapper">
	<section>
		<div class="container">
			<div class="row medium-padding60 mb60 mt-3">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-6 left">
							<div class="content">
								<h1 class="uppercase bg-gray mb-3 uppercase">Penawaran</h1>
								<!-- pilih layanan start -->
								<p class="link--with-decoration">Pilih Layanan</p>
                                <p class="">
                                    <select class="mb-4" data-dropdown-css-class="woox--select-bordered-dropdown" data-minimum-results-for-search="Infinity">
                                        <option data-display="Choose country">Pilih Layanan</option>
                                        <option value="1">PT</option>
                                        <option value="2">PT Perorangan</option>
                                        <option value="3">PT PMA</option>
                                        <option value="4">CV</option>
                                        <option value="5">PT Perorangan</option>
                                        <option value="6">PT PMA</option>
                                    </select>
                                    <select class="mb-1" data-dropdown-css-class="woox--select-bordered-dropdown" data-minimum-results-for-search="Infinity">
                                        <option data-display="Choose country">Detail Layanan</option>
                                        <option value="1">Pendirian PT</option>
                                        <option value="2">PT + Izin</option>
                                        <option value="3">PT + Izin + VO</option>
                                        <option value="4">PT + Izin + VO + PKP</option>
                                    </select>
                                </p>
                                <!-- pilih layanan end -->
                                <!-- deskripsi start -->
                                <p class="link--with-decoration">Deskripsi</p>
                                <p class="">Termasuk: <strong>Akta Notaris, SK Menteri, NPWP, SKT Pajak, NIB, Izin Usaha (OSS & NIB) termasuk sewa alamat kantor di virtual office Jakarta selama 1 tahun.</strong></p>
                                <!-- deskripsi end -->
                                 <!-- harga start -->
                                 <p class="link--with-decoration">Harga</p>
                                <h4 class=""><strong>Rp 8.500.000</strong></h4>
                                <!-- harga end -->
                                <hr class="divider divider--style16 m-4">
                                <!-- data pemesan start -->
                                <p class="link--with-decoration">Kirim Penawaran Kepada:</p>
                                <div class="row">
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
                                <!-- data pemesan end -->
							</div>
						</div>
						<div class="col-lg-6 right">
							<div class="content">
								<div class="align-center hidden-xs">
									<img src="/assets/img/poster-pt-izin-vo.jpg" class="w-75 bg-gray mt-0" alt="sindikat 4" >
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@include('layouts.peralatan')

@include('layouts.bertanya')


@endsection