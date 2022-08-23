@extends('layouts.app-page')

@section('content')
<div class="main-content-wrapper">

	<section>
		<div class="rel-box p-5">
			<div class="p-4"></div>
			<span>{{$title??''}}</span>
		</div>
	</section>
	<div class="content">
		{!!$content!!}
	</div>
</div>
@endsection