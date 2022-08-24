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
		<div class="page-cover bg-cover full60"></div>
		<div class="container">
			<div class="cover-slide3">
				<div class="contents-inner contents-inner-tk">
					<h1 class="uppercase align-center heading">KBLI</h1>
				</div>
			</div>
			<div class="row medium-padding100">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb30" data-mh="equal-block">					
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<form action="" method="get">
							<div class="box-black">
								<div class="form-group">
									<h3 class="link" style="color:#fff">KATA KUNCI</h3>
									<input type="text" class="form-control text--x-md" id="keyword" name="keyword" placeholder="Kata Kunci" value="{{$keyword??''}}">
								</div>
								<button type="submit" class="btn btn--x-md btn--primary btn--hover-decoration full-width text-white">Cari</button>
							</div>
							</form>
						</div>						
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-2">							
							<div class="box-black">									
									<table class="table">
										<thead style="background-color:black">
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
												<td>{!!$kode!!}</td>
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
</div>
@endsection

@section('js')
<script>
	
</script>
@endsection