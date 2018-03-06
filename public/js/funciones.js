var app, app_elementos;
var $avisoError500 = true;
(function ($) {
	'use strict';
	app = function($form, op){
		var $this = this;
		
		$this.id = 0;
		$this.form = $('#' + $form),
		$this.op = $.extend({
			'url' 		: '',
			'botones' 	: true,
			'limpiarInicio' 	: true,
			'teclado' 	: true,
			'medotos' 	: {	
				'buscar' 		: 'buscar',
				'guardar' 		: 'guardar',
				'actualizar' 	: 'guardar',
				'eliminar' 		: 'eliminar',
				'restaurar' 	: 'restaurar',
				'destruir' 		: 'destruir',
			},
			'antes' 	: function(){ return true; },
			'limpiar' 	: function(){ return true; },
			'buscar' 	: function(){ return true; },
			'guardar' 	: function(){ return true; },
			'eliminar' 	: function(){ return true; },
			'restaurar' : function(){ return true; },
			'destruir' 	: function(){ return true; }
		}, op);
		
		if ($this.form.prop("tagName") != "FORM"){
			console.log('El elemento "' + $form + '" no es un formulario.');
			return {};
		}

		$this.form.submit(function() { 
			return false; 
		}); 

		
		if ($this.op.url == ''){
			var actionForm = $this.form.attr('action');
			$this.op.url = actionForm != '' && actionForm != undefined ? actionForm : $url;
		}

		$this.op.url = $this.op.url.replace(/\/+$/, '') + '/';

		$this.guid = function() {
			function s4() {
				return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
			}
			return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
		};

		$this.ucwords = function(str) {
			return (str + '').replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
				return $1.toUpperCase();
			});
		};

		$this.bloquear = function(){
			$('#botonera').block({
				message: null,
				overlayCSS: {
					opacity: 0,
					cursor: 'wait'
				}
			});
		};

		$this.desbloquear = function(){
			$('#botonera').unblock();
		};

		$this.buscar = function($id, callback){
			
			$this.id = $id;
			
			if (!($this.id <= 0 || $this.id.length > 0)){
				$this.id = 0;
				return;
			}

			if ($this.op.antes('buscar', $this) === false){
				return false;
			}

			$this.bloquear();
			
			$.ajax({
				'url' : $this.op.url + $this.op.medotos.buscar + '/' + $this.id,
				'type' : 'GET',
				'success' : function(r){
					$('.modal-busqueda').modal('hide');
					$this.rellenar(r);

					if (r.s !== 's') return;


					if (typeof(callback) === 'function'){
						callback(r);
					}

					if (typeof($this.op.buscar) === 'function'){
						$this.op.buscar(r);
					}

					if (r.deleted_at === undefined || r.deleted_at === null){
						$('#eliminar', '#botonera').prop('disabled', false);
						
						$('#restaurar, #destruir', '#botonera').css('display', 'none');
						$('#guardar, #eliminar', '#botonera').css('display', 'block');
					}else{
						$('#guardar, #eliminar', '#botonera').css('display', 'none');
						$('#restaurar, #destruir', '#botonera').css('display', 'block');

						$('#botonera .msj-botonera')
						.html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>El Registro Actual esta con la Etiqueta de Eliminado</span><i class="fa fa-close" aria-hidden="true"></i>')
						.css('display', 'block');
					}
				},
				'complete' : function(x,e,o){
					ajaxComplete(x,e,o);
					$this.desbloquear();
				}
			});
		};
		
		$this._limpiar = function(){
			$this.desbloquear();

			$this.id = 0;
			$this.form.clearForm();

			$('#guardar, #eliminar', '#botonera').css('display', 'block');
			$('#eliminar', '#botonera').prop('disabled', true);
			$('#botonera .msj-botonera').css('display', 'none');
			$('#restaurar, #destruir', '#botonera').css('display', 'none');
			$('input[type="hidden"][name!="_token"]', $this.form).val('');
			$('select', $this.form).each(function(){
				var t = $(this);

				if (t.is('.bs-select')){
					t.selectpicker('deselectAll');
					return;
				} 
				$('option:first', t).prop("selected", true);
			});

			$('.modal-busqueda').modal('hide');
			
			$("input[type!='hidden'], select, textarea", $this.form).first().focus();
		};
		if ($this.op.limpiarInicio) {
			$this._limpiar();
		}
		//$this._limpiar();

		$this.limpiar = function(){
			$('.form-control').css('border', '1px solid #ccc');
			
			if ($this.op.antes('limpiar', $this) === false){
				return false;
			}

			$this._limpiar();

			if (typeof($this.op.limpiar) === 'function'){
				$this.op.limpiar();
			}
		};

		$this.rellenar = function(r){
			if (typeof(r) === 'string'){
				aviso(r);
				return false;
			}

			aviso(r.msj, 'info', 'Busqueda');

			if ($this.op.antes('rellenar', $this) === false){
				return false;
			}

			$.each(r, function(id, valor){
				var ele = $('#' + id, $this.form);

				if (!ele.length){ return; }

				if (ele.get(0).tagName === 'DIV'){
					ele.text(valor);
				}else if (ele.attr('type') === "checkbox"){
					ele.prop("checked", ele.val() == valor);
				}else if (ele.get(0).tagName === 'SELECT'){
					if (!($.isArray(valor) || $.isPlainObject(valor)) || ($.isArray(valor) && ele.attr('multiple'))){
						ele.val(valor);
					}else{
						var $valorSelect = '';
						ele.html('').append('<option value="">- Seleccione</option>');
						$.each(valor, function(id, v){
							if (id == '_'){
								$valorSelect = v;
								return;
							}
							ele.append('<option value="' + id + '">' + v + '</option>');
						});

						ele.val($valorSelect);
					}

					if (ele.is('.bs-select')){
						ele.selectpicker('render').selectpicker('refresh');
					}
				}else{
					ele.val(valor);
				}
			});

			return true;
		};

		$this.selectCascada = function($valor, $selectObjetivo, $metodo, $callback){
			//console.log($this.op.url + '->'+ $metodo);
			var $callback = $callback || function(){},
			dato = {};

			dato[$selectObjetivo] = [];
			
			if ($valor === ''){
				$this.rellenar(dato);
				return;
			}

			$.ajax({
				'url' : $this.op.url + $metodo + '/' + $valor,
				'type' : 'GET',
				'success' : function(r){
					$this.rellenar(r);

					$callback();
				}
			});
		}

		$this.guardar = function(){
			if ($this.op.antes('guardar', $this) === false){
				return false;
			}
			
			$this.bloquear();

			var $opciones = {
				'url' : $this.op.url + $this.op.medotos.guardar,
				'type' : 'POST',
				'success': function(r){
					aviso(r);
					$this.limpiar();

					if (typeof($this.op.guardar) === 'function'){
						$this.op.guardar(r);
					}
				},
				'complete' : function(x,e,o){
					ajaxComplete(x,e,o);
					$this.desbloquear();
				}
			};

			if ($this.id > 0){
				$opciones.url = $this.op.url + $this.op.medotos.actualizar + '/' + $this.id;
				$opciones.data = {
					'_method': 'put'
				};
			}

			$this.form.ajaxSubmit($opciones);
		}

		$this.eliminar = function(){
			if ($this.id === 0) return;

			if ($this.op.antes('eliminar', $this) === false){
				return false;
			}
			
			$this.bloquear();

			bootbox.confirm("&iquest;Esta Seguro que Desea Eliminar Este Registro?", function(result) {
				if (!result){
					return $this.desbloquear();
				}

				$.ajax({
					'url' : $this.op.url + $this.op.medotos.eliminar + '/' + $this.id,
					'data' : {
						'_method': 'delete'
					},
					'type' : 'POST',
					'success' : function(r){
						aviso(r);
						$this.limpiar();
						if (typeof($this.op.eliminar) === 'function'){
							$this.op.guardar(r);
						}
					},
					'complete' : function(x,e,o){
						ajaxComplete(x,e,o);
						$this.desbloquear();
					}
				});
			});
		};

		$this.restaurar = function(){
			if ($this.id === 0) return;

			if ($this.op.antes('restaurar', $this) === false){
				return false;
			}

			$this.bloquear();

			bootbox.confirm("&iquest;Esta Seguro que Desea restaurar Este Registro?", function(result) {
				if (!result){
					return $this.desbloquear();
				}

				$.ajax({
					'url' : $this.op.url + $this.op.medotos.restaurar + '/' + $this.id,
					'type' : 'POST',
					'success' : function(r){
						aviso(r);
						$this.limpiar();
						if (typeof($this.op.restaurar) === 'function'){
							$this.op.guardar(r);
						}
					},
					'complete' : function(x,e,o){
						ajaxComplete(x,e,o);
						$this.desbloquear();
					}
				});
			});
		};

		$this.destruir = function(){
			if ($this.id === 0) return;

			if ($this.op.antes('destruir', $this) === false){
				return false;
			}

			$this.bloquear();

			bootbox.confirm("&iquest;Esta Seguro que Desea destruir Este Registro?", function(result) {
				if (!result){
					return $this.desbloquear();
				}

				$.ajax({
					'url' : $this.op.url + $this.op.medotos.destruir + '/' + $this.id,
					'data' : {
						'_method': 'delete'
					}, 
					'type' : 'POST',
					'success' : function(r){
						aviso(r);
						$this.limpiar();
						if (typeof($this.op.destruir) === 'function'){
							$this.op.guardar(r);
						}
					},
					'complete' : function(x,e,o){
						ajaxComplete(x,e,o);
						$this.desbloquear();
					}
				});
			});
		};

		$('.btn', '#botonera').on('click', function(){
			$(this).blur();
		});

		if ($this.op.botones){
			$('#limpiar', '#botonera').on('click', function(){
				$this.limpiar();
			});

			$('#guardar', '#botonera').on('click', function(){
				$this.guardar();
			});

			$('#eliminar', '#botonera').on('click', function(){
				$this.eliminar();
			});

			$('#restaurar', '#botonera').on('click', function(){
				$this.restaurar();
			});

			$('#destruir', '#botonera').on('click', function(){
				$this.destruir();
			});

			$('#buscar', '#botonera').on('click', function(){
				$('.modal-busqueda').modal('show');
			});
		}

		if ($this.op.teclado){
			$.Shortcuts.add({
				type: 'down',
				mask: 'Ctrl+s, Ctrl+g',
				enableInInput: true,
				handler: function() {
					$this.guardar();
				}
			}).add({
				type: 'down',
				mask: 'Ctrl+f, Ctrl+b',
				enableInInput: true,
				handler: function() {
					$('.modal-busqueda').modal('show');
				}
			}).add({
				type: 'down',
				mask: 'Ctrl+d, Ctrl+e',
				enableInInput: true,
				handler: function() {
					$this.eliminar();
				}
			}).add({
				type: 'down',
				mask: 'Ctrl+n, Ctrl+l',
				enableInInput: true,
				handler: function() {
					$this.limpiar();
				}
			}).start();
		};
	};

	$(".solonumeros").keypress(function(e){
		var key = window.Event ? e.which : e.keyCode

	    return (key >= 48 && key <= 57);
	});
}(jQuery));

