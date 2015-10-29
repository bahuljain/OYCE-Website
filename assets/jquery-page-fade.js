
$(document).ready(function() {
	$('.SE_desc, .timeline_desc, .III_desc, .OYCE_desc, .application_desc, .people_desc, .FAQ_desc, .contactUs_desc, .backHome').hide();
	$('.home_desc').fadeIn('slow');
	
		$('.home').click(function() {
			$('.SE_desc, .timeline_desc, .III_desc, .OYCE_desc, .application_desc, .people_desc, .FAQ_desc, .contactUs_desc, .backHome').hide();
			$('.home_desc').fadeIn('slow');
		});
		
	
		$('.III').click(function() {
			$('.III_desc, .backHome').fadeIn('slow');
			$('.SE_desc, .timeline_desc, .home_desc, .OYCE_desc, .application_desc, .people_desc, .FAQ_desc, .contactUs_desc').fadeOut('slow');
			
		});
		
		$('.OYCE').click(function() {
			$('.SE_desc, .timeline_desc, .home_desc, .III_desc, .application_desc, .people_desc, .FAQ_desc, .contactUs_desc').hide();
			$('.OYCE_desc, .backHome').fadeIn('slow');
		});
		
		$('.application').click(function() {
			$('.SE_desc, .timeline_desc, .home_desc, .III_desc, .OYCE_desc, .people_desc, .FAQ_desc, .contactUs_desc').hide();
			$('.application_desc, .backHome').fadeIn('slow');
		});
			
		$('.SE').click(function() {
			$('.application_desc, .timeline_desc, .home_desc, .III_desc, .OYCE_desc, .people_desc, .FAQ_desc, .contactUs_desc').hide();
			$('.SE_desc, .backHome').fadeIn('slow');
		});
		
		$('.timeline').click(function() {
			$('.application_desc, .SE_desc, .home_desc, .III_desc, .OYCE_desc, .people_desc, .FAQ_desc, .contactUs_desc').hide();
			$('.timeline_desc, .backHome').fadeIn('slow');
		});
		
		$('.FAQ').click(function() {
			$('.application_desc, .SE_desc, .home_desc, .III_desc, .OYCE_desc, .people_desc, .timeline_desc, .contactUs_desc').hide();
			$('.FAQ_desc, .backHome').fadeIn('slow');
		});

		$('.people').click(function() {
			$('.application_desc, .SE_desc, .home_desc, .III_desc, .OYCE_desc, .FAQ_desc, .timeline_desc, .contactUs_desc').hide();
			$('.people_desc, .backHome').fadeIn('slow');
		});
		
		$('.contactUs').click(function() {
			$('.application_desc, .SE_desc, .home_desc, .III_desc, .OYCE_desc, .FAQ_desc, .timeline_desc, .people_desc').hide();
			$('.contactUs_desc, .backHome').fadeIn('slow');
		});

});