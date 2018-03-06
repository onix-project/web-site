@extends('layouts.default')
@section('titulo', 'ONIX | ROADMAP')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 hidden-xs">
      <div class="container div-principal center-block">
        <div class="text-descarga" style="text-align: center; border: 1px solid #4d4d4d; border-left: none; border-right: none;border-bottom: none;border-top-width: 2px;">
          <div style="background: #fff;margin-top: -14px;width: 30%;margin-left: auto;   margin-right: auto;">
             <label style="font-size: 23px; font-weight: 900;"> ROAD MAP </label>
             <label style="font-size: 23px; font-weight: 900; color: #E0B913"> 2018 / 2019 </label> 
          </div>
        </div>    
      </div>
    </div>
  </div>
  <div class="row">
    <div class="span12 hidden-xs">
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
                <div class="hidden-xs">
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label style="margin-top: 11px;font-size: 24px;font-weight: 900; color: #e0b913;margin-left: 10px;"> CORE </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                      @lang('roadmap.core1.definicion')
                    </div>
                   
                  </div>
                  <ul class="timeline">
                    <li><div class="tldate"> 
                        <label style="margin-top: 10px;font-size: 30px;">2018 </label>
                      </div>
                    </li>
                    @if(trans('roadmap.core1.2018.enero.contenido'))          
                      <li id="enero">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea wow rollIn"></div>
                        <div class="tl-circ-superior-peq wow rollIn"></div>
                        <div class="tl-circ-peq wow rollIn"></div>
                        <div class="timeline-panel wow fadeInDown">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div  class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.core1.2018.enero.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" data-wow-delay="0.5s" style="float: left;">
                            @lang('roadmap.core1.2018.enero.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.febrero.contenido'))          
                      <li id="febrero" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea-derecha wow rollIn"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn"></div>
                        <div class="tl-circ-peq-derecha wow rollIn"></div>
                        <div class="timeline-panel-derecha wow fadeInDown">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.core1.2018.febrero.mes')
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown wow fadeInDown" style="float: left;">
                              @lang('roadmap.core1.2018.febrero.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.marzo.contenido'))
                      <li id="marzo">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea wow rollIn"></div>
                        <div class="tl-circ-superior-peq wow rollIn"></div>
                        <div class="tl-circ-peq wow rollIn"></div>
                        <div class="timeline-panel wow fadeInDown">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">    @lang('roadmap.core1.2018.marzo.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.core1.2018.marzo.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.abril.contenido'))
                      <li id="abril" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea-derecha wow rollIn"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn"></div>
                        <div class="tl-circ-peq-derecha wow rollIn"></div>
                        <div class="timeline-panel-derecha wow fadeInDown">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.core1.2018.abril.mes')
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.core1.2018.abril.contenido')
                            </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.mayo.contenido'))
                      <li id="mayo">
                      <div class="tl-circ-superior wow rollIn"></div>
                      <div class="tl-circ wow rollIn"></div>
                      <div class="tl-linea wow rollIn"></div>
                      <div class="tl-circ-superior-peq wow rollIn"></div>
                      <div class="tl-circ-peq wow rollIn"></div>
                      <div class="timeline-panel wow fadeInDown">
                        <div class="tl-heading">
                        <div class="anio">
                          <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                        </div>
                        <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                          <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">    @lang('roadmap.core1.2018.mayo.mes')
                          </label>
                        </div>
                        </div>
                        <div class="tl-body wow fadeInDown" style="float: left;">
                          @lang('roadmap.core1.2018.mayo.contenido')
                        </div>
                      </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.junio.contenido'))
                      <li id="junio" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea wow rollIn"></div>
                        <div class="tl-circ-superior-peq wow rollIn"></div>
                        <div class="tl-circ-peq wow rollIn"></div>
                        <div class="timeline-panel wow fadeInDown">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">    @lang('roadmap.core1.2018.junio.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.core1.2018.junio.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.julio.contenido'))
                      <li id="julio">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea wow rollIn"></div>
                        <div class="tl-circ-superior-peq wow rollIn"></div>
                        <div class="tl-circ-peq wow rollIn"></div>
                        <div class="timeline-panel wow fadeInDown">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">
                               @lang('roadmap.core1.2018.julio.mes') 
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.core1.2018.julio.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.agosto.contenido'))
                      <li id="agosto" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea-derecha wow rollIn"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn"></div>
                        <div class="tl-circ-peq-derecha wow rollIn"></div>
                        <div class="timeline-panel-derecha wow fadeInDown">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                              @lang('roadmap.core1.2018.agosto.mes') 
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.core1.2018.agosto.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.septiembre.contenido'))
                      <li id="septiembre">
                        <div class="tl-circ-superior"></div>
                          <div class="tl-circ wow rollIn"></div>
                          <div class="tl-linea wow rollIn"></div>
                          <div class="tl-circ-superior-peq wow rollIn"></div>
                          <div class="tl-circ-peq wow rollIn"></div>
                          <div class="timeline-panel wow fadeInDown">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                              <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">    @lang('roadmap.core1.2018.septiembre.mes') 
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.core1.2018.septiembre.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.octubre.contenido'))
                      <li id="octubre" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea wow rollIn"></div>
                        <div class="tl-circ-superior-peq wow rollIn"></div>
                        <div class="tl-circ-peq wow rollIn"></div>
                        <div class="timeline-panel wow fadeInDown">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">    @lang('roadmap.core1.2018.octubre.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.core1.2018.octubre.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.noviembre.contenido'))
                      <li id="noviembre">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea wow rollIn"></div>
                        <div class="tl-circ-superior-peq wow rollIn"></div>
                        <div class="tl-circ-peq wow rollIn"></div>
                        <div class="timeline-panel wow fadeInDown">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">    @lang('roadmap.core1.2018.noviembre.mes') 
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.core1.2018.noviembre.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.core1.2018.diciembre.contenido'))
                      <li id="diciembre" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn"></div>
                        <div class="tl-circ wow rollIn"></div>
                        <div class="tl-linea-derecha wow rollIn"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn"></div>
                        <div class="tl-circ-peq-derecha wow rollIn"></div>
                        <div class="timeline-panel-derecha wow fadeInDown">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                            <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">    @lang('roadmap.core1.2018.diciembre.mes') 
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.core1.2018.diciembre.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                  </ul>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-pane" id="enterprise">
          <div class="row">
              <div class="span9">
                <div class="hidden-xs">
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label style="margin-top: 11px;font-size: 24px;font-weight: 900; color: #e0b913;margin-left: 10px;"> ENTERPRISE </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                        @lang('roadmap.enterprise1.definicion')
                    </div>
                   
                  </div>
                  <ul class="timeline">
                    <li><div class="tldate"> 
                        <label style="margin-top: 10px;font-size: 30px;">2018 </label>
                      </div>
                    </li>
                              
                    @if(trans('roadmap.enterprise1.2018.febrero.contenido'))          
                      <li id="febrero">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-linea wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-peq wow rollIn" data-wow-delay = "1s"></div>
                        <div class="timeline-panel wow fadeInDown" data-wow-delay = "1s">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;"> @lang('roadmap.enterprise1.2018.febrero.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.enterprise1.2018.febrero.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.enterprise1.2018.junio.contenido'))          
                      <li id="junio" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-linea-derecha wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-peq-derecha wow rollIn" data-wow-delay = "1s"></div>
                        <div class="timeline-panel-derecha wow fadeInDown" data-wow-delay = "1s">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.enterprise1.2018.junio.mes')
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.enterprise1.2018.junio.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                    @if(trans('roadmap.enterprise1.2018.agosto.contenido'))          
                      <li id="agosto">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-linea wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ-peq wow rollIn" data-wow-delay = "3s"></div>
                        <div class="timeline-panel wow fadeInDown" data-wow-delay = "3s">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.enterprise1.2018.agosto.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.enterprise1.2018.agosto.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    <li><div class="tldate"> 
                        <label style="margin-top: 10px;font-size: 30px;">2019 </label>
                      </div>
                    </li>
                    @if(trans('roadmap.enterprise1.2019.enero.contenido'))          
                      <li id="enero">
                        
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-linea-derecha wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-peq-derecha wow rollIn" data-wow-delay = "4s"></div>
                        <div class="timeline-panel-derecha wow fadeInDown" data-wow-delay = "4s">
                          <div class="tl-heading">
                          <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.enterprise1.2019.enero.mes')
                              </label>
                            </div>
                          </div>
                          <div class="tl-body wow fadeInDown" data-wow-delay = "1s" style="float: left;">
                            @lang('roadmap.enterprise1.2019.enero.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.enterprise1.2019.febrero.contenido'))          
                      <li id="febrero" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-linea wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-circ-peq wow rollIn" data-wow-delay = "5s"></div>
                        <div class="timeline-panel wow fadeInDown" data-wow-delay = "5s"> 
                            <div class="tl-heading">
                            <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2019</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.enterprise1.2019.febrero.mes')
                            </label>
                          </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.enterprise1.2019.febrero.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                  </ul>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-pane" id="loans">
          <div class="row">
              <div class="span9">
                <div class="hidden-xs">
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label style="margin-top: 11px;font-size: 24px;font-weight: 900; color: #e0b913;margin-left: 10px;"> LOANS </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                      @lang('roadmap.loans1.definicion')
                    </div>
                   
                  </div>
                    <ul class="timeline">
                        <li><div class="tldate"> 
                            <label style="margin-top: 10px;font-size: 30px;">2018 </label>
                          </div>
                        </li>
                                  
                        @if(trans('roadmap.loans1.2018.abril.contenido'))          
                          <li id="abril">
                            <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-linea wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-peq wow rollIn" data-wow-delay = "1s"></div>
                            <div class="timeline-panel wow fadeInDown" data-wow-delay = "1s">
                              <div class="tl-heading">
                              <div class="anio">
                                <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                              </div>
                              <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                                <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.loans1.2018.abril.mes')
                                </label>
                              </div>
                              </div>
                              <div class="tl-body wow fadeInDown" style="float: left;">
                                @lang('roadmap.loans1.2018.abril.contenido')
                              </div>
                            </div>
                          </li>
                        @endif
                       @if(trans('roadmap.loans1.2018.mayo.contenido'))          
                          <li id="mayo">
                            <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-linea wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-peq wow rollIn" data-wow-delay = "1s"></div>
                            <div class="timeline-panel wow fadeInDown" data-wow-delay = "1s">
                              <div class="tl-heading">
                              <div class="anio">
                                <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                              </div>
                              <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                                <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.loans1.2018.mayo.mes')
                                </label>
                              </div>
                              </div>
                              <div class="tl-body wow fadeInDown" style="float: left;">
                                @lang('roadmap.loans1.2018.mayo.contenido')
                              </div>
                            </div>
                          </li>
                        @endif
                        @if(trans('roadmap.loans1.2018.junio.contenido'))          
                          <li id="junio" class="timeline-inverted">
                            <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-linea-derecha wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-superior-peq-derecha wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-peq-derecha wow rollIn" data-wow-delay = "1s"></div>
                            <div class="timeline-panel-derecha wow fadeInDown" data-wow-delay = "1s">
                                <div class="tl-heading">
                                <div class="anio">
                                  <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                                </div>
                                <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                                  <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                    @lang('roadmap.loans1.2018.junio.mes')
                                  </label>
                                </div>
                                </div>
                                <div class="tl-body wow fadeInDown" style="float: left;">
                                  @lang('roadmap.loans1.2018.junio.contenido')
                                </div>
                              </div>
                          </li>
                        @endif
                        @if(trans('roadmap.loans1.2018.agosto.contenido'))          
                          <li id="agosto">
                            <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-linea wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "1s"></div>
                            <div class="tl-circ-peq wow rollIn" data-wow-delay = "1s"></div>
                            <div class="timeline-panel wow fadeInDown" data-wow-delay = "1s">
                              <div class="tl-heading">
                              <div class="anio">
                                <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                              </div>
                              <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                                <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.loans1.2018.agosto.mes')
                                </label>
                              </div>
                              </div>
                              <div class="tl-body wow fadeInDown" style="float: left;">
                                @lang('roadmap.loans1.2018.agosto.contenido')
                              </div>
                            </div>
                          </li>
                        @endif
                    </ul>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-pane" id="ambassadors">
          <div class="row">
              <div class="span9">
                <div class="hidden-xs">
                  <div class="logo-tabs">
                    <div class="div-img">
                     <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
                    </div>
                    <div class="div-text">
                      <label style="margin-top: 11px;font-size: 24px;font-weight: 900; color: #e0b913;margin-left: 10px;"> AMBASSADORS </label>
                    </div>
                    <br><br>
                    <div class="div-dialogo">
                      @lang('roadmap.ambassadors1.definicion')
                    </div>
                   
                  </div>
                  <ul class="timeline">
                    <li><div class="tldate"> 
                        <label style="margin-top: 10px;font-size: 30px;">2018 </label>
                      </div>
                    </li>
                              
                    @if(trans('roadmap.ambassadors1.2018.enero.contenido'))          
                      <li id="enero">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-linea wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-peq wow rollIn" data-wow-delay = "1s"></div>
                        <div class="timeline-panel wow fadeInDown" data-wow-delay = "1s">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.ambassadors1.2018.enero.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.ambassadors1.2018.enero.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.ambassadors1.2018.febrero.contenido'))          
                      <li id="febrero" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-linea-derecha wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn" data-wow-delay = "1s"></div>
                        <div class="tl-circ-peq-derecha wow rollIn" data-wow-delay = "1s"></div>
                        <div class="timeline-panel-derecha wow fadeInDown" data-wow-delay = "1s">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.ambassadors1.2018.febrero.mes')
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.ambassadors1.2018.febrero.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                    @if(trans('roadmap.ambassadors1.2018.marzo.contenido'))          
                      <li id="marzo">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-linea wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ-peq wow rollIn" data-wow-delay = "3s"></div>
                        <div class="timeline-panel wow fadeInDown" data-wow-delay = "3s">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.ambassadors1.2018.marzo.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.ambassadors1.2018.marzo.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.ambassadors1.2018.abril.contenido'))          
                      <li id="abril" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-linea-derecha wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn" data-wow-delay = "3s"></div>
                        <div class="tl-circ-peq-derecha wow rollIn" data-wow-delay = "3s"></div>
                        <div class="timeline-panel-derecha wow fadeInDown" data-wow-delay = "3s">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.ambassadors1.2018.abril.mes')
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.ambassadors1.2018.abril.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                    @if(trans('roadmap.ambassadors1.2018.mayo.contenido'))          
                      <li id="mayo">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-linea wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-peq wow rollIn" data-wow-delay = "4s"></div>
                        <div class="timeline-panel wow fadeInDown" data-wow-delay = "4s">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.ambassadors1.2018.mayo.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.ambassadors1.2018.mayo.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    @if(trans('roadmap.ambassadors1.2018.junio.contenido'))          
                      <li id="junio" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-linea-derecha wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-peq-derecha wow rollIn" data-wow-delay = "4s"></div>
                        <div class="timeline-panel-derecha wow fadeInDown" data-wow-delay = "4s">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2018</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.ambassadors1.2018.junio.mes')
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.ambassadors1.2018.junio.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                    @if(trans('roadmap.ambassadors1.2018.agosto.contenido'))          
                      <li id="agosto">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-linea wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-superior-peq wow rollIn" data-wow-delay = "4s"></div>
                        <div class="tl-circ-peq wow rollIn" data-wow-delay = "4s"></div>
                        <div class="timeline-panel wow fadeInDown" data-wow-delay = "4s">
                          <div class="tl-heading">
                          <div class="anio">
                            <label style="font-size: 17px; color: #E0B913; float: right; margin-right: 31px;">2018</label>
                          </div>
                          <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none;">
                            <label style="font-size: 23px; color: #000; float: right; margin-right: 2px;">  @lang('roadmap.ambassadors1.2018.agosto.mes')
                            </label>
                          </div>
                          </div>
                          <div class="tl-body wow fadeInDown" style="float: left;">
                            @lang('roadmap.ambassadors1.2018.agosto.contenido')
                          </div>
                        </div>
                      </li>
                    @endif
                    <li><div class="tldate"> 
                        <label style="margin-top: 10px;font-size: 30px;">2019 </label>
                      </div>
                    </li>
                    @if(trans('roadmap.ambassadors1.2019.enero.contenido'))          
                      <li id="enero" class="timeline-inverted">
                        <div class="tl-circ-superior wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-circ wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-linea-derecha wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-circ-superior-peq-derecha wow rollIn" data-wow-delay = "5s"></div>
                        <div class="tl-circ-peq-derecha wow rollIn" data-wow-delay = "5s"></div>
                        <div class="timeline-panel-derecha wow fadeInDown" data-wow-delay = "5s">
                            <div class="tl-heading">
                            <div class="anio">
                              <label style="font-size: 17px; color: #E0B913; float: left; margin-left: 31px;">2019</label>
                            </div>
                            <div class="meses" style="margin-top: -9px; border: 1px solid #4d4d4d;border-top: none; border-left: none;border-right: none; margin-left: 30px;">
                              <label style="font-size: 23px; color: #000; float: left; margin-left: 2px;">
                                @lang('roadmap.ambassadors1.2019.enero.mes')
                              </label>
                            </div>
                            </div>
                            <div class="tl-body wow fadeInDown" style="float: left;">
                              @lang('roadmap.ambassadors1.2019.enero.contenido')
                            </div>
                          </div>
                      </li>
                    @endif
                  </ul>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>    
