$('#fm-modal').modal('show');

$(document).ready(function(){
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion = barra * 0.20;
		$('.imagen').css({
			'background-position': '0 -'+posicion+'px'
		});
	});
});