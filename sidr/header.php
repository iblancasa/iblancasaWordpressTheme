<!doctype html>
<html>
	<head>
		<title>Iblancasa blog</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, minimum-scale=1">
		<link type="text/css" rel="stylesheet" href="normalize.css"/>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>

		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<title><?php wp_title(); ?></title>
 		
 		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/rmm-css/responsivemobilemenu.css" type="text/css"/>

		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/rmm-js/responsivemobilemenu.js"></script>

 		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/sidr/stylesheets/jquery.sidr.dark.css">
		<script src="sidr/jquery.sidr.min.js"></script>

		<script>
		$(document).ready(function() {
		  $('.simple-menu').sidr(
		  	{
		  		side: 'right'
		  	}
		  	);

		});
		     
		</script>
		<script src="jquery.touchwipe.min.js"></script>
		 
		<script>
		      $(window).touchwipe({
		        wipeLeft: function() {
		          // Close
		          $.sidr('close', 'sidr');
		        },
		        wipeRight: function() {
		          // Open
		          $.sidr('open', 'sidr');
		        },
		        preventDefaultEvents: false
		      });
		</script>

  <?php wp_head(); ?>
	</head>
		<body>		
		<div id="wrapper">
			<header id="cabecera">
				<img src="logo.gif"/>
			</header>
			<aside id="social">
				<img src="iconos/twitter.png"/>
				<img src="iconos/youtube.png"/>
				<img src="iconos/rss.png"/>
				<img src="iconos/linkedin.png"/>
				<img src="iconos/vimeo.png"/>
			</aside>
		<nav id="navegacionsuperior" class="rmm">
		        <ul>
		            <li><a href='#home'>INICIO</a></li>
		            <li><a href='#about-me'>SOBRE EL AUTOR</a></li>
		            <li><a href='#gallery'>CONTACTO</a></li>
		            <li><a href='#gallery'>SITIOS AMIGOS</a></li>
		            <li><a href='#gallery'>Contacto</a></li>


		       </ul>
		</nav>