<br>
<div class="container hidden-md hidden-lg hidden-sm">
  <div class="row">
      <div class="container center-block">
        <div class="text-descarga-02" style="text-align: center; ">
          <label style="color:#000; font-size: 35px; font-weight: 900;  "> ROAD MAP </label>
        </div>  
        <div style="text-align: center;width: 65%;border: 1px solid; margin-left: auto;    margin-right: auto;"></div>
        <div class="text-descarga-02" style="text-align: center; margin-top: 10px; ">
           <label style="font-size: 35px; font-weight: 900; color: #E0B913"> 2018 / 2019 </label> 
        </div>   
      </div>
  </div>
  <div class="row">
    <div style="width: 100%;text-align: center; margin-top: 61px; margin-bottom: 61px;"> 
      <label style="font-size: 20px;color: #000;">
            @if(App::isLocale('es'))
              DIVISIONES DE ONIXCOIN
            @else
              DIVISIONS OF ONIXCOIN
            @endif
      </label>
    </div>
    <div class="span12">
      <div id="tab" class="center-block" data-toggle="buttons-radio" style="width: 100%;text-align: center;">
        <a href="#core1" id="core1" class="btn btn-large btn-info btn-movil active" style="width: 40%;border-radius: 6px !important;" data-toggle="tab">CORE</a>
        <a href="#enterprise1" id="enterprise1" class="btn btn-large btn-info btn-movil" style="width: 40%;border-radius: 6px !important;" data-toggle="tab">ENTERPRIsE</a>
        <a href="#loans1" id="loans1" class=" btn btn-large btn-info btn-movil" style="width: 40%; margin-top: 0px !important;border-radius: 6px !important;" data-toggle="tab">LOANS</a>
        <a href="#ambassadors1" id="ambassadors1" class=" btn btn-large btn-info btn-movil" style="width: 40%; margin-top: 0px !important;border-radius: 6px !important;" data-toggle="tab">AMBASSADORS</a>
      </div>
    </div>
  </div>
