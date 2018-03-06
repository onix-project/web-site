@extends('layouts.default')
@section('titulo', 'ONIX | INICIO')
<?php 
	$precios = Session::get('precios');
?>
@push('css')
	<style>
		.owl-item{
			padding-left:15px !important;
		}
		.menu-top {
			margin-left: 0px;
			background: transparent !important;
		}
		.navbar-default .navbar-nav > li > a {
			color: #282828 !important;
		}
		.navbar-default.menu-shrink {
			background-color: #282828 !important;
			box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.1);
			width: 100%;
		}
		.navbar-default.menu-shrink .navbar-nav > li > a{
			color: #fff !important;
		}
		
	</style>
@endpush
@push('js')
	<script>
		var $imagen1, $imagen2;
		$imagen1 ="{{url('public/img/logos/blanco.png')}}"
		$imagen2 ="{{url('public/img/logos/negro.png')}}"
	

		$(function(){
			/*$('#carousel-banner').owlCarousel({
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				loop:true,
				pagination: false,
				margin:10,
				autoPlay:true,
				responsiveClass:true,
				items:1
			});*/
			
			$('#movil-banner').owlCarousel({
				transitionStyle : "fade",
				autoPlay:true,
				autoplayTimeout:4000,
				singleItem : true,
				slideSpeed : 400,
				items:1,
				dots: false,
				nav: true,
				lazyLoad:true,
				pagination: false,
				loop:true,
				navText: ["<div class='btn-direccion'><i class='fa fa-chevron-left'></i></div>","<div class='btn-direccion'><i class='fa fa-chevron-right'></i></div>"],
				onChanged: function(ev){
					console.log(ev);
				}
			});
			$('#carousel-banner').owlCarousel({
				transitionStyle : "fade",
				autoPlay:true,
				autoplayTimeout:4000,
				singleItem : true,
				slideSpeed : 400,
				items:1,
				dots: false,
				nav: true,
				lazyLoad:true,
				pagination: false,
				loop:true,
				navText: ["<div class='btn-direccion'><i class='fa fa-chevron-left'></i></div>","<div class='btn-direccion'><i class='fa fa-chevron-right'></i></div>"],
				onChanged: function(ev){
					console.log(ev);
				}
			});

		})
	</script>
