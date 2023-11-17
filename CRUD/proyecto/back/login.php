<?php
	include 'config/conectar.php';
	if (isset($_REQUEST['Login'])) {
		
			
		$u=$_POST['username'];
		$p=md5($_POST['password']);

		$strsql = "select * from seg_usuarios where usuario ='".$u."' and clave='".$p."' and activo='1'";
		$result = MySQLSESSION_ExecuteSQL($strsql);
        $rstlogin = mysqli_fetch_array($result);	
	    
		if ($rstlogin) {
                session_name('BACK');
				session_start();
			    $_SESSION['Usuario']   = $rstlogin['usuario'];	
				$_SESSION['IDUsuario'] = $rstlogin['id'];
			    $_SESSION['Nombre'] = $rstlogin['nombre'];	//$usu->ID;
			   				
				$_SESSION['is_logged'] = 1;
			
				
				
		} 

     	if ($_SESSION['is_logged']==1) {
		    
			$user=$_SESSION['IDUsuario'];
			$hoy=date('Y-m-d H:i:s');
			
						
			header ('location: index.php');
			exit();
	 	}else{
			header('location: login.php?mensajee=Usuario o Password Incorrectos');
	 	}
	}
?>
<!DOCTYPE html>
<html lang="es-Es">
<head>
	
	<meta charset="encoding">
	<title>Panel de Contenidos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" cont ent="noindex,follow,noarchive" />
	
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
			
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
                <p><img style="max-width:150px; max-height:150px" src="img/logo.png" ></p>
                <div class="clearfix"></div>
					<div class="alert alert-info">
						Por favor ingrese con su Usuario y Contrase&#241;a</div>
					<form name="frm" id="frm" class="form-horizontal" action="login.php" method="post">
						<fieldset>
							<div class="input-prepend" title="Usuario" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text"  />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Clave" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password"  />
							</div>
							<div class="clearfix"></div>

							
							<div class="clearfix"></div>

							<p class="center span5">
                            <input class="btn btn-primary" name="Login"  type="submit" value="Login" />
							
							</p>
						</fieldset>
					</form>
                    <?php 
					$mensajee=$_GET['mensajee'];
					if ($mensajee!=NULL) { ?>
                    <div class="clearfix"></div>
                    <div class="alert alert-error">
							<strong>ERROR!</strong> <?php echo $_REQUEST['mensajee']; ?>
						</div>
                    <?php } ?>
                     <?php 
					 $mensaje=$_GET['mensaje'];
					 if ($mensaje!=NULL) { ?>
                    <div class="clearfix"></div>
                    <div class="alert alert-success">
							<?php echo $_REQUEST['mensaje']; ?>
						</div>
                    <?php } ?>
				</div><!--/span-->
			</div><!--/row-->
<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
    
    
</body>
</html>