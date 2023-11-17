<?php
session_name('BACK');
//ini_set(default_charset, "");
//ini_set('display_errors', FALSE); 
//ini_set('log_errors', FALSE); 
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

	
	include 'config/conectar.php';
	include 'config/funciones.php';
	
	if(!isset($_SESSION['is_logged'])) {
		$_SESSION['is_logged'] = 'PHPSESSID';
		$_SESSION['is_logged'] == 0;
    } 
	
	if  ($_SESSION['is_logged']==0) {
		header('location: login.php?mensaje=Se ha desconectado del sistema');
	}
	
	
	
?>
<!DOCTYPE html>
<html lang="es-Es">
<head>
	
	    <meta charset="encoding">
	<title>Panel de Contenidos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" cont ent="noindex,nofollow,noarchive" />
	

	<!-- The styles -->
	<link href="css/bootstrap-spacelab.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>				</a>
				<span><a href="index.php"><img style="max-width:100px; max-height:100px" src="img/logo.png" border="0" alt="Sarco Construcciones" ></a></span>
				
				<!-- theme selector starts -->
			  <!-- theme selector ends -->
				
			  <!-- user dropdown starts -->
  <div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $_SESSION['Nombre']; ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="misdatos.php">Mis Datos</a></li>
						<li><a href="logout.php">Salir</a></li>
					</ul>
			  </div>
				<!-- user dropdown ends -->
				
				
			</div>
	  </div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
				
			
			<!-- left menu starts -->
			<?php include 'header_menu.php'; ?>
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Alerta!</h4>
					<p>Necesita tener Java Script habilitado para usar este sistema.</p>
				</div>
			</noscript>
			
			<!--<div id="content" class="container-fluid">-->
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
