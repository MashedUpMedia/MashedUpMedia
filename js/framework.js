$(document).ready(function() {
	$('#portmenu ul li a').click(function() {
		$('#portmenu ul li a.current').removeClass('current');
		$(this).addClass('current');	
		var filterVal = $(this).text().toLowerCase().replace(' ','-');
				
		if(filterVal == 'all') {
			$('#projects-list li.hidden').fadeIn('slow').removeClass('hidden');
		} else {
			
			$('#projects-list li').each(function() {
				if(!$(this).hasClass(filterVal)) {				
					$(this).fadeOut('1500').addClass('hidden');
				} else {

					$(this).fadeIn('400').removeClass('hidden');

				}
			});
		}
		
		return false;
	});
});