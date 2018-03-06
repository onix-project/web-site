@extends('layouts.default')
@section('content')
<section class="row" style="margin-top: 12%;margin-bottom: 5%;">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
        <div class="col-md-offset-2"><br><br><br><br><br><br>
            <!--<ul class="gw-nav gw-nav-list menu-btn">
                <h4>Preguntas frecuentes</h4><br>
                <li><button class="btn btn-primary btn-md btn-block ">Comprar onix</button></li>
                <li><button class="btn btn-primary btn-md btn-block">Descargar wallet</button></li>
                <li><button class="btn btn-primary btn-md btn-block">Pool de mineria</button></li>
                <li><button class="btn btn-primary btn-md btn-block">Explorer</button></li>
                <li><button class="btn btn-primary btn-md btn-block">Cambio de onix</button></li>
                <li><button class="btn btn-primary btn-md btn-block">Registro</button></li>
            </ul>  -->
        </div>        
    </div>

    <div class="col-md-8 col-lg-8 col-lg-8 col-sm-12 questions menu-button">
        <p>¡Hola! Te queremos ayudar</p>
        <h1>Preguntas frecuentes</h1><br>


        <div class="gw-sidebar">
          <div id="gw-sidebar" class="gw-sidebar">
            <div class="nano-content">
              <ul class="gw-nav gw-nav-list">
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Dónde esta mi orden de compra?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Diríjase a la sección mis ordenes, allí podrá visualizar el historial de ordenes de compras.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Dónde descargo mi wallet?</span> <b class="gw-arrow icon-arrow-up8"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p> Diríjase a onixcoin.com en el menu descargas, sección wallet; podrá descargar la wallet de su preferencia.</p></li>
                  </ul>
                </li>
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Dónde puedo obtener mi dirección wallet para recibir mis onix?</span> <b class="gw-arrow icon-arrow-up8"></b> </a>
                  <ul class="gw-submenu">
                    <li> 
                        <p>Si su wallet está instalada en un computador diríjase al menu superior sección recibir. Allí podra visulizar las direcciones wallet que podrá utilizar.</p>
                        <p>Si su wallet está en android diríjase la sección recibir y podrá copiar su dirección.</p>
                    </li>
                  </ul>
                </li>
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Por qué no recibo el correo de confirmación al registrarme?</span> <b></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Es posible que tarde un poco en recibir el correo de confirmación debido al alto volumen de trabajo que podría tener el servicio de correo. Pasado los 5 minutos sin recibir el correo puede revisar su bandeja de correos no deseados, si en dicha bandeja no se encuentra el correo escribenos a contact@onixcoin.com</p></li>
                  </ul>
                </li>
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cuándo se hace efectivo el envío de mis Onix?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Una ves confirmada la transferencia en nuestro(s) banco(s) se realiza el envío de los Onix. Este proceso no debe tardar más de 24 horas para transferencias del mismo banco y lapso no mayor a 72 horas para transferencias de bancos distintos. </p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Si me equivoco en el monto a transferir, hay reembolso?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>No se realizan reembolso, podría crear una nueva orden de compras de Onix por el monto de bolívares que transfirió.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cuantos bancos puedo usar para pagar una orden?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Se aconseja que transfiera el monto total a pagar desde un único banco. Esto con el propósito de que al momento de verificar la transferencia sea con mayor prontitud y así lograr cumplir con los tiempos acordados para el envío de Onix.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cuantas transacciones se pueden realizar en un pago de una orden?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Se aconseja que realice una única transacción para el pago del monto total. Esto con el propósito de que al momento de verificar la transferencia sea con mayor prontitud y así lograr cumplir con los tiempos acordados para el envío de Onix.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cuánto es el mínimo y máximo para la compra de Onix?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Puede realizar una compra mínima de 1 Onix y con límite de 200 millones en bolívares por orden.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cómo cambio mis Onix a USD o Bs?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Para realizar el proceso de conversión debe primeramente pasar de Onix a bitcoins (BTC) y posteriormente podrá enviar esos bitcoins (BTC) a localbitcoins para su conversión a USD o Bs.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Puedo cambiar mis ónix a BTC o alguna otra criptomoneda?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>El proceso de Onix a bitcoins (BTC) u otra criptomoneda se realiza en los exchanges donde se encuentra Onix. Por ejemplo yobit, tradesatoshi.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Si excedo el tiempo máximo de 45 min de la orden que debo hacer?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Pasado los 45 minutos después de realizar la orden de compras de Onix, la orden automáticamente se cancela y deberá entonces crear una nueva orden de compras bajo los parámetros de la cotización en dicho momento.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Qué es un número de referencia?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Son los números que identifican una transferencia bancaria. En algunos bancos le dicen número de recibo.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Qué es dirección wallet?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Las direcciones wallet son números y letras que alternan tanto mayúsculas como minúsculas. De 34 caracteres <br>
                            Ejemplo: 549gTdH89B3wmjUhpoiXk32TeyWVwgADcT</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cómo se generan estás direcciones?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Las direcciones de monedero se generan automáticamente al registrarse por primera vez en el proveedor de su cartera.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Para qué sirven estás direcciones?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Las direcciones sirven para mantener sus Onix seguros y protegidos.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Qué otros usos tienen estás direcciones?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Se utilizan para realizar y recibir pagos de otras cuentas</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Qué es un Exchange?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Un exchange es un sitio que te permite operar entre distintas divisas, digitales y fiat. Los exchanges son mercados financieros que permiten bajo el libre juego de oferta y demanda darle un valor económico a Bitcoin. <br><br>
                    Estos exchanges pueden ser simple intermediarios entre usuarios, o proveer además funcionalidades más complejas de trading
                    </p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cuáles son los Exchange donde Onix pertenece?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Tradesatoshi.com <br>
                    Yobit.net
                    </p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Dónde puedo ver el ranking de Onix?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Coinmarketcap, Cifras de mercado de criptomonedas rankings, tablas y más.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Que es FINTECH?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>La palabra Fintech es un término compuesto que viene del inglés y que sale de unir la primera sílaba de las palabras Finance y Technology, es decir, es una palabra que surge de la unión de dos y que aglutina a todas aquellas empresas de servicios financieros que utilizan la última tecnología existente para poder ofrecer productos y servicios financieros innovadores.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cuánto vale un Onix?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>El precio del Onix depende de la oferta y la demanda: cuando hay mucha demanda el precio sube y cae cuando hay poca.</p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Cómo funciona un wallet?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Empezamos contradiciendo un poco la definición de wallet, ya que las criptomonedas o tokens se guardan en su clave privada y no en el wallet, la clave privada es un código de múltiples caracteres 100% seguro que tú sólo podrás saber, y una clave pública, un código público que se encarga de señalar la cantidad de criptomonedas o tokens que posee tu llave privada o wallet. El wallet también hace de libro mayor de tus transacciones. <br><br>
                    La propiedad de tu clave privada te proporciona control total sobre tus criptomonedas asociadas a sus correspondientes claves públicas por lo que es sumamente importante que sólo tú conozcas tus claves privadas.
                    </p> </li>
                  </ul>
                </li> 
                <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">¿Existen diferentes tipos de Wallet?</span> <b class="gw-arrow"></b> </a>
                  <ul class="gw-submenu">
                    <li> <p>Si, las wallet pueden ser hot wallet o cartera caliente y cold wallet o cartera fría, las primeras son las que están conectadas a internet de forma permanente y las segundas son las carteras que no tienen porque estar conectadas a internet. Las carteras también pueden ser híbridas. Estas son los tipos de wallet que existen: <br>
                    Wallet en la nube o en línea <br>
                    Wallet de escritorio o de ordenador <br>
                    Wallet de smartphone <br>
                    Paperwallet o monedero de papel <br>
                    Hardwallet o wallet de soporte físico
                    </p> </li>
                  </ul>
                </li>

                 </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>

