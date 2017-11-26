$(document).ready(function(e) {
     

	 /*----@ plugin init, call animation----*/
	   
		$('#viora').turn({

			autoCenter: true,
			display: 'double',
			acceleration: true,
			gradients: !$.isTouch,
			elevation:100,
			duration: 2200,
			when: {
				  turned: function(e, page) {
				  page_event($(this).turn('view')[0]);
				  }
			}
		});

	  /*-------@ event click-----------*/ 
	   
	   
	   $('.lrow').on('click',function() {
		   $('#viora').turn('previous');
		});
		$('.rrow').on('click', function() {
		   $('#viora').turn('next');
		});
	
	    $('#viora').animate({'opacity':'1'}, 800);



}); // end document ready

	
	
	 /*-----@  event press key----------*/
	
	
	$(window).bind('keydown', function(e){
				
		if (e.keyCode==37)
			$('#viora').turn('previous');
		else if (e.keyCode==39)
			$('#viora').turn('next');
			
	});