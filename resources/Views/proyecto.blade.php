@extends('layouts.default')
@section('titulo', 'ONIX | PROYECTO')
@push('css')
	<style type="text/css">
		.proyecto_onix{
			background-color: #FFF;
    		padding: 0px !important;
		}
	</style>
@endpush
@push('js')
<script>
  var $imagen1, $imagen2;
  $imagen1 ="{{url('public/img/logos/blanco.png')}}";
  $imagen2 ="{{url('public/img/logos/blanco.png')}}";

	$(function(){
		$(".btn-click").click(function(){
			var click = $(this).attr('ident');
			$(".active").each(function(x, y){
				if($(y).attr('ident') != click){
					$(y).removeClass('active');
				}
			});
		});
	})
</script>
@endpush
@section('content')
	<div class="clearfix" style="min-height: 70px;"></div>

	<div class="container-fluid proyecto_onix">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contProyecto" style="padding: 0px; height: 573px; background-color: #f9f9f9;">

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 divIzqProyecto" style="z-index: 2; padding-top: 15%;">
				    <h2 class="hidden-xs" style="font-size: 40pt; color: #FFF; margin-left: 80px; line-height: 1.2; font-weight:normal;"> 
		      		@lang('proyecto.titulo_proyecto_onix')
	      	  </h2>
            <h2 class="hidden-lg hidden-md hidden-sm" style="font-size: 40pt; color: #000; line-height: 1.2; font-weight:normal; text-align: center;"> 
              @lang('proyecto.titulo_proyecto_onix_xs')
            </h2>
            
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 descripcionProyecto text-center" style="z-index: 2">
					<p style="color: #000;">
						@lang('proyecto.descripcion_proyecto_onix')
					</p>

					<a class="block-menu" href="{{ route('plan_estrategico') }}" style="padding: 10px 20px !important; margin-top: 15px;"> @lang('proyecto.boton_plan') </a>
				</div>
				
				<img src="{{url('public/pagina/img/proyecto/bg_proyecto.jpg')}}" class="img-responsive pull-right hidden-xs" style="position: absolute; top: 0px; z-index: 1;" />
			</div>			
		</div>
	</div>

	<div class="container-fluid container_vision" style="padding: 0px; background-color: #d5a612;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contVision" style="min-height: 480px; padding: 150px 50px;">
				<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-6 col-md-7 col-sm-7 col-xs-7 text-justify txtVision" style="z-index: 2;">
					<h1 class="texto-gris-oscuro"> @lang('proyecto.vision.titulo') </h1>
					<h3 class="texto-gris-oscuro"> @lang('proyecto.vision.parrafo') </h3>
				</div>

				<img src="{{url('public/pagina/img/proyecto/bg_vision.jpg')}}" class="img-responsive" style="position: absolute; top: 0px; right: 0px; z-index: 1;"/>
			</div>
		</div>
	</div>

	<div class="container-fluid container_mision" style="padding: 0px;">
		<div class="row" style="background-color: #373737;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contMision">
				<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center txtMision" style="z-index: 2;">
					<h1 class="texto-blanco"> @lang('proyecto.mision.titulo') </h1>
					<h3 class="texto-blanco"> @lang('proyecto.mision.parrafo') </h3>
				</div>

				<img src="{{url('public/pagina/img/proyecto/bg_mision.jpg')}}" class="img-responsive" style="position: absolute; top: 0px; right: 0px; z-index: 1;">
			</div>
		</div>
	</div>

  <div class="clearfix"></div>

	<div class="container container_conoce_onix" style="margin-top: 140px;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contConoceOnix" style="margin-top: 20px;">
		      <div class="container div-principal center-block ">
		      	<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
			      	<h1 class="text-center titulo_subrayado" style="font-weight: normal; padding: 10px;"> 
			      		<span style="font-family: roboto-condensed !important;" > @lang('proyecto.conoce.titulo') </span> 
			      		<b> @lang('proyecto.onixcoin') </b> 
			      	</h1>
			      	<h3 class="text-center" style="color:#A8A8A8; font-weight: normal;"> @lang('proyecto.conoce.parrafo') </h3>
		      	</div>
		      </div>
		    </div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div id="tab" class="btn-group" data-toggle="buttons-radio" style="width: 100%;">
        <center>
          <a href="#core" ident="core" class="btn btn-large btn-info btn-click active" data-toggle="tab">CORE</a>
          <a href="#enterprise" ident="enterprise" class="btn btn-large btn-click btn-info" data-toggle="tab">ENTERPRISE</a>
          <a href="#loans" ident="loans" class=" btn btn-large btn-info btn-click" data-toggle="tab">LOANS</a>
          <a href="#ambassadors" ident="ambassadors" class=" btn btn-large btn-info btn-click" data-toggle="tab">AMBASSADORS</a>
        </center>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="core">
          <div class="row">
              <div class="span9">
                <div>
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label> CORE </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                      @lang('roadmap.core1.definicion')
                    </div>
                   
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-pane" id="enterprise">
          <div class="row">
              <div class="span9">
                <div>
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label> ENTERPRISE </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                        @lang('roadmap.enterprise1.definicion')
                    </div>
                   
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-pane" id="loans">
          <div class="row">
              <div class="span9">
                <div>
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label> LOANS </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                      @lang('roadmap.loans1.definicion')
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-pane" id="ambassadors">
          <div class="row">
              <div class="span9">
                <div>
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label> AMBASSADORS </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                      @lang('roadmap.ambassadors1.definicion')
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
			</div>

		</div>
	</div>
@endsection