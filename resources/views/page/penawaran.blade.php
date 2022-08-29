@extends('layouts.app')

@section('content')

<!-- content here start -->

<div class="main-content-wrapper">
	<section>
		<div class="container">
            <form action="{{url('penawaran')}}" method="post">                
			<div class="row medium-padding60 mb60 mt-3">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-6 left">
							<div class="content">
								<h1 class="uppercase bg-gray mb-3 uppercase">Penawaran</h1>
								<!-- pilih layanan start -->
								<p class="link--with-decoration">Pilih Layanan</p>
                                <p class="">
                                    @csrf
                                    <select class="mb-4" data-dropdown-css-class="woox--select-bordered-dropdown" id="packet" name="packet_id" data-minimum-results-for-search="Infinity">
                                        <option data-display="Choose country">Pilih Layanan</option>
                                        <?php
                                            $packet = DB::table('packet')->get();                                            
                                        ?>
                                        @foreach($packet as $p)
                                            <option value="{{$p->id}}">{{$p->name_packet}}</option>
                                        @endforeach
                                        <!-- <option value="1">PT</option>
                                        <option value="2">PT Perorangan</option>
                                        <option value="3">PT PMA</option>
                                        <option value="4">CV</option>
                                        <option value="5">PT Perorangan</option>
                                        <option value="6">PT PMA</option> -->
                                    </select>
                                    <select class="mb-1" data-dropdown-css-class="woox--select-bordered-dropdown" name="price_id" data-minimum-results-for-search="Infinity" id="price_id">
                                        <option data-display="Choose country">Detail Layanan</option>
                                        <option value="1">Pendirian PT</option>
                                        <option value="2">PT + Izin</option>
                                        <option value="3">PT + Izin + VO</option>
                                        <option value="4">PT + Izin + VO + PKP</option>
                                    </select>
                                </p>
                                <p class="link--with-decoration">Deskripsi</p>
                                <p class=""><strong id="keterangan">-</strong></p>
                                 <p class="link--with-decoration">Harga</p>
                                <h4 class=""><strong id="price">Rp 0,00</strong></h4>
                                <hr class="divider divider--style16 m-4">
                                <p class="link--with-decoration">Kirim Penawaran Kepada:</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="input-label control-label">Nama: <abbr class="required" title="required">*</abbr></label>
                                            <input name="name" class="form-control input--squared" type="text" value="" required="">
                                        <span class="material-input"></span></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="input-label control-label">HP: <abbr class="required" title="required">*</abbr></label>
                                            <input name="phone" class="form-control input--squared" type="number" value="" required="">
                                        <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="input-label control-label">Email: <abbr class="required" title="required">*</abbr></label>
                                            <input name="email" class="form-control input--squared" type="email" value="" required="">
                                        <span class="material-input"></span></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <button class="btn--medium full-width bg-blue text-white no-border-radius">Kirim</button>
                                    </div>

                                </div>
                                <!-- data pemesan end -->
							</div>
						</div>
						<div class="col-lg-6 right">
							<div class="content">
								<div class="align-center hidden-xs">
									<img id="img_banner" src="" class="w-75 bg-gray mt-0" alt="Poster Layanan" >
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </form>
		</div>
	</section>

</div>

@include('layouts.peralatan')
@include('layouts.bertanya')
@endsection

@section('js')
<script>
    var data_packet;
    $('#packet').on('change', function (e) {        
        $('#price_id').empty();
        $('#price_id').append('<option data-display="Choose country">Detail Layanan</option>');
        console.log($(this).val());
        $.ajax({
            url: "{{url('get-price')}}/"+ $(this).val(),
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                data_packet = data;                
                data.forEach(function(item, index){
                    console.log(item);                    
                    $('#price_id').append('<option value="'+item.id+'">'+item.name+'</option>');
                });               
            }
        });        
    });

    $('#price_id').on('change', function (e) {
        $.ajax({
            url: "{{url('get-price-by-id')}}/"+ $(this).val(),
            type: 'GET',
            dataType: 'json',
            success: function (item) {
                $('#price').html('Rp '+item.harga.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ","));
                $('#keterangan').html(item.keterangan);  
                $('#img_banner').attr('src', item.image);           
            }
        });     
    });
</script>
@endsection