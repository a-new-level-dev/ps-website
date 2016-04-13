<?php include('scripts/php/base-url.php'); ?>

<!DOCTYPE html>
<HTML lang="en">


<!-- Pg. 00, Painted Siren - Portal -->
<!-- ********************************************* HEAD: START ********************************************** -->
<HEAD>

	<meta charset="UTF-8"/>
	<meta name="author" content="Gabriel F. Lujan @ A New Level Media"/>
	<meta name="description" content=""/>
	
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
	<style type="text/css">
		body { 
			background-image: url(<?php echo BASE_URL; ?>/pics/logos/logo-siren.png); 
				background-size: 48% auto; 
				background-position: top center; 
				background-repeat: no-repeat; 
			background-color: #131313; 
			text-align: center; 
		}
		#message, #social { 
			background-color: rgba(1,1,1,0.75); 
			margin: 0 auto; 
				margin-top: 0;
			text-align: center; 
			width: 100%; 
		}
		#message { 
			margin-top: -1em; 
			padding-bottom: 1em; 
		}
			h1 { 
				color: #e40074; 
				font-family: Garamond, Verdana, serif; 
				font-size: 2.5em; 
			}
			p { 
				color: #c5c5c5; 
				font-size: 1.5em; 
			}
		#social { 
			position: fixed; 
				bottom: 0; 
			padding-top: 1em; 
		}
			li { 
				color: #c5c5c5; 
				display: inline-block; 
				list-style-type: none; 
			}
				li img { 
					border-radius: 5px; 
					border: 2px solid rgba(0,0,0,0); 
					width: 75%; 
				}
				li img:hover { border: 2px solid white; }
		@media screen and (max-width: 1024px) { 
			body { background-size: 100% auto; }
		}
	</style>

</HEAD>

<!-- ********************************************* BODY: START ********************************************** -->
<BODY>

	<!-- MAIN TRUNK OF DEFAULT.HTML -->
	<div id="message">
		<h1>The Painted Siren - Be Back Soon</h1>
		<p>We're doing some maintenance on the site right now. We'll be back soon!</p>
	</div>
	<div id="social">
		<ul>
			<li>
				<a href="https://facebook.com/thepaintedsiren"><img src="<?php echo BASE_URL; ?>/styles/img/social-badges/sb-face.png" title="Follow Us on Facebook" alt="Follow Us on Facebook"></a> </li>
			<li>
				<a href="https://instagram.com/thepaintedsiren"><img src="<?php echo BASE_URL; ?>/styles/img/social-badges/sb-inst.png" title="Follow Us on Instagram" alt="Follow Us on Instagram"></a> </li>
			<li>
				<a href="https://twitter.com/thepaintedsiren"><img src="<?php echo BASE_URL; ?>/styles/img/social-badges/sb-twit.png" title="Follow Us on Twitter" alt="Follow Us on Twitter"></a> </li>
		</ul>
	</div>

</BODY>


</HTML>









