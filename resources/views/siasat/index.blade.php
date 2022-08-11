@extends('layouts.app')

@section('content')

<div class="main-content-wrapper">

	<section>
		<div class="rel-box">
			<div class="page-cover bg-cover full60"></div>
			<div>
				<div class="container">
					<div class="cover-slide3">
						<div class="contents-inner contents-inner-judul">
							<h1 class="uppercase align-center heading">Siasat</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="">
		<div class="container">
			<div class="row medium-padding100">
				
				@foreach($blog as $item)				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb30 align-center" data-mh="equal-block">
					<div class="crumina-module crumina-teammembers-item has-popup align-left">
						<div class="teammembers-thumb">
							<img src="https://infiniti.id/{{$item->image}}" alt="Syarat Sahnya Perjanjian">
							<div class="overlay-standard"></div>
							<a href="{{url('siasat/'.$item->url)}}" class="btn btn--round btn--secondary btn--transparent btn--hover-decoration">
								<svg class="woox-icon icon-arrow-right-line"><use xlink:href="#icon-arrow-right-line"></use></svg>
							</a>
							<div class="teammember-content">
								<div class="teammembers-item-prof"><a href="{{url('siasat/'.$item->url)}}" style="color: #fff;font-weight: 900;text-shadow: #102541 1px 0 10px;">{{$item->title}}</a></div>
							</div>
						</div>
					</div>
				</div>
								
				@endforeach				
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30 align-center"></div>
			</div>
		</div>
	</section>

