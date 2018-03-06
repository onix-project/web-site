@extends('layouts.default')
@section('titulo', 'ONIX | FICHA TECNICA')
@push('css')
	<style type="text/css">
		#contFichaTecnica{
			background: url("{{url('public/pagina/img/ficha/fondo_aspectos.png')}}"); 
			background-size: 100%;
			font-family: roboto-regular; 
			font-size: 13pt; 
			padding-top: 30px;
		}

		.negrita{font-weight: bold;}
	</style>
@endpush
@push('js')
<script>
	var $imagen1, $imagen2;
	$imagen1 ="{{url('public/img/logos/blanco.png')}}"
	$imagen2 ="{{url('public/img/logos/blanco.png')}}"
</script>
@endpush
@section('content')
	
	<section class="home-ficha" >
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="container" id="ficha" >
					<div class="col-lg-12 col-md-12 ficha-text">
						<div id="contFichaTecnica" class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<center>
								<h2>
									<span>
										@lang('ficha.titulo_ficha')
									</span>
								</h2>
							</center>
							
							<span class="clearfix"></span>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right negrita tit_descripcion"> @lang('ficha.tipo'): </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="padding-left: 0px;"> POW </div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right negrita tit_descripcion"> HASHING ALGO: </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="padding-left: 0px;"> X11 </div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right negrita tit_descripcion"> RETARGETING ALGO: </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="padding-left: 0px;"> DARK GRAVITY WAVE </div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right negrita tit_descripcion"> HALVING: </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="padding-left: 0px;"> NO HALVING! </div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right negrita tit_descripcion"> BLOCK REWARD: </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="padding-left: 0px;"> 60 ONX POR SIEMPRE! </div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right negrita tit_descripcion"> BLOCK TIME: </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="padding-left: 0px;"> 180 sec </div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right negrita tit_descripcion"> BLOCK SIZE: </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="padding-left: 0px;"> 4Mb </div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 exchange" id="exchange">
					<div class="text-exchange container">
						<h2><span>
							@lang('ficha.exchange')
						</span></h2>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<center><a href="https://yobit.net/"><img class="img-responsive" src="{{url('public/pagina/img/ficha/yobit.png')}}" alt=""></a></center>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<center><a href="https://www.coinpayments.net/"><img class="img-responsive" src="{{url('public/pagina/img/ficha/coinpayments.png')}}" alt=""></a></center>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<center><a href="https://tradesatoshi.com/"><img class="img-responsive" src="{{url('public/pagina/img/ficha/trade.png')}}" alt=""></a></center>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							<center><a href="https://www.ethbits.com/"><img class="img-responsive" src="{{url('public/pagina/img/ficha/ethbits.png')}}" alt=""></a></center>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 exchange" id="ranking" style="background: none">
						<div class="text-exchange text-ranking container">
							<h2><span>
								@lang('ficha.ranking')
							</span></h2>
							<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<center><a href="https://coinmarketcap.com/currencies/onix/"><img class="img-responsive" src="{{url('public/pagina/img/ficha/coin.png')}}" alt=""></a></center>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<center><a href="https://www.cryptocompare.com/coins/onix/overview"><img class="img-responsive" src="{{url('public/pagina/img/ficha/cripto.png')}}" alt=""></a></center>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xs-offset-3 col-sm-offset-0">
									<center><a href="https://coincap.io/ONX"><img class="img-responsive" src="{{url('public/pagina/img/ficha/unnamed.png')}}" alt=""></a></center>
								</div>
							</div>
						</div>
					</div>	
					<div class="clearfix"></div>
			</div>
		</div>	
	</section>

@endsection