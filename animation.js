$(document).ready(function(){
	$('#selectAll').addClass('active');
	var amountScrolled = 380;

	$(window).scroll(function() {
		if ( $(window).scrollTop() > amountScrolled ) {
			$('a.goUpButton').fadeIn('slow');
		} else {
			$('a.goUpButton').fadeOut('slow');
		}
	});
	
	
	$('a.goUpButton').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
	});
	
	$('.thumbnail,.animation-item').each(function(){
		var width = $(window).width();//current
		var imgHeight = $(this).height();//current
		var imgWidth=$(this).width();//current
		var maxHeight=225;
		var ratio = 0;
		console.log(width);
		
		if(width >= 200){
			$(this).attr('height', imgWidth/1.68);
		}
		
	});
	
	// Pause the video when the modal is closed
    $(document).on('click', '.hanging-close, .modal-backdrop, .modal', function (event) {
        // Remove the src so the player itself gets removed, as this is the only
        // reliable way to ensure the video stops playing in IE
        $("#trailer-video-container").empty();
    });
	
    // Start playing the video whenever the trailer modal is opened
    $(document).on('click', '.animation-item', function (event) {
        var trailerYouTubeId = $(this).attr('data-trailer-youtube-id')
        var sourceUrl = 'http://www.youtube.com/embed/' + trailerYouTubeId + '?autoplay=1&html5=1';
        $("#trailer-video-container").empty().append($("<iframe></iframe>", {
            'id': 'trailer-video',
            'type': 'text-html',
            'src': sourceUrl,
            'frameborder': 0,
			'allowfullscreen':'true'
		}));
    });
	
	$('#selectAll').click(function(){
		$('.row.web, .row.picture, .row.animation, .row.logo, .rowName').fadeIn();
		$('#webSel, #animSel,#graphicSel, #logoSel').removeClass('active');
		$(this).addClass('active');
		
	});
	
	$('#webSel').click(function(){
		$('.row.picture, .row.animation, .row.logo, .rowName').hide();
		$('#selectAll, #graphicSel, #animSel, #logoSel').removeClass('active');
		$(this).addClass('active');
		$('.row.web').each(function(){
			$(this).fadeIn();
		});
	});
	
	
	$('#graphicSel').click(function(){
		$('.row.web, .row.animation, .row.logo, .rowName').hide();
		$('#webSel, #selectAll, #animSel, #logoSel').removeClass('active');
		$(this).addClass('active');
		$('.row.picture').each(function(){
			$(this).fadeIn();
		});
	});
	
	
	
	$('#animSel').click(function(){
		$('.row.web, .row.picture, .row.logo, .rowName').hide();
		$('#webSel, #selectAll, #graphicSel, #logoSel').removeClass('active');
		$(this).addClass('active');
		$(".row.animation").each(function(){
			 $(this).fadeIn();
		});
	});
	
	$('#logoSel').click(function(){
		$('.row.web, .row.picture, .row.animation, .rowName').hide();
		$('#webSel, #selectAll, #graphicSel, #animSel').removeClass('active');
		$(this).addClass('active');
		$('.row.logo').each(function(){
			$(this).fadeIn()
			});	
	});
	
	
	/*--------------mobileSelection ---------------------*/
	$('#mselectAll').click(function(){
		$('.row.web, .row.picture, .row.animation, .row.logo, .rowName').fadeIn();
		$('#webSel, #animSel,#graphicSel, #logoSel').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#mwebSel').click(function(){
		$('.row.picture, .row.animation, .row.logo, .rowName').hide();
		$('#mselectAll, #selectAll, #animSel, #logoSel').removeClass('active');
		$(this).addClass('active');
		$('.row.web').each(function(){
			$(this).fadeIn();
		});		
	});
	
	$('#mgraphicSel').click(function(){
		$('.row.web, .row.animation, .row.logo, .rowName').hide();
		$('#webSel, #selectAll, #animSel, #logoSel').removeClass('active');
		$(this).addClass('active');
		$('.row.picture').each(function(){
			$(this).fadeIn();
		});		
	});
	
	$('#manimSel').click(function(){
		$('.row.web, .row.picture, .row.logo, .rowName').hide();
		$('#webSel, #selectAll, #graphicSel, #logoSel').removeClass('active');
		$(this).addClass('active');
		$(".row.animation").each(function(){
			 $(this).fadeIn();
		})		
	});
	
	$('#mlogoSel').click(function(){
		$('.row.web, .row.picture, .row.animation, .rowName').hide();
		$('#webSel, #selectAll, #graphicSel, #animSel').removeClass('active');
		$(this).addClass('active');
		$('.row.logo').each(function(){
			$(this).fadeIn()
			});	
		
	});
});