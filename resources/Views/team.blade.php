@extends('layouts.default')
@section('titulo', 'ONIX | TEAM')

@push('css')
<style type="text/css">
	#contenedorTeam h2 span:after{content: " ";border: 2px solid #e0b913;width: 190px;margin-top:36px;z-index: 1;position: absolute;display: inline-block; margin-left: -123px;}

	.item-team{
		position: relative;
		font-size: 8pt;
	}

	.item-team:hover .overlay{
		opacity: 0.8;
	}

	.item{padding: 1rem;}

	.item:hover .barraAmarilla{
		background: #e0b913 !important;
		transition: 1s ease;
	}

	.item-team .img-team{
		max-height: 470px;
    	width: 100%;
    	border-radius: 5px;
	}			

	.nombreTeam{
	    margin-top: 20px;
	    font-weight: 700;
	}

	.barraAmarilla{
		background: #FFF;
		height: 2px;
		width: 200px;
	}

	.overlay {
	    position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		height: 100%;
		width: 100%;
		opacity: 0;
		transition: .5s ease;
		background-color: #0e0e0e;
	}

	.overlay .descripcionTeam{
		bottom: 0px;
	    color: #EAEAEA;
	    position: absolute;
	    text-align: left;
	    margin: 1rem;
	    padding: 1rem;
	    border-left: 2px solid #e0b913;
	}

	.owl-theme .owl-controls .owl-page span{background-color:#A8A8A8 !important;}

	#contenedorTeam{
		background: url("{{url('public/pagina/img/team/bg_blockchain.png')}}") no-repeat, linear-gradient(to bottom, #282828 0%,#282828 50%,#282828 50%,white 50%,white 100%);
	}

	.owl-theme .owl-controls{position: absolute; margin-top: 120px;}
	.owl-theme .owl-controls .owl-buttons .owl-next {left: 1070px;}
	.owl-prev:before, .owl-next:before{font-size: 40px; color: #b7b7b7 !important;}
	.owl-prev:before{content: "\f0d9" !important;}
	.owl-next:before {content: "\f0da" !important;}

	@media (max-width: 425px){
		#carousel-team{
			margin: 10px auto;
			float: none;
		}

		.item-team{
			width: 220px !important;
		}

		.barraAmarilla{
			width: 220px !important;
		}

		.item{padding: 0.5rem;}

		.nombreTeam{color: #e0b913 !important;}
		.section-team{margin-top: 10%;}
	}

	@media (max-width: 1024px){
		.owl-next{left: 885px !important;}
	}
	@media (max-width: 768px){
		.owl-next{left: 660px !important;}
	}
</style>
@endpush

@section('content')
	<section class="section-team">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contenedorTeam">
				<div class="container">
				<br>
				<br>
				<br>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px;">
						<h2 style="margin-top:20px; color:#FFF;">
							<span style="color: #FFF;"> TEAM ONIX </span>
						</h2>

						<div class="clearfix"></div>

						<h4 style="margin-top:10px; color:#FFF;">
							<span> @lang('team.conoce_team') </span>
						</h4>
					</div>
				</div>
				<div class="container">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 25px;">
						<div id="carousel-team" class="owl-carousel owl-theme col-lg-12 col-md-12 col-sm-11 col-xs-10" style="display: block;">
							<!-- SALAZAR -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/angel_salazar.png')}}" alt="" class="img-team">
										<div class="overlay">
											<div class="descripcionTeam">
												<b> @lang('team.estudios'): </b> 

												@lang('team.estudios_salazar')
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > ÁNGEL SALAZAR  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_salazar') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- PEREZ -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/pablo_perez.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<b> @lang('team.estudios'): </b> 

												@lang('team.estudios_perez')
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > PABLO PÉREZ  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_perez') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- BEJARANO -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/angel_bejarano.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<p> <b> @lang('team.estudios'): </b>  @lang('team.estudios_bejarano') </p>
												<p> <b> @lang('team.lenguajes'): </b> @lang('team.lenguajes_bejarano') </p>
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > ÁNGEL BEJARANO  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_bejarano') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- CORTEZ -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/jose_cortez.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<b> @lang('team.estudios'): </b> 

												@lang('team.estudios_cortez')
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > JOSÉ CORTEZ  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_cortez') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- Rodolfo Palacio -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/rodolfo_palacio.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<p> <b> @lang('team.estudios'): </b>  @lang('team.estudios_palacio') </p>
												<p> <b> @lang('team.lenguajes'): </b> @lang('team.lenguajes_palacio') </p>
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > RODOLFO PALACIO  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_palacio') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- Mayrene Salcedo -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/mayrene_salcedo.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<p> <b> @lang('team.estudios'): </b>  @lang('team.estudios_salcedo') </p>
												<p> <b> @lang('team.habilidades'): </b> @lang('team.skills_salcedo') </p>
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > MAYRENE SALCEDO  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_salcedo') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- Pedro Silva -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/pedro_silva.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<p> <b> @lang('team.estudios'): </b>  @lang('team.estudios_silva') </p>
												<p> <b> @lang('team.lenguajes'): </b> @lang('team.lenguajes_silva') </p>
												<p> <b> Frameworks: </b> @lang('team.frameworks_silva') </p>
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > PEDRO SILVA  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_silva') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- Jonathan Jimenez -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/jonathan_jimenez.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<p> <b> @lang('team.estudios'): </b>  @lang('team.estudios_jimenez') </p>
												<p> <b> @lang('team.lenguajes'): </b> @lang('team.lenguajes_jimenez') </p>
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > JONATHAN JIMÉNEZ  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_jimenez') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- Johan Romero -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/johan_romero.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<p> <b> @lang('team.estudios'): </b>  @lang('team.estudios_romero') </p>
												<p> <b> @lang('team.habilidades'): </b> @lang('team.skills_romero') </p>
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > JOHAN ROMERO  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_romero') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
							<!-- Cecilia Cortez -->
							<div class="item">
								<center>
									<div class="item-team">
										<img src="{{url('public/pagina/img/team/cecilia_cortez.png')}}" alt="" class="img-team">

										<div class="overlay">
											<div class="descripcionTeam">
												<p> <b> @lang('team.estudios'): </b>  @lang('team.estudios_cecilia') </p>
											</div>
										</div>
									</div>

									<div class="nombreTeam texto-gris-oscuro" > CECILIA CORTEZ  </div>
									<div class="cargoTeam texto-gris-claro"> @lang('team.cargo_cecilia') </div>
									<div class="barraAmarilla"></div>
								</center>
							</div>
						</div> <!-- FIN CAROUSEL -->
					</div>
				</div>
			</div>
		</div>	
	</section>

@endsection

@push('js')

<script type="text/javascript">
	var $imagen1, $imagen2;
		$imagen1 ="{{url('public/img/logos/blanco.png')}}"
		$imagen2 ="{{url('public/img/logos/blanco.png')}}"
	$(function(){
		var $carousel = $('#carousel-team');
		
		if($(window).width() > 425){
			$carousel.owlCarousel({
			    margin:20,
			    pagination : false,
			    responsiveClass:true,
			    autoPlay:30000,
				stopOnHover:true,
			    items:4,
			    navigation:true,
			    navigationText : false,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:3,
			            nav:true
			        }
			    }
			});
		}

		$(".section-team").css("margin-top", $(".menu-top > .container").height());
	});
</script>
@endpush	
