@extends('layouts.app')

@section('title', 'Kamus Hukum')
@section('css')
<style>
	
</style>
@endsection

@section('content')
<div class="main-content-wrapper">

	<section>
		<div class="page-cover bg-cover full60"></div>
		<div class="container">
			<div class="cover-slide3">
				<div class="contents-inner contents-inner-tk">
					<h1 class="uppercase align-center heading">Kamus Hukum IND-ENG</h1>
				</div>
			</div>
			<div class="row medium-padding100">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mb30" data-mh="equal-block">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<form action="" method="get">
							<div class="box-black">
								<div class="form-group">
									<h3 class="link" style="color:#fff">KATA KUNCI</h3>
									<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Kata Kunci" value="{{$keyword??''}}">
								</div>
								<button type="submit" class="btn btn--x-large btn--primary btn--hover-decoration full-width text-white">Cari</button>
							</div>
							</form>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-4">
						@if($kamus)
							<h3>Hasil Pencarian</h3>
							<table class="table display">
									<thead style="background-color:black">
										<th>No</th>
										<th>Indonesia</th>										
										<th>Lihat</th>
									</thead>
									<tbody>										
										@foreach($kamus as $k)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>												
												<?php
													if($keyword){
														$kuning = "<span style='background-color:yellow'>".$keyword."</span>";
														$kuning2 = "<span style='background-color:yellow'>".ucwords($keyword)."</span>";
														$text = str_replace($keyword,$kuning,$k->indo);														
														$text = str_replace(ucwords($keyword),$kuning2,$text);														
														echo $text;
													}else{
														echo $k->indo;
													}
												?>
											</td>											
											<td> 
												<a href="{{url('kamus-hukum/'.$k->url)}}" class="btn btn--secondary">Detail {{$k->id}}</a>
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

				@include('layouts.rsidebar')
			</div>
		</div>
	</section>

</div>
@endsection