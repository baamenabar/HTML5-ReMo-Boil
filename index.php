<?php
require_once("_/inc/datos-globales.php");/*require() could be faster // require() es probablemente más rápido. */
?>
<!doctype html>

<!-- no doy más soporte a ie6, punto. -->
<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. Ojo con el lang-->

<head>
	<!-- Sólo si la codificación no puede ser definida en los encabezados del servidor (.htaccess)
	<meta charset="utf-8"> -->
	<!-- Descomentar sólo si no hay .htaccess 
	Uncomment only if there is no .htaccess
	More info: h5bp.com/b/378 
	Forzar el motor de renderizado más reciente en IE y Chrome Frame
	Always force latest IE rendering engine (even in intranet) & Chrome Frame 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
	
	<title><?php echo $nombreMarca; ?></title>
	
	<meta name="title" content="<?php echo $nombreMarca.': '.$sloganMarca; ?>">
	<meta name="description" content="">
	<!-- Google will often use this as its description of your page/site. Make it good or delete it. -->
	
	<!--<meta name="google-site-verification" content="">
	 Speaking of Google, don't forget to set your site up: http://google.com/webmasters 
	 Mejor dejar esto como un recordatorio de agregar el sitio en webmasters, recomiendo usar el archivo independiente de verificación
	 Better leave this as a reminder, I'd recommend using the downloadable .html to verify with google. -->
	
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="<?php echo $nombreMarca; ?>">
	<meta name="DC.subject" content="<?php echo $sloganMarca; ?>">
	<meta name="DC.creator" content="<?php echo $autor; ?>">
	
	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->
	<!-- Usar sólo si considera estilos especiales para tamaños más pequeños / Uncomment to use; use thoughtfully!-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link rel="shortcut icon" href="favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ 
		 Aunque en inglés, este artículo es el definitivo http://bit.ly/4vTgof -->
		 
	<link rel="apple-touch-icon" href="_/imgs/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<!-- CSS: pantalla, mobile & impreso están en el mismo archivo / screen, mobile & print are all in the same file
	This isn't a full reset, it adds default and commonly accepted style definitions
	Este no es un reset completo como el de Eric Mayer, estandariza definiciones comunmente aceptada, como cuerpos de texto. -->
	<link rel="stylesheet" href="_/css/style.css">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="_/js/modernizr.custom.63825.js"></script>

</head>

<body>

<div class="wrapper"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

	<header>
		
		<h1><a href="/index.php">Page Title</a></h1>
		
		<nav>
		
			<ol>
				<li><a href="">Nav Link 1</a></li>
				<li><a href="">Nav Link 2</a></li>
				<li><a href="">Nav Link 3</a></li>
			</ol>
		
		</nav>
	
	</header>
	
	<article>
		
		<h1>Article Header</h1>
		
		<p>Etiam pretium odio eu mi convallis vitae varius neque pharetra. Nulla vestibulum nisi ut sem cursus sed mattis nisi egestas.</p>
		
		<h2>Article Subhead</h2>
		
		<p>Vestibulum lacus erat, volutpat vel dignissim at, fringilla ut felis.</p>
		
		<h3>Un Sub Tema en H3</h3>
		<ul>
		<li><h4>Título en h4</h4><p>para un párrafo en una lista</p></li>
		<li><h4>Título en h4</h4><p>para un párrafo en una lista</p></li>
		<li><h4>Título en h4</h4><p>para un párrafo en una lista</p></li>
		</ul>
		<h5>H5 para una listilla de sub-tema</h5>
		<h6>No puedo imaginarme 6 niveles de subtítulos</h6>
	
	</article>
	
	<aside>
	
		<h2>Sidebar Content</h2>
	
	</aside>
	
	<footer>
		
		<p><small>&copy; Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.</small></p>
		
	</footer>

</div>
<?php require("_/inc/javascript-al-pie.php"); ?>  
</body>
</html>