@extends('layouts.default')
@section('titulo', 'ONIX | DESCARGAS')
@push('js')
<script>
	var $imagen1, $imagen2;
	$imagen1 ="{{url('public/img/logos/blanco.png')}}";
	$imagen2 ="{{url('public/img/logos/blanco.png')}}";
</script>
@endpush
@section('content')
	
	<br><br><br><br><br>
	<section class="row" style="padding:15px;">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
			<div class="container center-block">
				<div class="titulo">
					<h2><span>@lang('descarga.titulo_descarga_wallet')</span></h2>	
				</div>
					<p>@lang('descarga.subtitulo_descarga_wallet')</p>
			</div>
		</div>
	</section>
	<section class="section row" style="padding:15px;">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<div class="container center-block">
				<div class="text-descarga">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 marge-android">
						<div class="android zoom">
							<img class="img-responsive imagenes" src="{{url('public/pagina/img/index/android.png')}}" alt="linux">
							<a href="#"><h3>Android</h3></a>
							<a href="#"><h4>Version 1.0.1</h4></a>
							<div class="descargar" style="color:#949292; margin-top: 31px;">
								<label>Onix-wallet</label>
							</div>
							<div class="descargar" style="margin-top: 31px;">
								<a class="btn text-soft btn-default btn-descargar" target="_blank" href="https://play.google.com/store/apps/details?id=com.onix.wallet">@lang('descarga.descargar')</a>
							</div>
						</div>
						<br>	
					</div>
					
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<div class="windows zoom">
							<img class="img-responsive imagenes" src="{{url('public/pagina/img/index/windows.png')}}" alt="linux">
							<a href="#"><h3>Windows</h3></a>
							<a href="#"><h4 style="color:#949292">32 bit / 64 bit</h4></a>
							<a href="#"><h4>20.2 MB</h4></a>
							<div class="descargar" style="color:#949292; margin-top: 31px;">
								<label>Onix_wallet.exe</label>
							</div>
							<div class="descargar" style="margin-top: 31px;">
								<a class="btn text-soft btn-default btn-descargar" href="#">		@lang('descarga.descargar')
								</a>
							</div>
						</div>
						<br>
					</div>
					
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<div class="linux zoom">
							<img class="img-responsive imagenes" src="{{url('public/pagina/img/index/linux.png')}}" alt="linux">
							<a href="#"><h3>Linux</h3></a>
							<a href="#"><h4>7.2 MB</h4></a>
							<div class="descargar" style="color:#949292; margin-top: 31px;">
								<label>Onix-qt</label>
							</div>
							<div class="descargar" style="margin-top: 31px;">
								<a class="btn text-soft btn-default btn-descargar" href="{{url('public/download/ONIX-qt')}}" target="_blank" >		@lang('descarga.descargar')
								</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>			
			</div>
		</div>
	</section>
	
@endsection
@push('js')
<script type="text/javascript">
	$(function(){
		$('.zoom').hover(function() {
	        $(this).addClass('transition');
	    }, function() {
	        $(this).removeClass('transition');
	    });

	});
</script>
@endpush