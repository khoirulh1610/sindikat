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
		<div class="page-cover bg-cover full60"></div>
		<div class="container">
			<div class="cover-slide3">
				<div class="contents-inner contents-inner-tk">
					<h1 class="uppercase align-center heading">Kamus ID-ENG detail</h1>
				</div>
			</div>
			<div class="row medium-padding100">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mb30" data-mh="equal-block">					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">							
							<div class="box-yellow">									
									<table class="" style="border:hidden; border: none;">
										<tr class="text-left" style="border: none;">
											<td width="10px">Indonesia</td>											
											<td>: {{$url}}</td>											
										</tr>
										<tr class="text-left" style="border: none;">
											<td>Inggris/Belanda/Latin</td>											
											<td>: 
												@foreach($kamus as $k)
													{{$k->asing}}
												@endforeach
											</td>
										</tr>										
									</table>
							</div>							
						</div>						
					</div>
				</div>

				@include('layouts.rsidebar')
			</div>
		</div>
	</section>

</div>
@endsection