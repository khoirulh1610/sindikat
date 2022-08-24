<!DOCTYPE html>
<html lang="id"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="sLTneSzPKUDiXXEQuQl2oblIhIMfidJinBlUqL1j">

	<!-- HTML Meta Tags -->
	<title>{{$title}}</title>
	<meta name="description" content="{{$description}}">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="https://sindikat.co.id">
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$title}}">
	<meta property="og:description" content="{{$description}}">
	<meta property="og:image" content="https://sindikat.co.id/{{$image}}">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="sindikat.co.id">
	<meta property="twitter:url" content="https://sindikat.co.id">
	<meta name="twitter:title" content="{{$title}}">
	<meta name="twitter:description" content="{{$description}}">
	<meta name="twitter:image" content="https://sindikat.co.id/{{$image}}">

	<!-- Meta -->
	<meta name="google-site-verification" content="#">
	<link rel="stylesheet" type="text/css" href="/assets/css/theme-kamis.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/blocks3.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/widgets.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css" integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" type="text/css" href="/assets/css/jquery.pagepiling.min.css" media="all"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.min.css" integrity="sha512-W9OWS8dgpQBw5Hb+tbMto1BMsHvYOXT/AFBGvASCPUJleaEdpOAN5lzgj9RrTbo3YrlR+m9xdOBccp8F+SFyQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css">
	<!-- <link rel="stylesheet" href="/assets/css/css_custom.css"> -->

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
	<link rel="manifest" href="/assets/img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/assets/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	@yield('css')
</head>

<div class="loading">
	<div class="loading-text">
		<span class="loading-text-words">S</span>
		<span class="loading-text-words">I</span>
		<span class="loading-text-words">N</span>
		<span class="loading-text-words">D</span>
		<span class="loading-text-words">I</span>
		<span class="loading-text-words">K</span>
		<span class="loading-text-words">A</span>
		<span class="loading-text-words">T</span>
	</div>
</div>


<body class="crumina-grid custom-theme">
<!-- Header -->
<header class="header">
	<div class="container">
		<div class="header-content-wrapper">
			<a href="/" class="site-logo">
				<h3 class="link--with-decoration textshadow1">SINDIKAT</h3>
			</a>
			<a href="#" class="open-main-menu js-open-aside">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
	</div>
</header>



<!-- Overlay Menu -->
<div class="overlay-menu-wrap overlay-menu--style1" id="overlay-menu">
	<a class="popup-close js-open-aside" href="#">
		<svg class="woox-icon icon-close"><use xlink:href="#icon-close"></use></svg>
	</a>
	<div class="perfect-scroll">
		<nav class="overlay-menu">
		<ul class="overlay-menu-list align-left">
		<p><strong>(klik pada menu)</strong></p>
			<li class="overlay-menu-item c-grey-light">
				
				<a href="#"><strong>Badan Usaha</strong></a>
				<ul class="sub-menu">
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan-usaha/pt" class="full-width align-left bg-green">PT</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan-usaha/pt-perorangan" class="full-width align-left bg-green">PT Perorangan</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan-usaha/cv" class="full-width align-left bg-green">CV</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan-usaha/pt-pma" class="full-width align-left bg-green">PT PMA</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan-usaha/firma" class="full-width align-left bg-green">Firma</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan-usaha/firma" class="full-width align-left bg-green">Firma</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan-usaha/persekutuan-perdata" class="full-width align-left bg-green">Persek. Perdata</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan/perkumpulan" class="full-width align-left bg-green">Perkumpulan</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/badan/perkumpulan" class="full-width align-left bg-green">Yayasan</a>
					</li>
				</ul>
			</li>
			<li class="overlay-menu-item c-grey-light">
				<a href="#"><strong>Perizinan</strong></a>
				<ul class="sub-menu">
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/izin-alat-kesehatan-alkes" class="full-width align-left bg-green">Izin Alkes</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/izin-perbekalan-kesehatan-rumah-tangga-pkrt" class="full-width align-left bg-green">Izin PKRT</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/izin-edar-bpom" class="full-width align-left bg-green">Izin Edar BPOM</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/sertifikat-halal-mui" class="full-width align-left bg-green">Sertifikat Halal MUI</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/perizinan" class="full-width align-left bg-green">Lihat Semua Izin</a>
					</li>
				</ul>
			</li>
			<li class="overlay-menu-item c-grey-light">
				<a href="#"><strong>Peralatan</strong></a>
				<ul class="sub-menu">
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/kamus-hukum" class="full-width align-left bg-green">Kamus Hukum IND-ENG</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/istilah-hukum" class="full-width align-left bg-green">Kamus Istilah Hukum</a>
					</li>
					<li class="overlay-menu-item c-grey-light mb-0">
						<a href="/kbli" class="full-width align-left bg-green">KBLI 2020</a>
					</li>
				</ul>
			</li>
			<li class="overlay-menu-item c-grey-light">
				<a href="/tentang-kami"><strong>Tentang Kami</strong></a>
			</li>
			<li class="overlay-menu-item c-grey-light">
				<a href="/siasat"><strong>Siasat</strong></a>
			</li>
			<li class="overlay-menu-item c-grey-light">
				<a href="/hubungi-kami"><strong>Hubungi Kami</strong></a>
			</li>
			<li class="overlay-menu-item mt-3"><a href="/penawaran" class="bg-blue text-white display-inline p-2"><strong>Minta Penawaran</strong></a>
			</li>

		</ul>

	</nav>
	</div>