<div class="clearfix"></div>
</section>

@endsection
@push('js')
<script>
  var $imagen1, $imagen2;
		$imagen1 ="{{url('public/img/logos/blanco.png')}}"
		$imagen2 ="{{url('public/img/logos/blanco.png')}}"
	$(document).ready(function () {
    var nav = function () {
        $('.gw-nav > li > a').click(function () {
            var gw_nav = $('.gw-nav');
            gw_nav.find('li').removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');

            var checkElement = $(this).parent();
            var ulDom = checkElement.find('.gw-submenu')[0];

            if (ulDom == undefined) {
                checkElement.addClass('active');
                $('.gw-nav').find('li').find('ul:visible').slideUp();
                return;
            }
            if (ulDom.style.display != 'block') {
                gw_nav.find('li').find('ul:visible').slideUp();
                gw_nav.find('li.init-arrow-up').removeClass('init-arrow-up').addClass('arrow-down');
                gw_nav.find('li.arrow-up').removeClass('arrow-up').addClass('arrow-down');
                checkElement.removeClass('init-arrow-down');
                checkElement.removeClass('arrow-down');
                checkElement.addClass('arrow-up');
                checkElement.addClass('active');
                checkElement.find('ul').slideDown(300);
            } else {
                checkElement.removeClass('init-arrow-up');
                checkElement.removeClass('arrow-up');
                checkElement.removeClass('active');
                checkElement.addClass('arrow-down');
                checkElement.find('ul').slideUp(300);

            }
        });
        $('.gw-nav > li > ul > li > a').click(function () {
            $(this).parent().parent().parent().removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');
            $(this).parent().addClass('active')
        });
    };
    nav();
});


</script>
@endpush