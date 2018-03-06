<?php 
	$precios = Session::get('precios');
?>
<!-- START NAVBAR -->
		<div class="navbar navbar-default navbar-fixed-top menu-top">
			<div class="indecadores-top animated hidden-xs hidden-sm">
				<div class="container">
					<div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-1 text-indicador">
						<strong style="color:#000;">@lang('menu.indicadores')</strong>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="indicador-top">
							<strong>ONX/BTC : {{$precios->onx_btc}}</strong>
						</div>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="indicador-top">
								<strong>ONX/USD : {{$precios->onx_usd}}</strong>
						</div>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="indicador-top yellow">
							<strong>ONX/VEF: {{$precios->onx_bsf_compra}}</strong>

						</div>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="indicador-top">
							<strong>Vol 24h: ${{$precios->volumen}} </strong>

						</div>
					</div>
				</div>
			</div>
			<div  style="padding:5px 0;"></div>
			<div class="container">
				<div class="navbar-header">
					
						<button type="button" class="btn desplegar hidden-md hidden-lg" style="background: #fff none repeat scroll 0 0;position:absolute;right:0;top:20px;margin-right:10px; ">
							<i class="fa fa-bars"></i>
						</button>
					
					
					<a href="{{url('/')}}" style="padding:15px;" >
						<img src="{{url('public/img/logos/negro.png')}}" id="img-logo" >
					</a>
				</div>
				<div class="navbar-collapse collapse ">
					<nav>
						<ul class="nav navbar-nav navbar-right hidden-sm">
							<li><a class="page-scroll" href="{{route('proyecto')}}">@lang('menu.proyecto_onix')</a></li>	
							<li><a class="page-scroll" target="_blank" href="http://ventas.onixcoin.com/">@lang('menu.comprar')</a></li>		
							<li><a class="page-scroll" href="{{route('roadmap')}}">@lang('menu.roadmap')</a></li>
							<li><a class="page-scroll" target="_blank" href="http://explorer.onixcoin.com/">@lang('menu.explorer')</a></li>
							<li><a class="page-scroll" target="_blank" href="{{route('plan_estrategico')}}">@lang('menu.plan_estrategico')</a></li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-flag" style="font-size:20px;"></i></a>
								<div class="dropdown-menu" style="padding:5px;">
									<a href="{{url('lenguaje/es')}}"  style="color:#000 !important;"><strong>Español</strong></a>
									<div class="dropdown-divider"></div>
									<a href="{{url('lenguaje/en')}}" style="color:#000 !important;"><strong>Ingles</strong></a>
								</div>
							</li>
							<li  class="hidden-sm hidden-xs">
								<a class="desplegar" href="#"> <i class="fa fa-bars" style="font-size:20px;"></i></a>
							</li>
						</ul>
					</nav>
				</div> 
			</div><!--- END CONTAINER -->
			<div  style="padding:5px 0;"></div>
			<div class="clearfix"></div>
		</div>
		<!-- END NAVBAR -->