var stack_bottomright = { "dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25 };

function aviso(msj, t, titulo){
	var _msj = msj, tipo = t, titulo = titulo || 'Sistema';
	if (typeof(msj) === 'object'){
		_msj = msj.msj || '';
		t = msj.s === 's';
	}
	
	if (_msj === undefined || _msj === ''){
		console.log("llamada a 'aviso' sin msj");
		return;
	}
	
	if (t === true){
		tipo = 'success';
	}else if (t === false){
		tipo = 'error';
	}
	
	var notice = new PNotify({
		title: titulo,
		text: _msj,
		type: tipo,
		hide: true,
		addclass: "stack-bottomright",
		stack: stack_bottomright,
		animate: {
			animate: true,
			in_class: 'zoomInLeft',
			out_class: 'zoomOutRight'
		}
	});

	notice.get().click(function() {
		notice.remove();
	});

	setTimeout(function(){
		notice.remove();
	}, 5000);
}

function slug(str, strslug){
	str = str.toLowerCase().replace(/^\s+|\s+$/g, ''); // trim

	strslug = strslug || '-';

	// remove accents, swap ñ for n, etc
	var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;",
		to   = "aaaaaeeeeeiiiiooooouuuunc" + strslug.repeat(6);
	for (var i = 0, l = from.length ; i < l ; i++) {
		str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	}

	str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
		.replace(/\s+/g, strslug) // collapse whitespace and replace by -
		.replace(/-+/g, strslug); // collapse dashes

	return str;
};

function datatable(tabla, opciones){
	var tabla = $(tabla),
		ajax = opciones.ajax;

	tabla.data('verFiltros', true);
	tabla.data('verEliminados', false);
	tabla.data('verSoloEliminados', false);

	opciones.ajax = {
		'url' : ajax,
		'data': function (d) {
			d.verEliminados = tabla.data('verEliminados');
			d.verSoloEliminados = tabla.data('verSoloEliminados');
		}
	};

	$(tabla).dataTable(opciones);

	menuDatatableModal(tabla);

	agregarFiltrosDatatable(tabla);
	return $(tabla).dataTable();
}

function menuDatatableModal(tabla){
	var modal = $(tabla).parents('.modal');
	$(".btn-datatable .btn", modal).click(function(){
		$(this).parent().toggleClass('open');
	});

	$('body').on('click', function (e) {
		if (!$('.btn-datatable .dropdown-menu', modal).is(e.target) 
			&& $('.btn-datatable .dropdown-menu', modal).has(e.target).length === 0 
			&& $('.btn-datatable.open', modal).has(e.target).length === 0
		){
			$(".btn-datatable", modal).removeClass('open');
		}
	});

	modal.find('.modal-header .btn-datatable ul li').click(function(e){
		e.preventDefault();
		
		var t = $(this), check = false;
		if (t.attr('data-column')){
			var column = $(tabla).DataTable().column(t.attr('data-column')),
				visibilidad = column.visible();

			column.visible(!visibilidad);
			check = !visibilidad;
		}else if (t.attr('data-vfc')){
			$('tfoot', tabla).toggleClass('hidden');
			tabla.data('verFiltros', check = !tabla.data('verFiltros'));
		}else if (t.attr('data-re') || t.attr('data-sre')){
			var variable = t.attr('data-re') ? 'verEliminados' : 'verSoloEliminados';
			
			tabla.data(variable, !tabla.data(variable));
			check = tabla.data(variable);

			$(tabla).dataTable().fnDraw();
		}
		
		if (check){
			t.find('i.check').addClass("fa fa-check");
		}else{
			t.find('i.check').removeClass("fa fa-check");
		}
	});
}

function agregarFiltrosDatatable(tabla){
	$('tfoot th', tabla).each(function(){
		var title = $(this).text();
		$(this).html('<input name=\'' + slug(title, '_') + '\' class="form-control" type="text" placeholder="Buscar '+title+'" />');
	});

	$(tabla).DataTable().columns().every(function(){
		var that = this;
 
		$('input', this.footer()).on('keyup change', function(){
			if (that.search() !== this.value){
				that.search(this.value).draw();
			}
		});
	});
}

function ajaxComplete(x,e,o){
	switch(x.status){
		case 401:
			location.reload();
			//alert('Session Caducada, ');
			break;

		case 404:
			aviso('No se encontro lo solicitado');
			break;

		case 422:
		if (x.responseJSON){
			var msj = '';
			
			$('.form-control').css('border', '1px solid #ccc');
			$('label.msj').text('')
			$.each(x.responseJSON, function(id, valor){
					
					$('#'+id).css('border', '1px solid red').attr("placeholder", valor);
					$('label[for="'+id+'"]').css({
						'color'		: 'red',
						'display'	: 'block'
					}).text(valor);
					for (var i = 0; i < valor.length; i++) {
						msj += valor[i] + '<br />';
					}
				});

				aviso(msj, false, 'Error de validaci&oacute;n');
			}
			break;
		case 500:
			if ($avisoError500 == true)
				aviso('Se genero un error interno del servidor');
			else
				console.log('Se genero un error interno del servidor');
			break;
	}
};

function enviarPago(){
	var dataEnviar = new FormData($("#enviarArchivos")[0]);
	dataEnviar.append('relacion', $codigo);
	var contar = 0;
	var campos = '';
	$("#banco_id_pago1, #referencia1, #archivo_1").each(function(x, y){
		if ($(y).val() == '') {
			campos = $(y).attr('campo') ;
			contar++
			aviso('El campo: ' + campos + ' no puede quedar en blanco');
		}
	});
	if (contar > 0) {
		return false;
	}
	$cuantos = CamposOpcionales();
	if($cuantos > 0)
		return false;

	$.ajax({
		url : $url +'guardar',
		data: dataEnviar,
		cache: false,
	    contentType: false,
	    processData: false,
	 	type : 'POST',
	 	dataType : 'json',
	 	success : function(data,status,xhr) {
	 		aviso(data.msj);
	 		if(data.s == "s"){
	 			$("#referencia1").val('');
	 			$("#referencia2").val('');
	 			$("#banco_id_pago1").val('');
	 			$("#banco_id_pago2").val('');
	 			$("#archivo_1").val('');
	 			$("#archivo_2").val('');
	 			$('#pagar-listo').modal('hide');
	 			tabla.fnDraw();
	 		}else{
	 			$("#archivo_" + data.archivo).val("");
	 			$("#file" + data.archivo).val("");
	 		}
	 	},
	 	error : function(xhr, status) {
	 		
		},
	});
}
function CamposOpcionales(){
	var cuenta = 0;
	if($("#banco_id_pago2").val() !== '' && $("#referencia2").val() == ''){
		aviso('El campo : referencia 2 no puede quedar en blanco');
		cuenta++;
	}
	if($("#banco_id_pago2").val() == '' && $("#referencia2").val() !== ''){
		aviso('El campo : Banco de procedencia 2 no puede quedar en blanco');
		cuenta++;
	}
	if($("#banco_id_pago2").val() !== '' && $("#referencia2").val() !== '' && $("#archivo_2").val() == ''){
		aviso('Debe Adjuntar el comprobante!!');
		cuenta++;
	}
	return cuenta;
}
function eliminarOrden($id, $option){
	$.ajax({
		url : $url +'eliminar',
		data: {
			'id' : $id,
			'option' : $option
		},
		type : 'POST',
	 	dataType : 'json',
	 	success : function(data,status,xhr) {
	 		aviso(data);
	 		if(data.s == "s"){
	 			tabla.fnDraw();
	 		}
	 	},
	 	error : function(xhr, status) {
	 		
		},
	});
}
function get15dayFromNow() {
	return new Date(new Date().valueOf() + 15 * 24 * 60 * 60 * 1000);
}

function number_format (number, decimals, decPoint, thousandsSep) { 
	number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
	var n = !isFinite(+number) ? 0 : +number
	var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
	var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
	var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
	var s = ''
	var toFixedFix = function (n, prec) {
	var k = Math.pow(10, prec)
	
	return '' + (Math.round(n * k) / k)
	  .toFixed(prec)
	}
	// @todo: for IE parseFloat(0.55).toFixed(0) = 0;
	s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
	
	if (s[0].length > 3) {
		s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
	}
	
	if ((s[1] || '').length < prec) {
		s[1] = s[1] || ''
		s[1] += new Array(prec - s[1].length + 1).join('0')
	}
	return s.join(dec)
}
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

	$(function(){
	    $('#hamburger').toggle(
	        function(){
	            $(".block").animate({"left": "1500px"}, "slow");
	        }, function(){
	            $(".block").animate({"left": "-1500px"}, "slow");
	        }
	    );
	});