</div>

<div id="modal-core-vista" class="animated modal fadeIn" tabindex="-1" role="dialog">
  <div class="modal-dialog container" style="width: 100%;height: 100%;">
    <div class="modal-content" style="height: 100%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="div-titulo">
          <img src="{{asset('public/pagina/img/logo.png')}}" alt="logo" style="width:100%;">
        </div>
        <div class="div-titulo1-1">
          <label style="margin-top: 24px;font-size: 24px;font-weight: 900; color: #e0b913;margin-left: 10px;" class="tab-title"> CORE </label>
        </div>
        <div style="text-align: center; margin-top: 20px">
          <img class="svg" id="u1999" src="{{asset( 'public/pagina/img/titulo-road.png')}}" style="width: 100%;">
        </div>
      </div>
      <div class="modal-body">
          <div class="row">
              <div id="core1-movil" class="span9 modal-movil" style="margin-top: -73px; display: none;">
                <div class="div-dialogo">
                  <p class="contenido-tab">
                    @lang('roadmap.core1.definicion')
                  </p>
                </div>
                <div style="text-align: center; margin-top: 20px">
                  <label style="width: 100%; font-size: 12px;"> 
                      @if(App::isLocale('es'))
                        DESLICE
                      @else
                        SLIDE
                      @endif
                  </label>
                  <img class="svg" id="u1999" src="{{asset( 'public/pagina/img/des.png')}}" style="width: 32%;">
                </div>
                <br><br> 
                <div class="roadmap-movil owl-theme" style="text-align: center;">
                  @if(trans('roadmap.core1.2018.enero.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_enero.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_enero.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <!--<div class="realizado"><i class="fa fa-check" style="margin-top: 6px; display: none;"></i></div>-->
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.enero.contenido')
                      </div>
                    </div>
                  @endif  
                  @if(trans('roadmap.core1.2018.febrero.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_febrero.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_febrero.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.febrero.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.marzo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.marzo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.abril.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_abril.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_abril.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.abril.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.mayo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.mayo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.junio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_junio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_junio.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.junio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.julio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_julio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_julio.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.julio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.agosto.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_agosto.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_agosto.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.agosto.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.septiembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.septiembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.octubre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.octubre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.noviembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_noviembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_noviembre.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.noviembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.core1.2018.diciembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @endif
                      
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.core1.2018.diciembre.contenido')
                      </div>
                    </div>
                  @endif
                </div>
              </div>
              <div id="enterprise1-movil" class="span9 modal-movil" style="margin-top: -73px; display: none;">
                <div class="div-dialogo">
                  <p class="contenido-tab">
                    @lang('roadmap.enterprise1.definicion')
                  </p>
                </div>
                <div style="text-align: center; margin-top: 20px">
                  <label style="width: 100%; font-size: 12px;">DESLICE</label>
                  <img class="svg" id="u1999" src="{{asset( 'public/pagina/img/des.png')}}" style="width: 32%;">
                </div>
                <br><br> 
                <div class="roadmap-movil owl-theme" style="text-align: center;">
                  @if(trans('roadmap.enterprise1.2018.enero.contenido'))
                    <div class="item">
                       @if(App::isLocale('es'))
                         <img src="{{asset( 'public/img/roadmap/web_2018_enero.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_enero.png')}}" style="width: 100% !important;">
                        @endif
                      <!--<div class="realizado"><i class="fa fa-check" style="margin-top: 6px; display: none;"></i></div>-->
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.enero.contenido')
                      </div>
                    </div>
                  @endif  
                  @if(trans('roadmap.enterprise1.2018.febrero.contenido'))
                    <div class="item">
                        @if(App::isLocale('es'))
                         <img src="{{asset( 'public/img/roadmap/web_2018_febrero.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_febrero.png')}}" style="width: 100% !important;">
                        @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.febrero.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.marzo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.marzo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.abril.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_abril.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_abril.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.abril.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.mayo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.mayo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.junio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_junio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_junio.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.junio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.julio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_julio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_julio.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.julio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.agosto.contenido'))
                    <div class="item">
                        @if(App::isLocale('es'))
                          <img src="{{asset( 'public/img/roadmap/web_2018_agosto.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_agosto.png')}}" style="width: 100% !important;">
                        @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.agosto.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.septiembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @endif

                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.septiembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.octubre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.octubre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.noviembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_noviembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_noviembre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.noviembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2018.diciembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2018.diciembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2019.enero.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_enero 2019.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2019_enero.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2019.enero.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.enterprise1.2019.febrero.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_final_febrero_2019.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2019_febrero.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.enterprise1.2019.febrero.contenido')
                      </div>
                    </div>
                  @endif
                </div>
              </div>
              <div id="loans1-movil" class="span9 modal-movil" style="margin-top: -73px; display: none;">
                <div class="div-dialogo">
                  <p class="contenido-tab">
                    @lang('roadmap.loans1.definicion')
                  </p>
                </div>
                <div style="text-align: center; margin-top: 20px">
                  <label style="width: 100%; font-size: 12px;">DESLICE</label>
                  <img class="svg" id="u1999" src="{{asset( 'public/pagina/img/des.png')}}" style="width: 32%;">
                </div>
                <br><br> 
                <div class="roadmap-movil owl-theme" style="text-align: center;">
                  @if(trans('roadmap.loans1.2018.enero.contenido'))
                    <div class="item">
                       @if(App::isLocale('es'))
                         <img src="{{asset( 'public/img/roadmap/web_2018_enero.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_enero.png')}}" style="width: 100% !important;">
                        @endif
                      <!--<div class="realizado"><i class="fa fa-check" style="margin-top: 6px; display: none;"></i></div>-->
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.enero.contenido')
                      </div>
                    </div>
                  @endif  
                  @if(trans('roadmap.loans1.2018.febrero.contenido'))
                    <div class="item">
                        @if(App::isLocale('es'))
                         <img src="{{asset( 'public/img/roadmap/web_2018_febrero.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_febrero.png')}}" style="width: 100% !important;">
                        @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.febrero.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.marzo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.marzo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.abril.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_abril.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_abril.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.abril.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.mayo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.mayo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.junio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_junio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_junio.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.junio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.julio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_julio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_julio.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.julio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.agosto.contenido'))
                    <div class="item">
                        @if(App::isLocale('es'))
                          <img src="{{asset( 'public/img/roadmap/web_2018_agosto.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_agosto.png')}}" style="width: 100% !important;">
                        @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.agosto.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.septiembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.septiembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.octubre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.octubre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.noviembre.contenido'))
                    <div class="item">
                        @if(App::isLocale('es'))
                          <img src="{{asset( 'public/img/roadmap/web_2018_noviembre.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_noviembre.png')}}" style="width: 100% !important;">
                        @endif

                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.noviembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.loans1.2018.diciembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.loans1.2018.diciembre.contenido')
                      </div>
                    </div>
                  @endif
                </div>
              </div>
              <div id="ambassadors1-movil" class="span9 modal-movil" style="margin-top: -73px; display: none;">
                <div class="div-dialogo">
                  <p class="contenido-tab">
                    @lang('roadmap.ambassadors1.definicion')
                  </p>
                </div>
                <div style="text-align: center; margin-top: 20px">
                  <label style="width: 100%; font-size: 12px;">DESLICE</label>
                  <img class="svg" id="u1999" src="{{asset( 'public/pagina/img/des.png')}}" style="width: 32%;">
                </div>
                <br><br> 
                <div class="roadmap-movil owl-theme" style="text-align: center;">
                  @if(trans('roadmap.ambassadors1.2018.enero.contenido'))
                    <div class="item">
                        @if(App::isLocale('es'))
                         <img src="{{asset( 'public/img/roadmap/web_2018_enero.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_enero.png')}}" style="width: 100% !important;">
                        @endif
                      <!--<div class="realizado"><i class="fa fa-check" style="margin-top: 6px; display: none;"></i></div>-->
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.enero.contenido')
                      </div>
                    </div>
                  @endif  
                  @if(trans('roadmap.ambassadors1.2018.febrero.contenido'))
                    <div class="item">
                        @if(App::isLocale('es'))
                         <img src="{{asset( 'public/img/roadmap/web_2018_febrero.png')}}" style="width: 100% !important;">
                        @else
                           <img src="{{asset( 'public/img/roadmap/ingles/web_2018_febrero.png')}}" style="width: 100% !important;">
                        @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.febrero.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.marzo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_marzo.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.marzo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.abril.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_2018_abril.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_abril.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.abril.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.mayo.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_mayo.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.mayo.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.junio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_junio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_junio.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.junio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.julio.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_julio.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_julio.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.julio.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.agosto.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_agosto.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_agosto.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.agosto.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.septiembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_septiembre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.septiembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.octubre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_octubre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.octubre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.noviembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_noviembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_noviembre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.noviembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2018.diciembre.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                        <img src="{{asset( 'public/img/roadmap/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2018_diciembre.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2018.diciembre.contenido')
                      </div>
                    </div>
                  @endif
                  @if(trans('roadmap.ambassadors1.2019.enero.contenido'))
                    <div class="item">
                      @if(App::isLocale('es'))
                       <img src="{{asset( 'public/img/roadmap/web_enero 2019.png')}}" style="width: 100% !important;">
                      @else
                         <img src="{{asset( 'public/img/roadmap/ingles/web_2019_enero.png')}}" style="width: 100% !important;">
                      @endif
                      <div class="tl-body-01" style="text-align: justify;">
                         @lang('roadmap.ambassadors1.2019.enero.contenido')
                      </div>
                    </div>
                  @endif
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

    <br>    
    <br>    
    		
@endsection
@push('css')
<link href="{{asset('public/css/roadmap.css')}}" rel="stylesheet">
@endpush
@push('js')
  <script src="{{asset('public/js/roadmap.js')}}"></script>

 <script>
      var $imagen1, $imagen2;
      $imagen1 ="{{url('public/img/logos/blanco.png')}}"
      $imagen2 ="{{url('public/img/logos/blanco.png')}}"
</script>
@endpush

