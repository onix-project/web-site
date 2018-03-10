@extends('layouts.default')
@section('titulo', 'ONIX | Calculadora de Rentabilidad')
@push('css')
    <style>
        .top{
            background: #282828;
            border-radius: 25px;
            padding: 8px;
            text-align: center;
            color: #E0B913;
            width:150px;
            -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            -moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
        }
        .left{
            background: #282828;
            border-radius: 25px;
            padding: 8px;
            text-align: center;
            color: #fff;
            width:150px;
            -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            -moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
        }
        .moneda-pill{
            color:#282828;
            background: #a8a8a8;
            border-radius: 25px;
            text-align: center;
            padding: 8px;
            width:150px;
            -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            -moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
        }
        .moneda-blanca{
            color:#282828;
            background: #fff;
            border-radius: 25px;
            text-align: center;
            padding: 8px;
            width:150px;
            -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            -moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
            box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.24);
        }
        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }
        table>thead>tr>th {
            padding: 3px !important;
        }

        .titulo{
            color: #555;
            font-family: roboto-condensed;
            font-weight: normal;
            width: 300px;
            padding: 10px;
        }

        .subtitulo{
            color:#a8a8a8;
            font-family: roboto-condensed;
            font-weight: normal;
        }
    </style>
@endpush
@section('content')
<br>
<br>
<br>
<br>
    <div class="container">
        
        <div class="row"  style="padding:20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <center>
                    <h3 class="titulo">@lang('rentabilidad.titulo')</h3>
                    <h4 class="subtitulo" >
                        @lang('rentabilidad.hash')
                    </h4>
                </center>
            </div>
        </div>

        <div class="row" style="padding:20px;">
            <div class="col-md-2 col-md-offset-4 col-xs-4" style="padding-right:2px;">
                <input type="text" name="hashpower" id="hashpower" class="form-control" placeholder="potencia de minado" style="border-radius: 22px 0px 0px 22px; text-align:right;">
            </div>
            <div class="col-md-1 col-xs-4" style="padding-left:2px;padding-right:2px;">
                <select class="form-control"name="type" id="type" style=" background-color:#dbdbdb; color:#000;" >
                    <option value="1000000000"><strong> H/s </strong></option>
                    <option value="1000000"><strong>KH/s</strong </option>
                    <option value="1000"><strong>MH/s</strong></option>
                    <option value="1"><strong>GH/s</strong></option>
                </select>
            </div>
            <div class="col-md-2 col-xs-4" style="padding-left:2px;">
                <button class="btn yellow" id="calc" style="border-radius: 0px 22px 22px 0px; color:#000;"><strong>Calcular</strong></button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="background:#f5f5f5;">
            <br>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <th > <div class="moneda-pill">@lang('rentabilidad.moneda')</div></th>
                        <th ><div class="top"> @lang('rentabilidad.dia') </div></th>
                        <th ><div class="top"> @lang('rentabilidad.week')</div></th>
                        <th ><div class="top"> @lang('rentabilidad.mes') </div></th>
                        <th ><div class="top"> @lang('rentabilidad.anno')</div></th>
                    </thead>
                    <tbody>
                        <tr style="padding-bottom:5px;">
                            <td> <div class="left"> ONX </div></td>
                            <td> <div id="onx_dia" class="moneda-blanca"></div></td> 
                            <td> <div id="onx_semana" class="moneda-blanca"></div></td> 
                            <td> <div id="onx_mes" class="moneda-blanca"></div></td> 
                            <td> <div id="onx_anno" class="moneda-blanca"></div></td> 
                        </tr>
                        <tr>
                            <td ><div class="left"> BTC </div></td>
                            <td> <div id="btc_dia" class="moneda-blanca"></div> </td>
                            <td> <div id="btc_semana" class="moneda-blanca"></div></td>
                            <td> <div id="btc_mes" class="moneda-blanca"></div></td>
                            <td> <div id="btc_anno" class="moneda-blanca"></div></td>
                        </tr>
                        <tr>
                            <td ><div class="left"> USD </div></td>
                            <td> <div id="usd_dia" class="moneda-blanca"></div></td>
                            <td> <div id="usd_semana" class="moneda-blanca"></div></td>
                            <td> <div id="usd_mes" class="moneda-blanca"></div></td>
                            <td> <div id="usd_anno" class="moneda-blanca"></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
<br>

@endsection
@push('js')
<script>
	var $imagen1, $imagen2;
	$imagen1 ="{{url('public/img/logos/blanco.png')}}"
	$imagen2 ="{{url('public/img/logos/blanco.png')}}"
</script>
<script>
    var price_usd = 0;
    var $price_usd = 0;
    $(function(){
        $('#calc').click(function(e){
            e.preventDefault();
            calcular();
        });
        $('.moneda-blanca').hide();
    });

    function infoONX(prices_btc){
        $.getJSON('{{ route('precios') }}', function( json ) {
            coins_day = 28800;
            hashrate = json.data[0].hashrate ;
            price = prices_btc;
            hashing_power = $('#hashpower').val();
            power_selector = $('#type').val();

            result = (hashing_power/power_selector)*coins_day/hashrate;
            gains = result*price;

            $onx_dia = result.toFixed(8);
            $btc_dia = gains.toFixed(8);

            $('#onx_dia').text($onx_dia);
            $('#onx_semana').text(($onx_dia * 7).toFixed(8));
            $('#onx_mes').text(($onx_dia * 30).toFixed(8));
            $('#onx_anno').text(($onx_dia * 365).toFixed(8));

            $('#btc_dia').text($btc_dia);
            $('#btc_semana').text(($btc_dia * 7).toFixed(8));
            $('#btc_mes').text(($btc_dia * 30).toFixed(8));
            $('#btc_anno').text(($btc_dia * 365).toFixed(8));

            $('#usd_dia').text(($onx_dia * price_usd).toFixed(8));
            $('#usd_semana').text((( $onx_dia *price_usd) * 7).toFixed(8));
            $('#usd_mes').text((( $onx_dia *price_usd) * 30).toFixed(8));
            $('#usd_anno').text((( $onx_dia *price_usd) * 365).toFixed(8));
            $('.moneda-blanca').show();
            return true;
        });
    }
    function calcular () {
        $.ajax({
            url: 'https://api.coinmarketcap.com/v1/ticker/onix/',
            type: 'get',
            dataType: 'json',            
            success: function (price_json) {
                //console.log(price_json);
                price_btc = price_json[0]['price_btc'];
                price_usd = price_json[0]['price_usd'];
                infoONX(price_btc);
            }
        });
    };
</script>
@endpush