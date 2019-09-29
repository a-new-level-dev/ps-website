<!-- Setting the BASE URL for the page -->
<?php include('scripts/php/base-url.php'); ?>

<!DOCTYPE html>
<HTML lang="en">


<!-- Pg. 01, Painted Siren: Welcome! -->
<!-- ********************************************* HEAD: START ********************************************** -->
<HEAD>

	<meta charset="UTF-8">
	<meta name="author" content="Gabriel F. Lujan @ A New Level Media">
	<meta name="description" content="">
	<meta name="keywords" content="painted, siren, tattoo, shop, artist, art, graffiti, ink">

	<title>The Painted Siren</title>

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
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/home.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/responsive/resp-home.css">

</HEAD>

<!-- ********************************************* BODY: START ********************************************** -->
<BODY>
	<!-- Javascript code for FB Page Plugin -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

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
					<div id="topNav-henna" class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Henna <span class="caret"></span> </button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						 	<li><a href="<?php echo BASE_URL; ?>/henna.php">Gallery</a> </li>
						 	<li role="separator" class="divider"></li>
						 	<li><a href="<?php echo BASE_URL; ?>/henna.php#pricing">Pricing &amp; Events</a> </li> </ul> </div>
					<div id="topNav-jewelry"><a href="<?php echo BASE_URL; ?>/jewelry.php" class="ctrVert">Jewelry</a> </div>
					<div id="topNav-healing"><a href="<?php echo BASE_URL; ?>/healing.php" class="ctrVert">Healing</a> </div>
				</nav>
				<!-- This is the Nav Bar for Mobile devices and screens smaller than 800px wide -->
				<nav id="topNav-mobile">
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Menu <span class="caret"></span> </button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="<?php echo BASE_URL; ?>/">Home</a> </li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo BASE_URL; ?>/crew/heather.php">Portfolio</a> </li>
							<li><a href="<?php echo BASE_URL; ?>/crew.php">The Crew</a> </li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo BASE_URL; ?>/flash.php" class="ctrVert">Flash</a> </li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo BASE_URL; ?>/booking.php">Booking</a> </li>
							<li><a href="<?php echo BASE_URL; ?>/booking.php#release">Release Info</a> </li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo BASE_URL; ?>/henna.php">Henna</a> </li>
							<li><a href="<?php echo BASE_URL; ?>/henna.php#pricing">Pricing &amp; Events</a> </li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo BASE_URL; ?>/jewelry.php">Jewelry</a> </li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo BASE_URL; ?>/healing.php">Healing</a> </li> </ul> </div>
				</nav>
				<!-- This is the sticker/badge in the center of the Top Nav Bar -->
				<div id="stickerTop">
					<a href="<?php echo BASE_URL; ?>/"><img src="<?php echo BASE_URL; ?>/pics/backgrounds/sticker/sticker-top.png" title="The Painted Siren Tattoo Company" alt="The Painted Siren Tattoo Company"> </a> </div>
				<div id="stickerBtm">
					<img src="<?php echo BASE_URL; ?>/pics/backgrounds/sticker/sticker-btm.png"> </div>
			</section>
		</header>

		<!-- ********************************************* SECTION: CONTENT ********************************************** -->
		<section id="content">
			<div id="content-L">
				<article id="TOPICS">
					<div id="about">
						<h1>About Us</h1>
						<p>A local landmark with its purple exterior, The Painted Siren Tattoo Company is the oldest and most established tattoo shop in Pacifica. Located one block from Pacifica Beach &amp; Pier in Sharp Park, the shop is a premier destination in one of the Peninsula's most scenic communities.</p>
						<p>Focused on high quality tattoos and excellent client services, we are committed to providing incredible art, in a clean environment at a great price! <span class="hashtag">#comeandgetsome</span> </p></p>
					</div>
					<article class="news-entry">
						<h1>Highlights</h1>
						<img class="news-img" src="<?php echo BASE_URL; ?>/pics/news/pac-trib.png" alt="The Painted Siren featured in the Pacifica Tribune">
						<p>Hey everyone, The Painted Siren was featured in the <a href="http://www.pacificatribune.com/">Pacifica Tribune</a> during the week of July 8-14, 2015!</p>
					</article>
					<section id="social-feeds">
						<h1>Follow Us!</h1>
						<h3>Facebook</h3>
						<div class="fb-page" data-href="https://www.facebook.com/The-Painted-Siren-Tattoo-Company-228768640541810/" data-width="500" data-height="775" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
						<h3>Instagram</h3>
						<!-- SnapWidget -->
						<script src="http://snapwidget.com/js/snapwidget.js"></script>
						<iframe src="http://snapwidget.com/in/?u=dGhlcGFpbnRlZHNpcmVufGlufDEyNXw0fDR8fHllc3w2fGZhZGVPdXR8b25TdGFydHx5ZXN8eWVz&ve=281015" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
					</section>
				</article>
			</div>
			<div id="content-R">
				<section id="PROFILES">
					<h1>Meet The Owner</h1>
					<a class="clrLink" href="<?php echo BASE_URL; ?>/crew/heather.php">
						<div class="profile-container">
							<div id="heather"></div>
							<div class="profileName stroke-black">Heather Tarkman</div>
						</div> </a>
				</section>
				<aside id="CONTACT">
					<h1>Latest News</h1>
					<p><a href="<?php echo BASE_URL; ?>/henna.php"><img class="news-img" src="<?php echo BASE_URL; ?>/pics/news/henna-hands.jpg" title="The Painted Siren Now Offers Henna Art" alt="The Painted Siren Now Offers Henna Art"></a> </p>
					<p>The Painted Siren is now offering Henna Artwork! Check out <a href="<?php echo BASE_URL; ?>/henna.php">our page</a> to learn more.</p>
				</aside>
				<section id="INFO">
					<h1>Shop Info</h1>
					<address>Address:
						<a href="https://www.google.com/maps/place/1714+Palmetto+Ave,+Pacifica,+CA+94044/@37.635642,-122.492385,19z/data=!4m2!3m1!1s0x808f7b00042c0847:0x1db22b1200c544d8" class="address">1714 Palmetto Ave, Pacifica, CA 94044</a>
					</address>
					<p class="phone">Phone: <a href="tel:1-650-219-7343">(650) 219-7343</a> </p>
					<div id="googleMap"></div>
					<p>Shop Hours: Tues - Sun, 11am to 8pm<sup>*</sup> <br>
						(subject to change) <br>
						<span class="note">* Hours can also be accommodated to fit client's schedule</span>
					</p>
				</section>
				<section id="GUESTBOOK">
					<h1>Guestbook</h1>
					<div id="wufoo-zvy717q19o3gkb">
						<a href="https://paintedsiren.wufoo.com/forms/zvy717q19o3gkb">Sign our guestbook</a> and leave us a message!
					</div>
					<!-- Wufoo Form Plug-In for Guestbook -->
					<script type="text/javascript">
						var zvy717q19o3gkb;(function(d, t) {
						var s = d.createElement(t), options = {
						'userName':'paintedsiren',
						'formHash':'zvy717q19o3gkb',
						'autoResize':true,
						'height':'517',
						'async':true,
						'host':'wufoo.com',
						'header':'show',
						'ssl':true};
						s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
						s.onload = s.onreadystatechange = function() {
						var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
						try { zvy717q19o3gkb = new WufooForm();zvy717q19o3gkb.initialize(options);zvy717q19o3gkb.display(); } catch (e) {}};
						var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
						})(document, 'script');
					</script>
					<p class="disclaimer">(By signing this guestbook, you are opting in to receive our newsletter.)</p>
				</section>
			</div>
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
					<li id="btmNav-home" class="btmNavLink">Home</li>
						<li>|</li>
					<li id="btmNav-booking" class="btmNavLink"><a href="<?php echo BASE_URL; ?>/booking.php">Booking</a> </li>
						<!-- <li>|</li>
					<li id="btmNav-faq" class="btmNavLink"><a href="<?php echo BASE_URL; ?>/faq.html">FAQ</a> </li> -->
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
	<script src="<?php echo BASE_URL; ?>/scripts/vendor/modernizr-custom.js"></script>

		<!-- Script for Google Map -->
		<script>
			function initMap() {
				var myLatLng = {lat: 37.635658, lng: -122.492335};

				var map = new google.maps.Map(document.getElementById("googleMap"), {
					zoom: 11,
					center: myLatLng,
					draggable: false,
					scrollwheel: false,
					disableDoubleClickZoom: true,
					zoomControl: false,

					// Styling from SnazzyMaps.com
					styles: [{"featureType":"all","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#ed5929"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#c4c4c4"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#ed5929"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21},{"visibility":"on"}]},{"featureType":"poi.business","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ed5929"},{"lightness":"0"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#ed5929"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#575757"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"color":"#2c2c2c"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#999999"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
				});

				var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					title: "The Painted Siren",
				});
			};
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>

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
