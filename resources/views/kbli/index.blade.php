@extends('layouts.app')

@section('title', 'Kamus Hukum')
@section('css')
<style>
	table, tr, td {
		border: none;
	}
	.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
		color: #fff;
	}
</style>
@endsection

@section('content')
<div class="main-content-wrapper">
	<section>
		<div class="container">
			<div class="row medium-padding60 mt-5">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb30" data-mh="equal-block">			
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p class="link text-dark mb-2 mt-2 hidden-xs" aria-label="breadcrumb"><strong><a href="/">Home</a></strong> | Peralatan | <a href="/kbli" class="line">KBLI</a></p>
							<hr class="mb-4 hidden-xs">
							
							<form action="" method="get">
							<div class="box-black p-4 mt-2">
								<div class="form-group">
									<h1 class="link text-white mb-4 h4 uppercase">KBLI</h1>
									<p class="text-white">Cari kode KBLI 2020 sebagai bidang dan kegiatan usaha kamu</p>
									<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Tulis..." value="{{$keyword??''}}">
								</div>
								<button type="submit" class="btn btn--x-large btn--hover-decoration full-width bg-blue mt30">Cari</button>
							</div>
							</form>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">							
							<div class="box-black table-responsive" style="overflow-x: auto">									
									<table class="table">
										<thead class="bg-dark">
											<th>KODE</th>
											<th>Judul</th>
											<th>Deskripsi</th>
										</thead>
										<tbody>
											@foreach($kbli as $k)
											<tr>
												<?php
													$kode = $k->code;
													$title = $k->title;
													if($keyword){
														$kuning = "<span style='background-color:yellow'>".$keyword."</span>";
														$kuning2 = "<span style='background-color:yellow'>".ucwords($keyword)."</span>";																
														$kode = str_replace($keyword,$kuning,$kode);									
														$title = str_replace($keyword,$kuning,$title);														
														$title = str_replace(ucwords($keyword),$kuning2,$title);												
													}
												?>
												<td><strong>{!!$kode!!}</strong></td>
												<td>{!!$title!!}</td>
												<td>{{$k->detail}}</td>
											</tr>
											@endforeach
										</tbody>			
									</table>
									@if($keyword)
										{{$kbli->appends(['keyword'=>$keyword])->links()}}							
									@else
										{{$kbli->links()}}
									@endif		
							</div>		

						</div>		
					</div>					
				</div>
				<!-- @include('layouts.rsidebar') -->
			</div>
		</div>
	</section>	
	@include('layouts.peralatan')


	
</div>
@include('hubungi-kami-mobile')
@endsection



@section('js')
<script>
	
</script>
@endsection