</div>
<!-- ... Overlay Menu -->


@yield('content')

@include('hubungi-kami')

<footer id="paling-bawah" class="hidden-xs border-top">
	<div class="container">
		<div class="no-padding mt-1">
			<!-- <div class="masthead full60 hidden-xs" style="background-image:url(https://webster.divasoft.net/assets/img/bg_me4.png)!important;bottom:0;opacity:.4;position:absolute;top:0;left:0;width:100%;background-size:auto 120%;"></div> -->
			<div class="row">
				<div class="col-lg-5 col-md-8 col-sm-12 col-xs-12">
					<div class="copyright-wrapper">
							<div>
								<span>PT Biro Sindikat Bersaudara | 2015 - 2022</span>
								<span><a href="/syarat-ketentuan" class="c-black line"><br>Syarat & Ketentuan</a> | <a href="/kebijakan-privasi" class="c-black line">Kebijakan Privasi</a> </span>
							</div>
						</div>
				</div>
				<div class="col-lg-7 col-md-4 col-sm-12 col-xs-12 align-right">
					<div class="">
							<div>
							<div class="col-xs-12">
							<span>Kami Menerima Pembayaran <br> </span>
							<span><img src="/assets/img/payment-sindikat.png" class="w-25" alt="pembayaran sindikat"></span>
						</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<footer id="site-footer" class="home-footer visible-xs">
	<div class="container">
	<div class="cover-slide3 mb60">
				<div class="contents-inner">
					<h2 class="uppercase align-center heading">Hubungi Kami</h2>
				</div>
			</div>
		<div class="footer visible-xs">
			
			<div class="sub-footer no-padding">
				<div class="row">
					
					<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
						<div class="widget w-contacts">
							<!-- <h4 class="mb30 uppercase link--with-decoration mt30">kontak</h4> -->
							<strong>
							<div class="bg-gray pb-0 mb-4">
								<p class="c-black">Menara Cakrawala 12th FL/1205A <br>Thamrin Jakarta Pusat 10340 <br><a href="#" class="line">Google Maps</a>
								</p>
								
								<p class="c-black">
									Ph/WA: <a href="#" class="line">0811-899-895</a> <br>
									E: <a href="#" class="line">info@sindikat.co.id</a></p>
							</div>
							</strong>
						</div>
						<div class="copyright-wrapper">
								<div>
									<span class="c-black">PT Biro Sindikat Bersaudara </span>
									<span><a href="/syarat-ketentuan" class="line">Syarat & Ketentuan</a> | <a href="kebijakan-privasi" class="line">Kebijakan Privasi</a> <strong>2015 - 2022</strong></span>
								</div>
							</div>
					</div>


						<div class="align-center"><h5 class="uppercase link--with-decoration mt30 mb30">We Accept</h5></div>
						<div class="align-center mb-4">
							<img src="/assets/img/payment-sindikat.png" class="w-100" alt="pembayaran sindikat">
						</div>


				</div>
			</div>
		</div>
	</div>
</footer>
<!-- ... end Footer -->

@include('layouts.chat')

{{-- <script src="/assets/js/method-assign.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/Headroom.js"></script>
<script src="/assets/js/imagesLoaded.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/jquery.datetimepicker.full.js"></script>
<script src="/assets/js/jquery.magnific-popup.js"></script>
<script src="/assets/js/jquery.matchHeight.js"></script>
<script src="/assets/js/jquery-circle-progress.js"></script>
<script src="/assets/js/jquery-countTo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.min.js" integrity="sha512-FcXc9c211aHVJEHxoj2fNFeT8+wUESf/4mUDIR7c31ccLF3Y6m+n+Wsoq4dp2sCnEEDVmjhuXX6TfYNJO6AG6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/material.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/select2.js"></script>
<script src="/assets/js/svgxuse.js"></script>
<script src="/assets/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.js" integrity="sha512-ics0TbLy9YV5Mb6jY3AWg+yjIPE+Kp5lZIH1xLPJKMDEeyR9+Y46fXzmWDdGTsuLh5+1FZZ41vPzd1ykoZtLDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/js-plugins/leaflet.js"></script>
<script src="/assets/js/MarkerClusterGroup.js"></script>
<script src="/assets/js/ion.rangeSlider.js"></script>
<script src="/assets/js/main-global.js"></script>
<script src="/assets/js/jquery.validate.min.js"></script>
<script src="/assets/js/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.0.1/perfect-scrollbar.min.js" integrity="sha512-r5O/1pg7f4zywygu1EKevvhbX3oGsERLakK5IvztJbue0z5H4mWaevAn7Sy0ZFgc7lnFHBomHS5hABLehgdl/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/scripts.js"></script> --}}

