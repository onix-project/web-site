var datatableEspanol = {
	"sProcessing":     "Procesando...",
	"sLengthMenu":     "Mostrar _MENU_ registros",
	"sZeroRecords":    "No se encontraron resultados",
	"sEmptyTable":     "Ningún dato disponible en esta tabla",
	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
	"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	"sInfoPostFix":    "",
	"sSearch":         "Buscar:",
	"sUrl":            "",
	"sInfoThousands":  ",",
	"sLoadingRecords": "Cargando...",
	"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
	},
	"oAria": {
		"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		"sSortDescending": ": Activar para ordenar la columna de manera descendente"
	}
};

(function ($) {
	"use strict";

	$(function(){
		$.ajaxSetup({
			headers: { 'X-CSRF-TOKEN' : $('meta[name=csrf-token]').attr('content') },
			beforeSend : function(){},
			complete : ajaxComplete,
			error: function(jqXHR, textStatus, errorThrown){},
			timeout: 0,
			cache: false
		});

		Pace.options = {
			ajax: true
		};

		PNotify.prototype.options.styling = "fontawesome";

		$("label.requerido", "form").append(' <i class="fa fa-asterisk requerido"></i>');

		if ($.fn.dataTable){
			$.extend(true, $.fn.dataTable.defaults, {
				processing: true,
				serverSide: true,
				searchDelay: 350,
				language: datatableEspanol
			});
		}

		$('#botonera .msj-botonera .fa-close').click(function(){
			$('#botonera .msj-botonera').css('display', 'none');
		});

		/*
		$('#botonera').affix({
			offset: { 
				top: 170, 
				bottom: 5 
			}
		});
		
		var altura = $('.navbar').offset().top;
		console.log(altura);
		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > 480 ){
				$('.navbar').addClass('menu-fixed');
			} else {
				$('.navbar').removeClass('menu-fixed');
			}
		});/**/

		if ($.datepicker){
			$.datepicker.regional['es'] = {
				closeText: 'Cerrar',
				prevText: '<Ant',
				nextText: 'Sig>',
				currentText: 'Hoy',
				monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
				dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
				dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
				weekHeader: 'Sm',
				dateFormat: 'dd/mm/yy',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: ''
			};
			$.datepicker.setDefaults($.datepicker.regional['es']);
		}
	});
}(jQuery));