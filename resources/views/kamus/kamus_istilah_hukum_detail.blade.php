@extends('layouts.app')

@section('title', 'Kamus Hukum')
@section('css')
<style>
	table, tr, td {
		border: none;
	}
</style>
@endsection

@section('content')
<div class="main-content-wrapper">

	<section>
		<div class="container">
			<div class="row medium-padding60 mt-5">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mb30" data-mh="equal-block">					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
							<p class="link text-dark mb-2 mt-2">Hasil Pencarian <strong><span class="sen">'@foreach($kamus as $k) {{$k->indo ?? $k->asing}} @endforeach'</span></strong></p>
							<hr class="mb-3">
							
							<h5 class="cap mb-3 mt-3 uppercase">Pengertian @foreach($kamus as $k) {{$k->indo ?? $k->asing}} @endforeach</h5>
							<p><strong>
								<span class="cap">@foreach($kamus as $k) {{$k->indo ?? $k->asing}} @endforeach</span>
								</strong> memiliki 1 (satu) arti. <strong>
								<span class="cap">@foreach($kamus as $k) {{$k->indo ?? $k->asing}} @endforeach</span>
								</strong> memiliki pengertian sebagai berikut:
							</p>
							<p class="bg-gray p-4">Menurut Kamus Istilah Hukum Sindikat, <strong>
								<span class="sen">@foreach($kamus as $k) {{$k->indo ?? $k->asing}} @endforeach</span>
								adalah </strong><span class="sen"> @foreach($kamus as $k)
													{{$k->ket}}
												@endforeach </span>
							</p>					
							<hr class="mb-3 mt-5">
						</div>	

						

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
							<div class="box-black p-4">
									<h2 class="link text-white mb-3 h4 uppercase">Cari Istilah Lainnya</h2>
									<a href="/istilah-hukum/">
										<span class="btn btn--x-large btn--hover-decoration full-width bg-blue mt-0">Reset</span>
									</a>
									
							</div>
						</div>
											
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
					<div class="">
						<!-- here -->
						<p class="text-dark"><strong>Peralatan Sindikat lainnya!</strong></p>
						<hr class="mb-3">
						<h5 class="uppercase text-dark uppercase mt-0">Kamus Hukum</h5>
						<p class="text-dark mt-3 mb-0">11.000++ istilah hukum beserta translasi Indonesia - English</p>
						<a href="/kamus-hukum" class="hover"><img src="/assets/img/kamus-hukum-indonesia-inggris.jpg" alt="kamus hukum indonesia inggris" class="bg-gray mt-3"></a>
						<!-- here -->
						<h5 class="uppercase  text-dark mt-4 uppercase">KBLI 2020</h5>
						<p class="text-dark mt-3 mb-0">Lihat tabel kode KBLI 2020 yang telah kami susun</p>
						<a href="/kbli" class="hover"><img src="/assets/img/kbli-2020.jpg" alt="kbli 2020 sindikat" class="bg-gray mt-3"></a>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>

</div>
@endsection