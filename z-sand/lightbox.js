$(document).ready( function($) {

	//Making the #lightbox appear
	$('.lightboxTrigger').click(function(e) {
		e.preventDefault();

		var imageHref = $(this).attr('href');

		if ($('#lightbox').length > 0) { // #lightbox exists

			// Insert IMG tag with clicked link's HREF as SRC value
			$('#lightboxContent').html(
					// '<img class="lightboxPrev" src="media-pix/portfolios/heather/thumbs/h-port-02.jpg">' + 
					'<img class="lightboxFocus" src="' + imageHref + '">'
					// '<img class="lightboxNext" src="media-pix/portfolios/heather/thumbs/h-port-02.jpg">' 
				);
			
			// Show #lightbox window
			$('#lightbox').show();
		} else { // #lightbox does not exist
			
			// Create the HTML markup for the #lightbox window
			var lightbox = 
				'<div id="lightbox">' + 
					'<p>&#215;</p>' + 
					'<div id="lightboxContent">' + 
						// '<img class="lightboxPrev" src="media-pix/portfolios/heather/thumbs/h-port-02.jpg">' + 
						'<img class="lightboxFocus" src="' + imageHref + '">'
						// '<img class="lightboxNext" src="media-pix/portfolios/heather/thumbs/h-port-02.jpg">' + 
					'</div>' + 
				'</div>';
			
			// Insert the #lightbox HTML into the page
			$('body').append(lightbox);
		}
	});

	//Hiding the #lightbox window
	$(document).on('click', '#lightbox', function() {
		$('#lightbox').hide();
	});
});


// GHOST HTML THAT WILL BE INSERTED DYNAMICALLY FROM THE CODE ABOVE

// <div id="lightbox">
//     <p>Click to close</p>
//     <div id="lighboxContent">
//         <img src="#" />
//     </div>
// </div>