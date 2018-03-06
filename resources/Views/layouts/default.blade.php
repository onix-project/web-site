<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    @stack('css')
</head>
<body data-spy="scroll" data-offset="80">
	<!-- START PRELOADER -->
    <!--<div class="preloader">
        <div class="status">
            <div class="status-mes"><h4>Yuafa</h4></div>
        </div>
    </div>-->
    <!-- END PRELOADER -->	
    
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding:0;">
        <div id="content-flow" > 
            <section class="row" id="section-content">
                @include('partials.menu')
                @yield('content')
            </section>
            <div class="clearfix"></div>
            @include('partials.footer')
        </div>
    </div>

    <div id="rigth-menu" class="col-md-3 col-lg-3 col-sm-6 col-xs-12  animated" style="display:none;">    
        <div id="rigth-menu-content">
            <div id="cerrar" style="color:#fff;">
                <i  style="color:#fff;" class="fa fa-close"></i>
            </div>
            <div id="menu-collapse">
                <div class="hidden-md hidden-lg">
                    <a class="page-scroll" target="_blank" href="http://ventas.onixcoin.com/">@lang('menu.comprar')</a>
                    <a class="page-scroll" href="{{route('roadmap')}}">@lang('menu.roadmap')</a>
                    <a class="page-scroll" target="_blank" href="http://explorer.onixcoin.com/">@lang('menu.explorer')</a>
                   <!-- <a class="page-scroll" target="_blank" href="http://pool.onixcoin.com/">@lang('menu.pool')</a>-->
                    <a href="{{url('plan_estrategico')}}" data-toggle="collapse">@lang('menu.plan_estrategico')</a>
                </div> 

                <a href="#acerca" data-toggle="collapse">@lang('menu.acerca') <span class="flechita_menu"> <i class="fa fa-chevron-down"></i> </span> </a>
                <div id="acerca" class="collapse">
                        <a href="#datosinteres" data-toggle="collapse">
                            Datos de interes <span class="flechita_menu"> <i class="fa fa-chevron-down"></i> </span>
                        </a>
                        <div id="datosinteres" class="collapse">
                            <a href="{{url('ficha')}}#ficha">Ficha Tecnica</a>
                            <a href="{{url('ficha')}}#exchange">Exchange</a>
                            <a href="{{url('ficha')}}#ranking">Ranking</a>
                        </div>
                        @if(App::isLocale('es'))
                            <a href="{{url('public/img/WHITE-PAPER-ESPANOL.pdf')}}" target="_blank">White Paper</a>
                        @else
                            <a href="{{url('public/img/WHITE-PAPER-INGLES.pdf')}}" target="_blank">White Paper</a>
                        @endif
                        <a href="{{url('roadmap')}}">Road map</a>
                </div>
                <a href="#comunidad" data-toggle="collapse">@lang('menu.comunidad') <span class="flechita_menu"> <i class="fa fa-chevron-down"></i> </span></a>
                <div id="comunidad" class="collapse">
                        <a href="https://bitcointalk.org/" target="_blank">BitcoinTalk</a>
                        <a href="#">Github</a>
                        <a href="#">Foro</a>
                        <a href="http://blog.onixcoin.com/" target="_blank">Blog Onixcoin</a>
                </div>
                <a href="{{url('descarga')}}">@lang('menu.descargas')</a>
                <a href="{{url('team')}}">@lang('menu.team')</a>
                <a href="{{url('rentabilidad')}}">@lang('menu.calculadora')</a>
                <a href="#">Soporte</a>
            </div>
            <div id="menu-sociales">
                    <li><a href="https://www.instagram.com/onixcoin/?hl=es"><i class="fa fa-instagram fa-2x"></i></a></li>	
                    <li><a href="https://www.facebook.com/onixcoin"><i class="fa fa-facebook fa-2x"></i></a></li>		
                    <li><a href="https://twitter.com/onix_coin"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="https://www.youtube.com/user/angelrafaelsalazar/videos"><i class="fa fa-youtube fa-2x"></i></a></li>
                    <li><a href="https://web.telegram.org/#/im?p=@onixcoin"><i class="fa fa-telegram fa-2x"></i></a></li>
            </div>
            
        </div>
    </div>    
    @include('partials.footer-libs')
</body>
</html>