</div>


	

	<section class="bg-dark">
		<div class="container black">
			<div class="cover-slide3">
				<div class="contents-inner">
					<h2 class="uppercase align-center heading">Cara Kerja Sindikat</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb60">
					<div class="medium-padding100">
						<div class="crumina-module crumina-module-slider time-line-slider">
							<div class="swiper-container gallery-thumbs swiper-time-line swiper-unique-id-0 initialized swiper-container-horizontal" data-show-items="6" data-loop="0" id="swiper-unique-id-0">
								<div class="swiper-btn-next">
									<svg class="woox-icon icon-line-arrow-right">
										<use xlink:href="#icon-line-arrow-right"></use>
									</svg>
									<svg class="woox-icon icon-hover icon-line-arrow-right">
										<use xlink:href="#icon-line-arrow-right"></use>
									</svg>
								</div>
								<div class="swiper-btn-prev">
									<svg class="woox-icon icon-line-arrow-left">
										<use xlink:href="#icon-line-arrow-left"></use>
									</svg>
									<svg class="woox-icon icon-hover icon-line-arrow-left">
										<use xlink:href="#icon-line-arrow-left"></use>
									</svg>
								</div>
								<div class="swiper-wrapper slider-slides time-line-slides">
									<div class="swiper-slide slides-item time-active">
										<span class="time-line-decoration"></span>
										<a href="/blog#" class="btn--hover-decoration">Konsultasi</a>
									</div>
									<div class="swiper-slide slides-item">
										<span class="time-line-decoration"></span>
										<a href="/blog#" class="btn--hover-decoration">Isi Formulir </a>
									</div>
									<div class="swiper-slide slides-item">
										<span class="time-line-decoration"></span>
										<a href="/blog#" class="btn--hover-decoration">Uang Panjar</a>
									</div>
									<div class="swiper-slide slides-item">
										<span class="time-line-decoration"></span>
										<a href="/blog#" class="btn--hover-decoration">Kontrak Kerja</a>
									</div>
									<div class="swiper-slide slides-item">
										<span class="time-line-decoration"></span>
										<a href="/blog#" class="btn--hover-decoration">Pekerjaan</a>
									</div>
									<div class="swiper-slide slides-item">
										<span class="time-line-decoration"></span>
										<a href="/blog#" class="btn--hover-decoration">Penyerahan</a>
									</div>
								</div>
								<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
							</div>
							<div class="swiper-container gallery-top swiper-unique-id-1 initialized swiper-container-horizontal" data-loop="1" data-change-handler="timeParent" data-prev-next="1" id="swiper-unique-id-1">
								<div class="swiper-wrapper">
									<div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="5">
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
											<div class="time-line-thumb">
												<img src="./Blog - Informasi seputar Pendirian, Pembuatan PT, CV, Yayasan, Jasa, Online, Perizinan, Perijinan, Biaya Cepat dan Murah_files/time-thumb.png" alt="photo">
											</div>
										</div>
									</div>
									<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0">
										<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-sm-offset-0 col-xs-12">
											<header>
												<div class="heading-sup-title c-white">Step <span class="weight-bold">Pertama</span></div>
												<h5 class="heading-text c-white">Konsultasi dengan Sindikat</h5>
												<p class="heading-text c-white">Ada beberapa cara konsultasi, diantaranya melalui saluran komunikasi telpon, korespondensi email dan tatap muka. Akan tetapi agar pekerjaan dapat terlaksana dengan baik, maka kami menyarankan untuk <span class="link--with-decoration">konsultasi tatap muka.</span></p>
												<div class="heading-text c-white">Dalam pengalaman kami, apabila konsultasi tatap muka sangat minim terjadi miskomunikasi dan kesalahan dilakukannya pekerjaan.</div>
											</header>
										</div>
									</div>
									<div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1">
										<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-sm-offset-0 col-xs-12">
											<header>
												<div class="heading-sup-title c-white">Step <span class="weight-bold">Kedua</span></div>
												<h5 class="heading-text c-white">Isi formulir</h5>
												<p class="heading-text c-white">Apabila calon Klien memilih paket PT + VO / paket CV + VO / paket PT PMA, kami memberikan isian formulir yang harus diisi. Isian formulir tersebut akan menjadi pegangan dan dasar dalam pelaksanaan pekerjaan.</p>
												<div class="heading-text c-white">Komitmen kami adalah melakukan pekerjaan dengan tuntas sesuai dengan isian formulir yang diisi oleh calon Klien.</div>
											</header>
										</div>
									</div>
									<div class="swiper-slide" data-swiper-slide-index="2">
										<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-sm-offset-0 col-xs-12">
											<header>
												<div class="heading-sup-title c-white">Step <span class="weight-bold">Ketiga</span></div>
												<h5 class="heading-text c-white">Pembayaran uang panjar</h5>
												<p class="heading-text c-white">Kami akan mengirimkan penawaran beserta detail pembayaran uang panjar sebagai komitmen dari calon Klien atas persetujuan atas pelaksanaan pekerjaan. Jumlah uang muka yang kami tetapkan adalah <span class="link--with-decoration">50% (lima puluh persen)</span> dari total invoice. </p>
												<div class="heading-text c-white">Kami menyediakan program promo cicilan yang dapat dilihat <a class="c-grey-light" href="/promo"><strong>disini.</strong></a></div>
											</header>
										</div>
									</div>
									<div class="swiper-slide" data-swiper-slide-index="3">
										<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-sm-offset-0 col-xs-12">
											<header>
												<div class="heading-sup-title c-white">Step <span class="weight-bold">Keempat</span></div>
												<h5 class="heading-text c-white">Persetujuan pelaksanaan pekerjaan</h5>
												<p class="heading-text c-white">Setelah dilakukan pembayaran pembayaran uang panjar, maka calon Klien telah dianggap menyetujui kontrak kerja. Calon Klien telah berubah menjadi Klien, dan berikutnya kami akan menjaga segala yang terbaik untuk kepentingan Klien selama pelaksanaan pekerjaan.</p>
												<div class="heading-text c-white">Kami menyiapkan dokumen-dokumen kuasa pelaksanaan pekerjaan dan isian formulir yang sudah final.</div>
											</header>
										</div>
									</div>
									<div class="swiper-slide" data-swiper-slide-index="4">
										<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-sm-offset-0 col-xs-12">
											<header>
												<div class="heading-sup-title c-white">Step <span class="weight-bold">Kelima</span></div>
												<h5 class="heading-text c-white">Kami mulai bekerja</h5>
												<p class="heading-text c-white">Pekerjaan dilaksanakan dengan dasar isian formulir dan kesepakatan ketika konsultasi. Kami akan membuat <span class="link--with-decoration">Grup Whatsapp.</span> Di dalam grup tersebut antara Klien dan tim Sindikat dapat berkomunikasi.</p>
												<div class="heading-text c-white">Kami berupaya sebisa mungkin untuk memberikan tanggapan dengan <i>fast response</i> di dalam grup untuk menjamin kepuasan Klien.</div>
											</header>
										</div>
									</div>
									<div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5">
										<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-sm-offset-0 col-xs-12">
											<header>
												<div class="heading-sup-title c-white">Step <span class="weight-bold">Keenam</span></div>
												<h5 class="heading-text c-white">Penyerahan hasil pekerjaan</h5>
												<p class="heading-text c-white">Pekerjaan yang telah diselesaikan akan diserahkan kepada Klien setelah Klien melakukan pelunasan invoice. Setelah penyerahan, kami akan meminta <span class="link--with-decoration">testimoni Klien</span> dan tanggapan atas layanan yang kami berikan. </p>
												<div class="heading-text c-white">Pekerjaan selesai, kami tetap menjaga hubungan baik dengan Klien. Klien dapat bertanya kapanpun di dalam Grup Whatsapp.</div>
											</header>
										</div>
									</div>
									<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="">
		<div class="container">
			<div class="cover-slide3 mb60">
				<div class="contents-inner">
					<h2 class="uppercase align-center heading">Kami Sedang Mendengarkan</h2>
				</div>
			</div>




				<div class="row medium-padding100">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
						<p class="align-left ">Bulan Desember ini, kantor kami sedang mendengarkan album</p>
						<h5 class="heading-text mb30 align-left"><strong><span class="link--with-decoration">Genesis</span> - <span class="link--with-decoration">Wind &amp; Wuthering</span></strong></h5>
						<p class="align-left">Wind &amp; Wuthering adalah album keenam dari Genesis - band progressive rock asal Inggris. Album ini keluar pada tanggal 17 Desember 1976 rilisan Charisma Records. Gitaris Steve Hackett bermain untuk terakhir kalinya di album ini sebelum solo karir.
						<a href="https://web.archive.org/web/20200814054547/https://open.spotify.com/album/4CgleVVe43iVPsmWh7Mydo" target="_blank"><img src="./Blog - Informasi seputar Pendirian, Pembuatan PT, CV, Yayasan, Jasa, Online, Perizinan, Perijinan, Biaya Cepat dan Murah_files/spotify1.png" class="mt30" alt="spotify"></a>
						<iframe src="./Blog - Informasi seputar Pendirian, Pembuatan PT, CV, Yayasan, Jasa, Online, Perizinan, Perijinan, Biaya Cepat dan Murah_files/4CgleVVe43iVPsmWh7Mydo.html" width="350" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" style="max-width: 100% !important;"></iframe>
						
						</p><p class="align-left">Rekomendasi lagu di album ini adalah <span class="link--with-decoration">Afterglow</span></p>
						
					</div>
					<div class="col-lg-4 col-md-4 hidden-xs">
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
						

						<p class="align-right hidden-xs"><span class="link--with-decoration">lyrics</span> | <span class="link--with-decoration">Genesis</span> - <span class="link--with-decoration">Afterglow</span><br> <br>
							[Verse 1] <br>
							Like the dust that settles all around me<br>
							I must find a new home<br>
							The ways and holes that used to give me shelter<br>
							Are all as one to me now<br>
							<br><br>
							[Chorus 1]<br>
							But I, I would search everywhere<br>
							Just to hear your call<br>
							And walk upon stranger roads than this one<br>
							In a world I used to know before<br>
							I miss you more<br>
							<br><br>
							[Verse 2]<br> 
							Than the sun, reflecting off my pillow<br> 
							Bringing the warmth of new life<br> 
							And the sounds that echoed all around me<br> 
							I caught a glimpse of in the night<br> 
							<br> <br>
							[Chorus 2] <br>
							But now, now I've lost everything <br>
							I give to you my soul <br>
							The meaning of all that I believed before <br>
							Escapes me in this world of none, no thing, no one <br>
							 <br><br>
							[Outro] <br>
							And I would search everywhere <br>
							Just to hear your call <br>
							And walk upon stranger roads than this one <br>
							In a world I used to know before <br>
							For now I've lost everything <br>
							I give to you my soul <br>
							The meaning of all that I believed before <br>
							Escapes me in this world of none <br>
							I miss you more <br>
						</p>

						<p class="visible-xs"><span class="link--with-decoration">lyrics</span> | <span class="link--with-decoration">Genesis</span> - <span class="link--with-decoration">Afterglow</span><br> <br>
							[Verse 1] <br>
							Like the dust that settles all around me<br>
							I must find a new home<br>
							The ways and holes that used to give me shelter<br>
							Are all as one to me now<br>
							<br><br>
							[Chorus 1]<br>
							But I, I would search everywhere<br>
							Just to hear your call<br>
							And walk upon stranger roads than this one<br>
							In a world I used to know before<br>
							I miss you more<br>
							<br><br>
							[Verse 2]<br> 
							Than the sun, reflecting off my pillow<br> 
							Bringing the warmth of new life<br> 
							And the sounds that echoed all around me<br> 
							I caught a glimpse of in the night<br> 
							<br> <br>
							[Chorus 2] <br>
							But now, now I've lost everything <br>
							I give to you my soul <br>
							The meaning of all that I believed before <br>
							Escapes me in this world of none, no thing, no one <br>
							 <br><br>
							[Outro] <br>
							And I would search everywhere <br>
							Just to hear your call <br>
							And walk upon stranger roads than this one <br>
							In a world I used to know before <br>
							For now I've lost everything <br>
							I give to you my soul <br>
							The meaning of all that I believed before <br>
							Escapes me in this world of none <br>
							I miss you more <br>
						</p>

					</div>
				</div>

				<div class="row medium-padding60 mb30">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="promo-block">
						<div class="promo-content">
							<div class="promo-title text-white">Butuh <b>konsultan legalitas</b> yang bisa diandalkan?</div>
							<p class="c-white">Segera hubungi nomor handphone pribadi kami.</p>
						</div>
						<a href="https://web.archive.org/web/20200814054547/tel:+62811899895" class="btn btn--x-large btn--primary btn--transparent btn--hover-decoration full-width text-white"><i class="fa fa-phone-square"></i>  0811-899-895</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
