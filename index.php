<?php
include "_/inc/datos-globales.php";
?><!doctype html>

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
	
	<title><?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>
	
	<meta name="description" content="">
	<!-- Google will often use this as its description of your page/site. Make it good or delete it. -->
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	
	<!--<meta name="google-site-verification" content="">
	 Speaking of Google, don't forget to set your site up: http://google.com/webmasters 
	 Mejor dejar esto como un recordatorio de agregar el sitio en webmasters, recomiendo usar el archivo independiente de verificación
	 Better leave this as a reminder, I'd recommend using the downloadable .html to verify with google. -->
	<?php include "views/viewport-fav-setup.php"; ?>
	
	<!-- CSS: pantalla, mobile & impreso están en el mismo archivo / screen, mobile & print are all in the same file
	This isn't a full reset nor just a full normalize, it adds default and commonly accepted style definitions plus our prefferences
	generated with Compass
	Este no es un reset completo como el de Eric Mayer, ni tampoco un normalize solamente estandariza definiciones comunmente aceptada, como cuerpos de texto, más preferencias nuestras. 
	generado con Compass -->
	<link rel="stylesheet" href="_/css/styles.css">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr and Respond.js. 
	Todo el javascript debe ir al pie de la página, excepto por modernizr y Respond.js -->
	<?php include "views/modernizr.php"; ?>

</head>

<body>

<!-- STICKY FOOTER ENABLED -->
<div class="amictus">
	<div class="wrapper">

	<header>
		
		<h1><a href="./">Page Title</a></h1>
		<div id="logoTop"><img src="" alt="Logotipo <?php echo $nombreMarca; ?>"></div>
		<nav>
		
			<ul>
				<li><a href="#">Nav Link 1</a></li>
				<li><a href="#">Nav Link 2</a></li>
				<li><a href="#">Nav Link 3</a></li>
			</ul>
		
		</nav>
	
	</header>
	
	<div class="corporis">
		
	</div>

	<div class="urgeo"></div>
</div>
<footer>	
	<div class="wrapper">
		<p><small>&copy; Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.</small></p>
	</div>
</footer>

</div>
<?php require("views/javascript-al-pie.php"); ?>  
</body>
</html>