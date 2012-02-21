$(document).ready(function(){
	$('#offer').hide();
  	$('#offer').slideUp(1).delay(1000).slideDown('slow');
		$('.close').click(function() {
  	$('#offer').slideUp();
	});
	});