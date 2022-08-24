@extends('layouts.app')

@section('title', 'Kamus Hukum')
@section('css')
<style>
	
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
							<form action="" method="get">
							<div class="box-black p-4">
								<div class="form-group">
									<h2 class="link text-white mb-4 h4 uppercase">Istilah Hukum</h2>
									<p class="text-white">Cari istilah hukum beserta dengan pengertian dan penjelasan!</p>
									<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Tulis..." value="{{$keyword??''}}">
								</div>
								<button type="submit" class="btn btn--x-large btn--hover-decoration full-width bg-blue mt30">Cari</button>
								<a href="/istilah-hukum/">
									<span class="btn btn--x-medium full-width bg-transparent text-white mt30">Reset</span>
								</a>
							</div>
							</form>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 p-2">
						@if($kamus)
							<p class="link text-dark mb-3 mt-2">Hasil Pencarian <strong>'{{$keyword}}'</strong></p>
							<table class="table display">
									<thead class="bg-dark">
										<th>Istilah</th>										
										<th>Penjelasan</th>
									</thead>
									<tbody>
										@foreach($kamus as $k)
										<tr>
											<td class="align-left cap">
												<?php

													$istilah = $k->indo ?? $k->asing;
													if($keyword){
														$kuning = "<span style='background-color:yellow'>".$keyword."</span>";
														$kuning2 = "<span style='background-color:yellow'>".ucwords($keyword)."</span>";
														$text = str_replace($keyword,$kuning,$istilah);														
														$text = str_replace(ucwords($keyword),$kuning2,$text);														
														echo $text;
													}else{
														echo $istilah;
													}
												?>
											</td>											
											<td> 
												<a href="{{url('kamus-istilah-hukum/'.$k->url)}}" class="link--with-decoration"><strong>Detail</strong></a>
											</td>
										</tr>
										@endforeach
									</tbody>
							</table>
							@if($keyword)
								{{$kamus->appends(['keyword'=>$keyword])->links()}}							
							@else
								{{$kamus->links()}}
							@endif							
						@endif
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