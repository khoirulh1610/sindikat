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
							<p class="link text-dark mb-2 mt-2 hidden-xs" aria-label="breadcrumb"><strong><a href="/">Home</a></strong> | Peralatan | <a href="/kamus-hukum" class="line">Kamus Hukum</a></p>
							<hr class="mb-3 hidden-xs">
									<h1 class="cap mb-3 mt-4 uppercase">Kamus Hukum</h1>
									<p>Hasil terjemahan Bahasa Indonesia ke Bahasa Inggris / Latin / Belanda dari <strong><span class="sen">'@foreach($keys as $k){{$k->indo}}@endforeach'</span></strong></p>


							<br>
							<h5>Hasil Terjemahan:</h5>
							<p class="bg-gray p-4">
								<strong><span class="line">Bahasa Indonesia</span></strong><br>
								<span class="sen">@foreach($keys as $k) {{$k->indo}}@endforeach</span>
							</p>	
							<p class="bg-gray p-4">
								<strong><span class="line">Bahasa Inggris / Latin / Belanda</span></strong><br>
								<span class="sen">@foreach($kamus as $k)
													{{$k->asing}}
												@endforeach</span>
							</p>					
							<hr class="mb-3 mt-5">
						</div>	

						

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
							<div class="box-black p-4">
									<h2 class="link text-white mb-3 h4 uppercase">Cari Terjemahan Lainnya</h2>
									<a href="/kamus-hukum/">
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
						<h5 class="uppercase text-dark uppercase mt-0">Istilah Hukum</h5>
						<p class="text-dark mt-3 mb-0">Ribuan istilah hukum Indonesia beserta dengan arti dan penjelasan</p>
						<a href="/istilah-hukum" class="hover"><img src="/assets/img/kamus-istilah-hukum.jpg" alt="kamus istilah hukum " class="bg-gray mt-3"></a>
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