<script src="/assets/js/method-assign.js"></script>

<!-- jQuery first, then Other JS. -->


<!-- jQuery-scripts for Modules -->
<script src="/assets/forms/src/js/jquery.validate.min.js"></script>
<script src="/assets/forms/src/js/sweetalert2.all.js"></script>
<script src="/assets/forms/src/js/scripts.js"></script>

<script src="/assets/js/jquery-3.3.1.js"></script>

<script src="/assets/js/js-plugins/ajax-pagination.js"></script>
<script src="/assets/js/js-plugins/bootstrap.js"></script>
<script src="/assets/js/js-plugins/bootstrap-datepicker.js"></script>
<script src="/assets/js/js-plugins/Headroom.js"></script>
<script src="/assets/js/js-plugins/imagesLoaded.js"></script>
<script src="/assets/js/js-plugins/isotope.pkgd.min.js"></script>
<script src="/assets/js/js-plugins/jquery.datetimepicker.full.js"></script>
<script src="/assets/js/js-plugins/jquery.magnific-popup.js"></script>
<script src="/assets/js/js-plugins/jquery.matchHeight.js"></script>
<script src="/assets/js/js-plugins/jquery-circle-progress.js"></script>
<script src="/assets/js/js-plugins/jquery-countTo.js"></script>
<script src="/assets/js/js-plugins/material.min.js"></script>
<script src="/assets/js/js-plugins/parallax.js"></script>
<script src="/assets/js/js-plugins/particles.js"></script>
<script src="/assets/js/js-plugins/perfect-scrollbar.js"></script>
<script src="/assets/js/js-plugins/popper.min.js"></script>
<script src="/assets/js/js-plugins/select2.js"></script>
<script src="/assets/js/js-plugins/svgxuse.js"></script>
<script src="/assets/js/js-plugins/swiper.min.js"></script>
<script src="/assets/js/js-plugins/waypoints.js"></script>
<script src="/assets/js/js-plugins/leaflet.js"></script>
<script src="/assets/js/js-plugins/MarkerClusterGroup.js"></script>
<script src="/assets/js/js-plugins/ion.rangeSlider.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- FontAwesome 5.x.x JS -->

<script defer src="/assets/fonts/fontawesome-all.js"></script>

<script src="/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.min.js" integrity="sha512-FcXc9c211aHVJEHxoj2fNFeT8+wUESf/4mUDIR7c31ccLF3Y6m+n+Wsoq4dp2sCnEEDVmjhuXX6TfYNJO6AG6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="/assets2/js/main-global.js"></script> --}}


<script>
  $(window).on('load', function() {
    $('.loading').fadeOut(1000);
});
</script>

<script type="text/javascript">
		$(document).ready(function() {
			if ($(window).width() > 767) {
				$('#pagepiling').pagepiling({
					afterRender: function(anchorLink, index){
						$('#site-header').addClass('home-nav hidden-xs hidden-sm');
						$('.me-intro').addClass('animated fadeInUpBig slow delay-1s');
						$('.contents-inner h1').addClass('animated rotateInUpLeft delay-2s');
					},
					onLeave: function(index, nextIndex, direc){
						if(nextIndex == 1 && direc == 'up'){
							$('#site-header').addClass('home-nav');
							$('.cover-slide').removeClass('transf-slide');
						}
						if(nextIndex == 2 && direc == 'down'){
							$('.cover-slide').addClass('transf-slide ');
							$('.crumina-heading, .intro-inner .left a').addClass('animated fadeInLeft delay-1s');
							$('.intro-inner .right').addClass('animated fadeInRight delay-2s');

						}

					},
					afterLoad: function(anchorLink, index){
						if(index == 2){
							$('#site-header').removeClass('home-nav');
						}
					}
				});
				// $('.pp-tableCell>.intro').perfectScrollbar({wheelPropagation: true});
			}
		});
	</script>

	<script>
		$(function () {
  $('[data-toggle="popover"]').popover()
})
	</script>


		@yield('js')

</body></html>
