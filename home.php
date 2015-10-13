<!DOCTYPE html>
<HTML lang="en">


<!-- Pg. 01, Painted Siren: Welcome! -->
<!-- ********************************************* HEAD: START ********************************************** -->
<HEAD>

	<meta charset="UTF-8"/>
	<meta name="author" content="Gabriel F. Lujan @ A New Level Media"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="painted, siren, tattoo, shop, artist, art, graffiti, ink"/>
	
	<title>Painted Siren - Welcome!</title>
	<base href="http://paintedsiren.com/" />

	<!-- WEBSITE FAVICON CODE -->
	<link rel="apple-touch-icon" sizes="57x57" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="media-pix/icons/logo-tooth-favicon.ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="media-pix/icons/logo-tooth-favicon.ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="media-pix/icons/logo-tooth-favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="media-pix/icons/logo-tooth-favicon.ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="media-pix/icons/logo-tooth-favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="media-pix/icons/logo-tooth-favicon.ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- CSS Links -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- JavaScript Links -->
	<script src="js/general.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<script>
		function initMap() {
			var myLatLng = {lat: 37.635658, lng: -122.492335};

			var map = new google.maps.Map(document.getElementById("googleMap"), {
				zoom: 9,
				center: myLatLng,
				draggable: true,
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
	<script async defer src="https://maps.googleapis.com/maps/api/js?signed_in=false&callback=initMap"></script>

</HEAD>

<!-- ********************************************* BODY: START ********************************************** -->
<BODY>
	<!-- Javascript code for FB Page Plugin -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
			fjs.parentNode.insertBefore(js, fjs);
		} (document, 'script', 'facebook-jssdk'));
	</script>

	<!-- ********************************************* SECTION: HEADER ********************************************** -->
	<section id="marquee" class="stroke-pnk"><a href=""><p>THE PAINTED SIREN</p> </a> </section>
	<section id="container" class="center">
		<header>
			<div id="logo"><img src="media-pix/logos/logo-siren-solidLines-traced3.png" alt="The Painted Siren Logo" /> </div>
			<section id="banner">
				<img src="media-pix/shop/shop-banner.jpg" />
				<div id="socialBadges">
					<a href="https://www.facebook.com/The-Painted-Siren-Tattoo-Company-228768640541810/" title="Follow us on Facebook"><div id="socialBadge-face" class="socialBadge"></div> </a>
					<a href="https://instagram.com/thepaintedsiren" title="Follow us on Instagram"><div id="socialBadge-inst" class="socialBadge"></div> </a>
					<a href="http://yelp.com/biz/the-painted-siren-tattoo-co-pacifica" title="Follow us on Yelp"><div id="socialBadge-yelp" class="socialBadge"></div> </a>
					<!-- <a href="" title="Follow us on LinkedIn"><div id="socialBadge-lnkd" class="socialBadge"></div> </a> -->
					<!-- <a href="" title="Follow us on Google+"><div id="socialBadge-goog" class="socialBadge"></div> </a> -->
					<a href="https://twitter.com/thepaintedsiren" title="Follow us on Twitter"><div id="socialBadge-twit" class="socialBadge"></div> </a>
					<!-- <a href="" title="Follow us on Pinterest"><div id="socialBadge-pint" class="socialBadge"></div> </a> --> </div>
			</section>
			<section id="topNav-wrapper">
				<nav id="topNav">
					<div id="topNav-portfolios"><a href="crew/heather.html" class="ctrVert">portfolios</a> </div>
					<div id="topNav-flash"><a href="flash.html" class="ctrVert">flash</a> </div>
					<div id="topNav-booking"><a href="booking.html" class="ctrVert">booking</a> </div>
						<div id="ghost"></div>
					<div id="topNav-henna"><a href="henna.html" class="ctrVert">henna</a> </div>
					<div id="topNav-healing"><a href="healing.html" class="ctrVert">healing</a> </div>
					<div id="topNav-buyStuff"><a href="buyStuff.html" class="ctrVert">buy stuff</a> </div> </nav>
				<div id="stickerTop">
					<a href=""><img src="media-pix/backgrounds/sticker/sticker-v3.png" title="The Painted Siren Tattoo Company" alt="The Painted Siren Tattoo Company"> </a> </div>
				<div id="stickerBtm">
					<img src="media-pix/backgrounds/sticker/sticker-bg-v3_btmA.png"> </div>
			</section>
		</header>

		<!-- ********************************************* SECTION: CONTENT ********************************************** -->
		<section id="content">
			<div id="content-L">
				<article id="TOPICS">
					<h1>About Us</h1>
					<p>A local landmark with its purple exterior, The Painted Siren Tattoo Company is the oldest and most established tattoo shop in Pacifica. Located one block from Pacifica Beach & Pier in Sharp Park, the shop is a premier destination in one of the Peninsula's most scenic communities. Focused on high quality tattoos and excellent client services, we are committed to providing incredible art, in a clean environment at a great price! <span class="hashtag">#comeandgetsome</span> </p>
					<h1>Shop News</h1>
					<article class="newsEntry">
						<span class="date">08, July 2015</span> <br/>
							<p>Hey everyone, The Painted Siren was featured in the Pacifica Tribune during the week of July 8-14. Go pick up a copy and check it out!</p>
							<img class="newsImg" src="media-pix/news/pacTrib.png" alt="The Painted Siren featured in the Pacifica Tribune">
					</article>
					<section id="socialFeeds">
						<div id="raffle">
							<script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script>
							<a id="Setmore_button_iframe" href="https://my.setmore.com/shortBookingPage/9b574aac-e907-4b96-a947-545c21b6b27a"><img src="media-pix/raffle/raffle-ticket.png" title="Painted Siren Raffle" alt="Painted Siren Raffle"></a>
						</div>
						<h1>Follow Us!</h1>
						<h3>Facebook</h3>
							<div class="fb-page" data-href="https://www.facebook.com/pages/The-Painted-Siren-Tattoo-Company/228768640541810" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
								<div class="fb-xfbml-parse-ignore">
									<blockquote cite="https://www.facebook.com/pages/The-Painted-Siren-Tattoo-Company/228768640541810">
										<a href="https://www.facebook.com/pages/The-Painted-Siren-Tattoo-Company/228768640541810">The Painted Siren Tattoo Company</a> </blockquote>
								</div>
							</div> <br/>
						<br/>
						<h3>Instagram</h3>
							<!-- SnapWidget -->
							<iframe src="http://snapwidget.com/in/?u=dGhlcGFpbnRlZHNpcmVufGlufDg1fDN8NXx8eWVzfDV8bm9uZXxvblN0YXJ0fHllc3xubw==&ve=150715" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:300px; height:500px; padding-left:1.25em;"></iframe>
					</section>
				</article>
			</div>
			<div id="content-R">
				<section id="PROFILES">
					<h1>Meet The Owner</h1>
						<a class="clrLink" href="portfolios/heather.html">
							<div id="heather"></div>
							<div class="profileName stroke-blk">heather tarkman</div> </a>
						<!-- <a class="clrLink" href="portfolios/shane.html">
							<div id="shane"></div>
							<div class="profileName">shane peterson</div> </a> -->
				</section>
				<aside id="CONTACT">
					<h1>Upcoming Events</h1>
						<p><img src="media-pix/events/events-bg-v3.png" title="" alt=""></p>
				</aside>
				<section id="INFO">
					<h1>Shop Info</h1>
						<address>Address:
							<a href="https://www.google.com/maps/place/1714+Palmetto+Ave,+Pacifica,+CA+94044/@37.635642,-122.492385,19z/data=!4m2!3m1!1s0x808f7b00042c0847:0x1db22b1200c544d8" class="address">1714 Palmetto Ave, Pacifica, CA 94044</a>
						</address>
						<p class="phone">Phone: <a href="tel:1-650-219-7343">(650) 219-7343</a> </p>
					<div id="googleMap"></div>
					<p>Shop Hours: Tues - Sun, 11am to 8pm (subject to change) <br/>
						<span class="note">* Hours can also be accommodated to fit client's schedule</span> </p>
				</section>
				<section id="GUESTBOOK">
					<h1>Guestbook</h1>
					<div><?php include('/home3/paintee3/public_html/lazgb/gbinclude.php'); ?> </div>
				</section>
			</div>
			<!-- Book Now sidebar tab -->
			<script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script>
				<a id="Setmore_button_iframe" style="float:none; position: fixed; right: -2px; top: 25%; display: block; z-index: 20000" href="https://my.setmore.com/shortBookingPage/9b574aac-e907-4b96-a947-545c21b6b27a">
					<img border="none" src="media-pix/icons/Setmore-Book-Now-Pink.png" alt="Book an appointment with Painted Siren Tattoo Co. using SetMore" />
				</a>
		</section>

		<!-- ********************************************* SECTION: FOOTER ********************************************** -->
		<footer>
			<nav id="btmNav">
				<ul>
					<li id="btmNav-home" class="btmNavLink"><a href="home.html">Home</a> </li>
						<li>|</li>
					<!-- <li id="btmNav-about" class="btmNavLink"><a href="events.html">Events</a> </li>
						<li>|</li> -->
					<!-- <li id="btmNav-news" class="btmNavLink">news</li>
						<li>|</li> -->
					<li id="btmNav-booking" class="btmNavLink"><a href="booking.html">Booking</a> </li>
						<!-- <li>|</li>
					<li id="btmNav-contact" class="btmNavLink">contact</li>
						<li>|</li>
					<li id="btmNav-legal" class="btmNavLink">legal</li> -->
				</ul>
			</nav>
			<section id="legal">
				<span>The Painted Siren &copy; 2015</span> <br/>
				<span id="ANL">Web Design by <a href="http://anewlevelmedia.com/" alt="A New Level Media">A New Level Media</a> </span>
			</section>
		</footer>
	</section>

</BODY>


</HTML>









