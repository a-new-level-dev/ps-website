<?php include('scripts/php/base-url.php'); ?>

<!DOCTYPE html>
<HTML lang="en">


<!-- Pg. 07, Painted Siren: Healing Info -->
<!-- ********************************************* HEAD: START ********************************************** -->
<HEAD>

	<meta charset="UTF-8">
	<meta name="author" content="Gabriel F. Lujan @ A New Level Media">
	<meta name="description" content="">
	<meta name="keywords" content="painted, siren, tattoo, shop, artist, art, graffiti, ink">
	
	<title>PS.com: Healing Info</title>

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
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/healing.css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/styles/css/responsive.css">

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
					<div id="topNav-healing" class="SELECTED"><a href="<?php echo BASE_URL; ?>/healing.php" class="ctrVert">Healing</a> </div> </nav>
				<div id="stickerTop">
					<a href="<?php echo BASE_URL; ?>/"><img src="<?php echo BASE_URL; ?>/pics/backgrounds/sticker/sticker-top.png" title="The Painted Siren Tattoo Company" alt="The Painted Siren Tattoo Company"> </a> </div>
				<div id="stickerBtm">
					<img src="<?php echo BASE_URL; ?>/pics/backgrounds/sticker/sticker-btm.png"> </div>
			</section>
		</header>
		
		<!-- ********************************************* SECTION: CONTENT ********************************************** -->
		<section id="content">
			<section id="wrapper">
				<article id="COLUMN">
					<h1>Healing &amp; Care Instructions</h1>
					<p>
						<strong>The First Day</strong>
						<p>Upon completion of your tattoo, it will be wrapped with a covering which you will leave on for one (1) hour.</p>
							<br>
						<p>* After one (1) hour you will remove the covering and gently but thoroughly wash your tattoo with a clean washcloth and antibacterial soap. BE SURE to wash it well and remove any remaining fluids, Vasoline, or other debris.  After rinsing the soap off of your tattoo, pat it dry and LEAVE IT ALONE FOR THE REMAINDER OF THE DAY. (During this time your tattoo needs to air out and start naturally healing.) YOU WILL NOT PUT ANYTHING ON THE TATTOO DURING THIS TIME.</p>
					</p>
					<br>
					<p>
						<strong>The Second Day</strong>
						<p>You will start applying a small amount of Lubriderm Unscented Lotion (the one with the light blue cap) twice (2 times) a day for the next two (2) weeks. Be sure when applying lotion that you spread it across fingers before applying so you don't over-saturate and can spread evenly across your tattoo.</p>
							<br>
						<p>*For the remainder of your healing process DO NOT EXPOSE TATTOO TO DIRECT SUNLIGHT OR SOAK TATTOO(swimming, hot tubs, bathtubs) DO NOT SLEEP ON YOUR TATTOO, DO NOT LET WATER BEAT DIRECTLY ON IT IN THE SHOWER and make sure to be careful of CHAFFING/RUBBING against clothing, sheets, and accessories.</p>
					</p> <br>
					<p>
						<p>DO NOT SCRATCH OR PICK AT YOUR TATTOO during the healing process. Itchiness is natural and is something that you must tolerate. IF THE SCAB COMES OFF PREMATURELY, THE INK WILL COME OFF WITH IT. (Avoid this by not allowing your scab to become too dry and cracking or by over-moisturizing it and causing the scab to become gooey and come off)</p>
							<br>
						<p>*Free touch ups are given with all tattoos (within 30 days of original tattoo) if all directions have been followed and damage is minimal. If you have additional questions please call the number at the top of this page.</p>
					</p>
				</article>
			</section>
			<!-- <section id="content-R">
				<section id="PROFILES">
					<h1>Helpful Items</h1>
					<p>Coming Soon</p> </section>
				<aside id="CONTACT">
					<h1>Learn More</h1>
					<p>Coming Soon</p> </aside>
			</section> -->
			<!-- Book Now sidebar tab -->
			<div id="sidebar">
				<script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script>
				<a id="Setmore_button_iframe" style="float:none; position: fixed; right: -2px; top: 25%; display: block; z-index: 10000" href="https://my.setmore.com/shortBookingPage/9b574aac-e907-4b96-a947-545c21b6b27a">
					<img border="none" src="<?php echo BASE_URL; ?>/pics/icons/setmore-book-now-pink.png" alt="Book an appointment with Painted Siren Tattoo Co. using SetMore" />
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