@endpush
@section('content')
	
		<!-- START HOME -->
		<div id="carousel-banner" class="hidden-xs">
			<div class="item">
				<section data-stellar-background-ratio="0.3" id="home" class="home-parallax"  style="background-image: url({{url('public/pagina/img/bg/BANNER.png)')}};  background-size:cover; background-position: center;">
				
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="hero-text pt250" style="font-style: italic;">
										<center><h3 style="font-size: 28px">@lang('index.banner_1.primary')</h3>
										<h1 style="font-size: 44px">		@lang('index.banner_1.secundary')</h1>
										<p><a class="block-menu" href="#">	@lang('index.banner_1.third')</a></p></center>
									<div class="">
										<center><a href="https://play.google.com/store/apps/details?id=com.onix.wallet" class="" ><img src="{{url('public/pagina/img/googleplay.png')}}" alt="image"></a></center>
									</div>
								</div> 
							</div><!-- END COL-->
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="hero-text-img">
								<!--	<img src="{{url('public/pagina/img/')}}" alt="" />-->
								</div>
							</div><!-- END COL-->
						</div><!-- END ROW-->
					</div><!-- END CONTAINER-->
				</section>
			</div>
			<div class="item">
				<section data-stellar-background-ratio="0.3" id="home" class="home-parallax"  style="background-image: url({{url('public/pagina/img/bg/comprar.jpg)')}};  background-size:cover; background-position: center center;">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="hero-text pt250">
									<center>
									<center style="font-style: italic;"><h3 style="font-size: 28px">¡ YA PUEDES </h3>
										<h1 style="font-size: 44px">COMPRAR ONIX !</h1>
										<h3 style="font-size: 28px">Ingresa al centro de ventas de Onix</h3>
									</center>
									<div class="">
										<center><a href="#feature" class="btn yellow" style="color: #000; font-weight: bold; margin-top: 10px;"> COMPRA YA </a></center>
									</div>
								</div> 
							</div><!-- END COL-->
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="hero-text-img">
								<!--	<img src="{{url('public/pagina/img/')}}" alt="" />-->
								</div>
							</div><!-- END COL-->
						</div><!-- END ROW-->
					</div><!-- END CONTAINER-->
				</section>
			</div>
			<div class="item">
				<a href="{{route('plan_estrategico')}}">
					<section data-stellar-background-ratio="0.3" id="home" class="home-parallax"  style="background-image: url({{url('public/pagina/img/bg/banner_plan.jpg)')}};  background-size:cover; background-position: center center;">
					</section>
				</a>
			</div>
		</div>
		<div id="movil-banner" class="hidden-sm hidden-md hidden-lg">
			<div   class="item">
				<a href="{{url('descarga')}}">
					<img width="100%" src="{{url('public/pagina/img/bg/movil/banner1.jpg')}}" alt="">
				</a>
			</div>
			<div   class="item">
				<a href="https://ventas.onixcoin.com/">
					<img width="100%" src="{{url('public/pagina/img/bg/movil/banner2.jpg')}}" alt="">
				</a>
			</div>
			<div   class="item">
				<a href="{{url('plan_estrategico')}}">
					<img width="100%" src="{{url('public/pagina/img/bg/movil/banner3.jpg')}}" alt="">		
				</a>
			</div>
		</div>

		<!-- END  HOME DESIGN -->
		<section id="indicadores" class="block-center container "> 
			<center>
				<ul>
					<li class="indicador-text">
						<b>INDICADORES</b>
					</li>
					<li class="list-indicador">
						<span id="ONX_BTC" class="indicador-span"> <span class="unidad"><strong> ONX/BTC: {{ number_format($precios->onx_btc, 8, ',', '.') }}</strong> </span>  </span>
					</li>
					<li class="list-indicador">
						<span id="ONX_USD" class="indicador-span">  <span class="unidad"><strong> ONX/USD: {{ number_format($precios->onx_usd, 3, ',', '.') }} </strong></span> </span>
					</li>
					<li class="list-indicador list-yellow">
						<span id="ONX_BSF" class="yellow indicador-span">  
							<span class="unidad"><strong> ONX/VEF: {{ number_format($precios->onx_bsf_compra, 2, ',', '.') }} </strong></span> 
						</span>
					</li>
					<li class="list-indicador">
						<span id="VOL_24h" class="indicador-span">  <span class="unidad"><strong> Vol 24h: {{ number_format($precios->volumen, 2, ',', '.') }} USD</strong> </span> </span>
					</li>
				</ul>
			</center>
			
		</section>

		<!-- START ABOUT -->
		<section class="about-one section-padding">
			<div class="secciones" style="background:#f2f2f2;">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="single_about">
							<h1 style="text-transform: none;">@lang('index.dinero')</h1>
							<p style="text-align: right;">
								@lang('index.texto_onix')
							</p>
							<a class="block-menu" href="#" style="font-size: 12px;margin-top: 10px;"><strong>@lang('index.leer')</strong></a>
						</div>
					</div><!-- END COL-->
					<div class="col-md-5 col-sm-12 col-xs-12 text-center" style="padding-left: 40px">
					<br>
					<br>
						<iframe width="100%" height="250" src="https://www.youtube.com/embed/jZJqHFeCf74" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<!--<div id="about-slider" class="owl-carousel">

								<div class="single_about_img">
									<img class="img-responsive" src="{{url('public/pagina/img/1.png')}}" alt="">
								</div>
								<div class="single_about_img">
									<img class="img-responsive" src="{{url('public/pagina/img/6.png')}}" alt="">
								</div>
								<div class="single_about_img">
									<img class="img-responsive" src="{{url('public/pagina/img/3.png')}}" alt="">
								</div>
							</div>
						</div> END COL-->					

					</div><!-- END ROW-->
				</div><!-- END CONTAINER-->
				</div>
				<br>

			</div>
		</section>
		<!-- END ABOUT -->
		

		<!-- START TESTOMINIALS  -->
		<section id="review" class="client_review" style="padding: 0">
			<br>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center wow zoomIn">
							<h1>@lang('index.porque_usar')</h1>
							<p>@lang('index.resp_porque')</p>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<center class="wow fadeInLeft">
									<img src="{{url('public/pagina/img/PRIVADA.png')}}">
									<h3 class="testimonial-title"><br>@lang('index.privada.titulo')</h3>
									<p class="description">@lang('index.privada.parrafo')</p>
								</center>
							</div>
							<div class="testimonial">
								<center class="wow fadeInLeft" data-wow-delay="0.4s">
									<img src="{{url('public/pagina/img/SEGURA.png')}}">
									<h3 class="testimonial-title"><br>@lang('index.segura.titulo')</h3>
									<p class="description">@lang('index.segura.parrafo')</p>
								</center>
							</div>			 
							<div class="testimonial">
								<center class="wow fadeInLeft" data-wow-delay="0.8s">
									<img src="{{url('public/pagina/img/RAPIDA.png')}}" >
									<h3 class="testimonial-title"><br>@lang('index.rapida.titulo')</h3>
									<p class="description">@lang('index.rapida.parrafo')</p>
								</center>
							</div>	 
							<div class="testimonial">
								<center class="wow fadeInLeft" data-wow-delay="1.2s">
									<img src="{{url('public/pagina/img/ptp.png')}}" >
									<h3 class="testimonial-title"><br>@lang('index.peertopeer.titulo')</h3>
									<p class="description">@lang('index.peertopeer.parrafo')</p>
								</center>
							</div>
							<div class="testimonial">
								<center class="wow fadeInLeft">
									<img src="{{url('public/pagina/img/nulas.png')}}">
									<h3 class="testimonial-title"><br>@lang('index.comisiones.titulo')</h3>
									<p class="description">@lang('index.comisiones.parrafo')</p>
								</center>
							</div>	 	 
							<div class="testimonial">
								<center class="wow fadeInLeft">
									<img src="{{url('public/pagina/img/global.png')}}">
									<h3 class="testimonial-title"><br>@lang('index.global.titulo')</h3>
									<p class="description">@lang('index.global.parrafo')</p>
								</center>
							</div>
								 
						</div>
					</div>
				</div><!--- END ROW -->			
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END TESTOMINIALS -->
		<section class="yellow">
			<br>
				<div class="container">
					<br>
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center">Descarga nuestra wallet Onix</h1>
						<br>
						<center>
							<img style="padding-right:15px;" src="{{asset('public/pagina/img/index/windows.png')}}" alt="">
							<img style="padding-right:15px;" src="{{asset('public/pagina/img/index/android.png')}}" alt="">
							<img  src="{{asset('public/pagina/img/index/linux.png')}}" alt="">
						</center>
						<center>
							<br>
							
							<a href="{{url('descarga')}}" class="btn" style="background-color:#282828; border-radius:10px; text-decoration:none; color:#f2f2f2;">Descargar App</a>
						</center>
						<br>
						<p class="text-center">Descarga tu wallet para disfrutar</p>
						<p class="text-center"><small> de los beneficios que te ofrece Onix</small></p>
					</div>
				</div>
			<br>			
			<br>			
		</section>
		<section id="comienzaminar" style="background-color:#f2f2f2;">
			<div class="container">
				<br>
				<br>
				<h1 class="text-center">Comienza a minar Onixcoin</h1>
				<center>
					<img class="img-responsive" src="{{url('public/pagina/img/index/mineria_index.png')}}" alt="">
					<a href="#" class="btn yellow" style="border-radius:10px; text-decoration:none; color:#282828;">Comenzar Ahora</a>							
				</center>
				<br>
				<br>
			</div>
		</section>


		<!-- START BLOG -->
		<section class="client_review section-padding secciones">
			<div class="container">
				<div class="row wow fadeIn" >
					<div>
					<br>
					<br>
						<div class="section-title text-center wow zoomIn">
							<h1>@lang('index.noticias.titulo')</h1>
							<p>@lang('index.noticias.parrafo')</p>
						</div>
						
						
						
					</div>
				</div>	
					<br>
					<br>
			</div>	
			<div class="clearfix"></div>
		</section>
@endsection
@push('js')
	<script type="text/javascript">
		$(document).ready(function(){
			var height = 0, heightImg = 0;
			setTimeout(function(){
				$(".art").each(function(ll, v){
			        console.log($(v).height());
			        if($(v).height() > height){
			            height =  $(v).height();
			        }
			    });
			    $(".art").height(height + 20);
			}, 2000);
			setTimeout(function(){
				$(".img-noticias").each(function(ll, v){
			        if($(v).height() > heightImg){
			            heightImg =  $(v).height();
			        }
			    });
			    $(".img-noticias").height(heightImg);
			}, 3000);
			
			/*
		    $(".art").each(function(ll, v){
		        console.log($(v).height());
		        if($(v).height() > height){
		            height =  $(v).height();
		            //console.log(height);
		        }
		    });*/
		});
	</script>
@endpush