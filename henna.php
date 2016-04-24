<!-- Setting the BASE URL for the page -->
<?php include('scripts/php/base-url.php'); ?>

<!DOCTYPE html>
<HTML lang="en">


<!-- Pg. 05, Painted Siren: Buying Henna Art -->
<!-- ********************************************* HEAD: START ********************************************** -->
<HEAD>

	<meta charset="UTF-8">
	<meta name="author" content="Gabriel F. Lujan @ A New Level Media">
	<meta name="description" content="">
	<meta name="keywords" content="painted, siren, tattoo, shop, artist, art, graffiti, ink">
	
	<title>PS.com: Henna Art</title>

	<!-- WEBSITE FAVICON CODE -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="<?php echo BASE_URL; ?>/pics/icons/logo-tooth-favicon.ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- VENDOR STYLES -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/henna.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/imagelightbox.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/responsive/resp-henna.css">

</HEAD>

<!-- ********************************************* BODY: START ********************************************** -->
<BODY>

	<section id="marquee" class="stroke-pink"><a href="<?php echo BASE_URL; ?>/"><p>THE PAINTED SIREN</p> </a> </section>
	<section id="container">
		<!-- ********************************************* SECTION: HEADER ********************************************** -->
		<header>
			<div id="logo"><img src="<?php echo BASE_URL; ?>/pics/logos/logo-siren.png" alt="The Painted Siren Logo" /> </div>
			<section id="banner">
				<img src="<?php echo BASE_URL; ?>/pics/shop/shop-banner.jpg" />
				<div id="social-badges">
					<a href="https://facebook.com/thepaintedsiren" title="Follow us on Facebook"><div id="sb-face" class="social-badge"></div> </a>
					<a href="https://instagram.com/thepaintedsiren" title="Follow us on Instagram"><div id="sb-inst" class="social-badge"></div> </a>
					<a href="http://yelp.com/biz/the-painted-siren-tattoo-co-pacifica" title="Follow us on Yelp"><div id="sb-yelp" class="social-badge"></div> </a>
					<!-- <a href="" title="Follow us on LinkedIn"><div id="sb-lnkd" class="social-badge"></div> </a> -->
					<!-- <a href="" title="Follow us on Google+"><div id="sb-goog" class="social-badge"></div> </a> -->
					<a href="https://twitter.com/thepaintedsiren" title="Follow us on Twitter"><div id="sb-twit" class="social-badge"></div> </a>
					<!-- <a href="" title="Follow us on Pinterest"><div id="sb-pint" class="social-badge"></div> </a> --> </div>
			</section>
			<section id="topNav-wrapper">
				<!-- This is the Nav Bar for desktops and wider screens/devices -->
				<nav id="topNav">
					<div id="topNav-portfolios" class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Portfolio <span class="caret"></span> </button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						 	<li><a href="<?php echo BASE_URL; ?>/crew/heather.php">Heather</a> </li>
						 	<li role="separator" class="divider"></li>
						 	<li><a href="<?php echo BASE_URL; ?>/crew.php">The Crew</a> </li> </ul> </div>
					<div id="topNav-flash"><a href="<?php echo BASE_URL; ?>/flash.php" class="ctrVert">Flash</a> </div>
					<div id="topNav-booking" class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Booking <span class="caret"></span> </button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						 	<li><a href="<?php echo BASE_URL; ?>/booking.php">Appointment</a> </li>
						 	<li role="separator" class="divider"></li>
						 	<li><a href="<?php echo BASE_URL; ?>/booking.php#release">Release Info</a> </li> </ul> </div>
						<div id="ghost"></div>
					<div id="topNav-henna" class="dropdown SELECTED">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Henna <span class="caret"></span> </button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						 	<li><a href="<?php echo BASE_URL; ?>/henna.php">Gallery</a> </li>
						 	<li role="separator" class="divider"></li>
						 	<li><a href="<?php echo BASE_URL; ?>/henna.php#pricing">Pricing &amp; Events</a> </li> </ul> </div>
					<div id="topNav-jewelry"><a href="<?php echo BASE_URL; ?>/jewelry.php" class="ctrVert">Jewelry</a> </div>
					<div id="topNav-healing"><a href="<?php echo BASE_URL; ?>/healing.php" class="ctrVert">Healing</a> </div> </nav>
				<div id="stickerTop">
					<a href="<?php echo BASE_URL; ?>/"><img src="<?php echo BASE_URL; ?>/pics/backgrounds/sticker/sticker-top.png" title="The Painted Siren Tattoo Company" alt="The Painted Siren Tattoo Company"> </a> </div>
				<div id="stickerBtm">
					<img src="<?php echo BASE_URL; ?>/pics/backgrounds/sticker/sticker-btm.png"> </div>
			</section>
		</header>
		
		<!-- ********************************************* SECTION: CONTENT ********************************************** -->
		<section id="content">
			<section id="content-L">
				<article id="TOPICS">
					<section id="gallery">
						<h1>Get Your Henna On</h1>
						<ul>
							<!-- Group #1 -->
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-01.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-01.jpg" title="Painted Siren Henna - Example #1" alt="Painted Siren Henna - Example #1"></a> </li>
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-02.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-02.jpg" title="Painted Siren Henna - Example #2" alt="Painted Siren Henna - Example #2"></a> </li>
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-03.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-03.jpg" title="Painted Siren Henna - Example #3" alt="Painted Siren Henna - Example #3"></a> </li>
							
							<!-- Group #2 -->
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-04.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-04.jpg" title="Painted Siren Henna - Example #4" alt="Painted Siren Henna - Example #4"></a> </li>
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-05.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-05.jpg" title="Painted Siren Henna - Example #5" alt="Painted Siren Henna - Example #5"></a> </li>
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-06.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-06.jpg" title="Painted Siren Henna - Example #6" alt="Painted Siren Henna - Example #6"></a> </li>

							<!-- Group #3 -->
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-07.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-07.jpg" title="Painted Siren Henna - Example #7" alt="Painted Siren Henna - Example #7"></a> </li>
							<li><a href="<?php echo BASE_URL; ?>/pics/henna/henna-08.jpg" data-imagelightbox="f"><img src="<?php echo BASE_URL; ?>/pics/henna/henna-08.jpg" title="Painted Siren Henna - Example #8" alt="Painted Siren Henna - Example #8"></a> </li>
						</ul>
					</section>
					<section id="pricing">
						<h1>Pricing &amp; Events</h1>
						<div id="shop-visits">
							<h2>You Come To Us</h2>
								<h3>Individual Designs</h3>
									<p><span>Hands &amp; Feet</span> <span class="price"><span class="introductory">$65 &amp; up <sup>***</sup> </span> | $85 &amp; up</span></p>
									<p><span>Small &amp; Medium</span> <span class="price"><span class="introductory">$15 - $30 <sup>***</sup> </span> | $25 - $50</span></p>
									<p><span>Large Designs</span> <span class="price"><span class="introductory">$45 &amp; up <sup>***</sup> </span> | $65 &amp; up</span></p>
									<p class="note introductory"><sup>***</sup> These indtroductory prices are for a limited time only</p>
						</div>
						<div id="onsite-visits">
							<h2>We Go To You</h2>
								<h3>Private Parties, Corporate Events &amp; Holiday Occasions</h3>
									<p class="price">$100 first hour / $60 per additional hour</p>
								<h3>Bridal Parties</h3>
									<p class="price">$100 first hour / $60 per additional hour</p>
								<h3>Children's Events / Bar &amp; Bat Mitzvah's</h3>
									<p class="price">$140 first hour / $75 per additional hour</p>
								<h3>Baby Showers</h3>
									<p class="price">$100 first hour / $60 per additional hour</p>
									<ul>
										<li><span>Belly Art - Small &amp; Medium </span> <span>$45 - $70</span></li>
										<li><span>Belly Art - Large &amp; Full</span> <span>$85 &amp; up</span></li>
									</ul>
						</div>
						<a href="tel:1-650-219-7343"><div class="btn-cta"><span>Call to Book an Event</span></div> </a>
					</section>
				</article>
			</section>
			<section id="content-R">
				<section id="PROFILES">
					<h1>About Henna</h1>
					<p>"Henna (<a href="https://en.wikipedia.org/wiki/Henna">Lawsonia Inermis</a>) is a woody shrub that thrives in hot and arid climates. The henna plant produces extremely fragrant and delicate flowers, which have been used in perfumes since ancient times. The leaves of the henna plant are harvested, dried, and then ground into a fine powder. This lovely silken green powder is made into a paste using safe and natural ingredients. The paste is applied to the skin using a fine tipped applicator, and produces the familiar burgundy stains that have adorned the hands and feet of women for thousands of years." (source: <a href="http://heartfirehenna.com/about/what-is-henna.html">HeartfireHenna.com</a>)</p> </section>
				<aside id="CONTACT">
					<h1>Helpful Info</h1>
					<ul id="henna-links">
						<li><a href="http://www.fda.gov/cosmetics/productsingredients/products/ucm108569.htm">FDA Fact Sheet</a> </li>
						<li><a href="http://www.britannica.com/plant/henna">Encyclop&aelig;dia Brittanica</a> </li>
						<li><a href="http://www.tattooideashub.com/henna-tattoos/">"What You Need to Know About Henna Tattoos"</a> </li>
						<li><a href="http://hairandskincaretips.blogspot.com/2013/01/all-you-need-to-know-about-henna.html">Hair &amp; Skin Care Tips: Henna</a> </li>
					</ul> </aside>
			</section>
			<!-- Book Now sidebar tab -->
			<div id="sidebar">
				<script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script>
				<a id="Setmore_button_iframe" style="float:none; position: fixed; right: -2px; top: 25%; display: block; z-index: 10000" href="https://my.setmore.com/shortBookingPage/9b574aac-e907-4b96-a947-545c21b6b27a">
					<img border="none" src="<?php echo BASE_URL; ?>/pics/icons/setmore-book-now.png" alt="Book an appointment with Painted Siren Tattoo Co. using SetMore" />
				</a>
			</div>
		</section>
		
		<!-- ********************************************* SECTION: FOOTER ********************************************** -->
		<footer>
			<nav id="btmNav">
				<ul>
					<li id="btmNav-home" class="btmNavLink"><a href="<?php echo BASE_URL; ?>/">Home</a> </li>
						<li>|</li>
					<li id="btmNav-booking" class="btmNavLink"><a href="<?php echo BASE_URL; ?>/booking.php">Booking</a> </li>
						<!-- <li>|</li>
					<li id="btmNav-faq" class="btmNavLink"><a href="<?php echo BASE_URL; ?>/faq.php">FAQ</a></li> -->
				</ul>
			</nav>
			<section id="legal">
				<span>The Painted Siren &copy; <span id="copyright"></span> </span> <br>
				<span id="ANL">Web Design by <a href="http://anewlevelmedia.com/" target="_blank" alt="A New Level Media">A New Level Media</a> </span>
			</section>
		</footer>
	</section>

	<!-- VENDOR SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
		<!-- Adding the ImageLightbox jQuery Plug-In -->
		<script src="<?php echo BASE_URL; ?>/scripts/vendor/imagelightbox.js"></script>
		<script>
			$( function() {
					// ACTIVITY INDICATOR
				var activityIndicatorOn = function() { $( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
					},
					activityIndicatorOff = function() { $( '#imagelightbox-loading' ).remove();
					},


					// OVERLAY
					overlayOn = function() { $( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
					},
					overlayOff = function() { $( '#imagelightbox-overlay' ).remove();
					},


					// CLOSE BUTTON
					closeButtonOn = function( instance ) { $( '<button type="button" id="imagelightbox-close" title="Close"></button>' ).appendTo( 'body' ).on( 'click touchend', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
					},
					closeButtonOff = function() { $( '#imagelightbox-close' ).remove();
					},


					// CAPTION
					captionOn = function() {
						var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
						if( description.length > 0 )
							$( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
					},
					captionOff = function() { $( '#imagelightbox-caption' ).remove();
					},


					// NAVIGATION
					navigationOn = function( instance, selector ) {
						var images = $( selector );
						if( images.length ) {
							var nav = $( '<div id="imagelightbox-nav"></div>' );
							for( var i = 0; i < images.length; i++ )
								nav.append( '<button type="button"></button>' );

							nav.appendTo( 'body' );
							nav.on( 'click touchend', function(){ return false; });

							var navItems = nav.find( 'button' );
							navItems.on( 'click touchend', function() {
								var $this = $( this );
								if( images.eq( $this.index() ).attr( 'href' ) != $( '#imagelightbox' ).attr( 'src' ) )
									instance.switchImageLightbox( $this.index() );

								navItems.removeClass( 'active' );
								navItems.eq( $this.index() ).addClass( 'active' );

								return false;
							})
							.on( 'touchend', function(){ return false; }); 
						}
					},
					navigationUpdate = function( selector ) {
						var items = $( '#imagelightbox-nav button' );
						items.removeClass( 'active' );
						items.eq( $( selector ).filter( '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ).index( selector ) ).addClass( 'active' );
					},
					navigationOff = function() { $( '#imagelightbox-nav' ).remove();
					},


					// ARROWS
					arrowsOn = function( instance, selector ) {
						var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

						$arrows.appendTo( 'body' );

						$arrows.on( 'click touchend', function( e ) {
							e.preventDefault();

							var $this	= $( this ),
								$target	= $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
								index	= $target.index( selector );

							if( $this.hasClass( 'imagelightbox-arrow-left' ) ) {
								index = index - 1;
								if( !$( selector ).eq( index ).length )
									index = $( selector ).length;
							} else {
								index = index + 1;
								if( !$( selector ).eq( index ).length )
									index = 0;
							}

							instance.switchImageLightbox( index );
							return false;
						});
					},
					arrowsOff = function() { $( '.imagelightbox-arrow' ).remove(); };

				//	ALL COMBINED
				var selectorF = 'a[data-imagelightbox="f"]';
				var instanceF = $( selectorF ).imageLightbox(
				{
					onStart:		function() { overlayOn(); closeButtonOn( instanceF ); arrowsOn( instanceF, selectorF ); },
					onEnd:			function() { overlayOff(); captionOff(); closeButtonOff(); arrowsOff(); activityIndicatorOff(); },
					onLoadStart: 	function() { captionOff(); activityIndicatorOn(); },
					onLoadEnd:	 	function() { captionOn(); activityIndicatorOff(); $( '.imagelightbox-arrow' ).css( 'display', 'block' ); }
				});
			});
		</script>

	<script src="<?php echo BASE_URL; ?>/scripts/vendor/modernizr-custom.js"></script>

		<!-- Google Analytics Tracking ID/code -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-74943527-1', 'auto');
			ga('send', 'pageview');
		</script>

	<!-- CUSTOM SCRIPTS -->
	<script src="<?php echo BASE_URL; ?>/scripts/js/general.js"></script>

</BODY>


</HTML>









