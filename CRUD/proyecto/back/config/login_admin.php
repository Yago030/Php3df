<?php
// verificación de identidad
function login($u, $p) {
	
  		$strsql = "select * from seg_usuarios where usuario ='".$u."' and clave='".$p."' and activo='1'";
		$result = MySQLSESSION_ExecuteSQL($strsql);
        $rstlogin = mysqli_fetch_array($result);	
	    
		if ($rstlogin) {
                session_name('BACK');
				session_start();
			    $_SESSION['Usuario']   = $rstlogin['email'];	
				$_SESSION['IDUsuario'] = $rstlogin['id'];
			    $_SESSION['Nombre'] = $rstlogin['nombre'];	//$usu->ID;
			   				
				$_SESSION['is_logged'] = 1;
				
				
				
				
		} 
		  
		  
						
return $rstlogin;
} //fin login

// destruccion de variables de sesion
function logout() {
		
   		unset($_SESSION['IDUsuario']);
   		unset($_SESSION['Usuario']);
   		unset($_SESSION['Nombre']);
   		unset($_SESSION['is_logged']);
   		session_destroy();
} // fin logout


?>