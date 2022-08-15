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
							<div class="box-black">									
									<table class="table datatable">
										<thead style="background-color:black">
											<th>KODE</th>
											<th>Judul</th>
											<th>Deskripsi</th>
										</thead>
										<tbody>
											@foreach($kbli as $k)
											<tr>
												<td>{{$k->code}}</td>
												<td>{{$k->title}}</td>
												<td>{{$k->detail}}</td>
											</tr>
											@endforeach
										</tbody>			
									</table>
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
	$('.datatable').DataTable();
</script>
@endsection