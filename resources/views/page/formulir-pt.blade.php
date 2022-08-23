@extends('layouts.app')

@section('content')

<div class="main-content-wrapper">
    <section>
			<div class="pt-5">
            <div id="zf_div_aMMbP7Ah3CrQrYMV5g-Vp2x43j9U52DaJvU0SOpfScU"></div><script type="text/javascript">(function() {
try{
var f = document.createElement("iframe");
f.src = 'https://forms.zohopublic.com/info4323/form/FormulirOnlineSindikat/formperma/aMMbP7Ah3CrQrYMV5g-Vp2x43j9U52DaJvU0SOpfScU?zf_rszfm=1';
f.style.border="none";
f.style.height="100%";
f.style.width="100%";
f.style.transition="all 0.5s ease";
var d = document.getElementById("zf_div_aMMbP7Ah3CrQrYMV5g-Vp2x43j9U52DaJvU0SOpfScU");
d.appendChild(f);
window.addEventListener('message', function (){
var evntData = event.data;
if( evntData && evntData.constructor == String ){
var zf_ifrm_data = evntData.split("|");
if ( zf_ifrm_data.length == 2 ) {
var zf_perma = zf_ifrm_data[0];
var zf_ifrm_ht_nw = ( parseInt(zf_ifrm_data[1], 10) + 15 ) + "px";
var iframe = document.getElementById("zf_div_aMMbP7Ah3CrQrYMV5g-Vp2x43j9U52DaJvU0SOpfScU").getElementsByTagName("iframe")[0];
if ( (iframe.src).indexOf('formperma') > 0 && (iframe.src).indexOf(zf_perma) > 0 ) {
var prevIframeHeight = iframe.style.height;
if ( prevIframeHeight != zf_ifrm_ht_nw ) {
iframe.style.height = zf_ifrm_ht_nw;
}
}
}
}
}, false);
}catch(e){}
})();</script>
            </div>
	</section>	
</div>


@endsection