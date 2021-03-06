$(function () {
	$(document).ready(function() {
		$('[data-toggle=offcanvas]').click(function() {
			$('.row-offcanvas').toggleClass('active');
		});
	});

	$("#slider-price").ionRangeSlider({
		min: 0,
		max: 100000,
		from: 1000,
		to: 4000,
		type: 'double',
		step: 500,
		prefix: "€",
		prettify: true,
		hasGrid: true
	});
	$("#slider-km").ionRangeSlider({
		min: 0,
		max: 500000,
		from: 1000,
		to: 4000,
		type: 'double',
		step: 2500,
		postfix: " Km",
		prettify: true,
		hasGrid: true
	});
	$("#slider-year").ionRangeSlider({
		min: 1970,
		max: 2014,
		from: 2000,
		to: 2010,
		type: 'double',
		step: 1,
		prettify: false,
		hasGrid: true
	});

	$("#slider-CV").ionRangeSlider({
		min: 0,
		max: 600,
		from: 0,
		to: 600,
		type: 'double',
		step: 15,
		prettify: false,
		hasGrid: true
	});
	$("#make_select2").select2({
		placeholder: "Selecione uma Marca",
		allowClear:true
	});
	$("#model_select2").select2({
		placeholder: "Selecione um Modelo",
		allowClear:true,
		enable: false
	});

});