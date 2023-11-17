<?php
	
//Muestra Fecha
function fsalida($cad2){
	$tres=substr($cad2, 0, 4);
	$dos=substr($cad2, 5, 2);
	$uno=substr($cad2, 8, 2);
	$cad = ($uno."/".$dos."/".$tres);
	return $cad; 
}


//carga Fecha
function fentrada($cad){
	$uno=substr($cad, 0, 2);
	$dos=substr($cad, 3, 2);
	$tres=substr($cad, 6, 4);
	$cad2 = ($tres."-".$dos."-".$uno);
	return $cad2;
}

//formato numero
function formatonumero($numero){
	$numeroformato=number_format($numero, 2, ',', '.');
	return $numeroformato;
}

//calcula edad
function CalculaEdad( $fecha ) {
	list($Y,$m,$d) = explode("-",$fecha);
	return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}


//convierte segundos en HMS
function tiempo_segundos($segundos){
	$minutos=$segundos/60;
	$horas=floor($minutos/60);
	$minutos2=$minutos%60;
	$segundos_2=$segundos%60%60%60;
	
	if($minutos2<10)$minutos2='0'.$minutos2;
	
	if($segundos_2<10)$segundos_2='0'.$segundos_2;

	if($segundos<60){ /* segundos */
		$resultado= '00:00:'.round($segundos);
	}elseif($segundos>60 && $segundos<3600){/* minutos */
		$resultado= '00:'.$minutos2.':'.$segundos_2;
	}else{/* horas */
		$resultado=$horas.':'.$minutos2.':'.$segundos_2;
	}
	
	return $resultado;
} 


//restar fechas
function restaFechas($dFecIni, $dFecFin) {
	$dFecIni = str_replace("-","",$dFecIni);
	$dFecIni = str_replace("-","",$dFecIni);
	$dFecFin = str_replace("-","",$dFecFin);
	$dFecFin = str_replace("-","",$dFecFin);

	ereg( "([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})", $dFecIni, $aFecIni);
	ereg( "([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})", $dFecFin, $aFecFin);

	$date1 = mktime(0,0,0,$aFecIni[2], $aFecIni[3], $aFecIni[1]);
	$date2 = mktime(0,0,0,$aFecFin[2], $aFecFin[3], $aFecFin[1]);

	return round(($date2 - $date1) / (60 * 60 * 24));
}


//FunciÛn que resta horas
function restar_horas ($hora1,$hora2){
    
    $temp1 = explode(":",$hora1);
    $temp_h1 = (int)$temp1[0];
    $temp_m1 = (int)$temp1[1];
    $temp_s1 = (int)$temp1[2];
    $temp2 = explode(":",$hora2);
    $temp_h2 = (int)$temp2[0];
    $temp_m2 = (int)$temp2[1];
    $temp_s2 = (int)$temp2[2];
    
    // si $hora2 es mayor que la $hora1, invierto
    if( $temp_h1 < $temp_h2 ){
        $temp  = $hora1;
        $hora1 = $hora2;
        $hora2 = $temp;
    }
    /* si $hora2 es igual $hora1 y los minutos de
       $hora2 son mayor que los de $hora1, invierto*/
    elseif( $temp_h1 == $temp_h2 && $temp_m1 < $temp_m2){
        $temp  = $hora1;
        $hora1 = $hora2;
        $hora2 = $temp;
    }
    /* horas y minutos iguales, si los segundos de 
       $hora2 son mayores que los de $hora1,invierto*/
    elseif( $temp_h1 == $temp_h2 && $temp_m1 == $temp_m2 && $temp_s1 < $temp_s2){
        $temp  = $hora1;
        $hora1 = $hora2;
        $hora2 = $temp;
    }    
    
    $hora1=explode(":",$hora1);
    $hora2=explode(":",$hora2);
    $temp_horas = 0;
    $temp_minutos = 0;        
    
    //resto segundos
    $segundos;
    if( (int)$hora1[2] < (int)$hora2[2] ){
        $temp_minutos = -1;        
        $segundos = ( (int)$hora1[2] + 60 ) - (int)$hora2[2];
    }
    else    
        $segundos = (int)$hora1[2] - (int)$hora2[2];
        
    //resto minutos
    $minutos;
    if( (int)$hora1[1] < (int)$hora2[1] ){
        $temp_horas = -1;        
        $minutos = ( (int)$hora1[1] + 60 ) - (int)$hora2[1] + $temp_minutos;
    }    
    else
        $minutos =  (int)$hora1[1] - (int)$hora2[1] + $temp_minutos;
        
    //resto horas    
    $horas = (int)$hora1[0]  - (int)$hora2[0] + $temp_horas;
        
    if($horas<10)
        $horas= '0'.$horas;
    
    if($minutos<10)
        $minutos= '0'.$minutos;
    
    if($segundos<10)
        $segundos= '0'.$segundos;
        
    $rst_hrs = $horas.':'.$minutos.':'.$segundos;    

    return ($rst_hrs);    
    
}  
	
//FunciÛn que suma horas
function suma_horas ($hora1,$hora2){

    $hora1=explode(":",$hora1);
    $hora2=explode(":",$hora2);
    $temp=0;
    
    //sumo segundos
    $segundos=(int)$hora1[2]+(int)$hora2[2];
    while($segundos>=60){        
        $segundos=$segundos-60;
        $temp++;
    }
        
    //sumo minutos
    $minutos=(int)$hora1[1]+(int)$hora2[1]+$temp;
    $temp=0;
    while($minutos>=60){        
        $minutos=$minutos-60;
        $temp++;
    }
    
    //sumo horas
    $horas=(int)$hora1[0]+(int)$hora2[0]+$temp;
    
    if($horas<10)
        $horas= '0'.$horas;
    
    if($minutos<10)
        $minutos= '0'.$minutos;
    
    if($segundos<10)
        $segundos= '0'.$segundos;
        
    $sum_hrs = $horas.':'.$minutos.':'.$segundos;
    
    return ($sum_hrs);     
    
} 

//redimensiona una imagen
function redimensionar($imagen, $ancho, $alto){

	$anchura=$ancho;
	$hmax=$alto;
	$nombre=basename($imagen);
	$datos = getimagesize($nombre);
	if($datos[2]==1){$img = @imagecreatefromgif($nombre);}
	if($datos[2]==2){$img = @imagecreatefromjpeg($nombre);}
	if($datos[2]==3){$img = @imagecreatefrompng($nombre);}
	$ratio = ($datos[0] / $anchura);
	$altura = ($datos[1] / $ratio);
	if($altura>$hmax){$anchura2=$hmax*$anchura/$altura;$altura=$hmax;$anchura=$anchura2;}
	$thumb = imagecreatetruecolor($anchura,$altura);
	imagecopyresampled($thumb, $img, 0, 0, 0, 0, $anchura, $altura, $datos[0], $datos[1]);
	if($datos[2]==1){header("Content-type: image/gif"); imagegif($thumb);}
	if($datos[2]==2){header("Content-type: image/jpeg");imagejpeg($thumb);}
	if($datos[2]==3){header("Content-type: image/png");imagepng($thumb); }
	imagedestroy($thumb);
}

//***************************************
//***
// Funci√≥n para redimencionar las im√°genes
// utilizando las liber√≠as de GD de PHP
//***

function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension){
    $rutaImagenOriginal = $ruta.$nombre;
    if($extension == 'GIF' || $extension == 'gif'){
    $img_original = imagecreatefromgif($rutaImagenOriginal);
    }
    if($extension == 'jpg' || $extension == 'JPG'){
    $img_original = imagecreatefromjpeg($rutaImagenOriginal);
    }
    if($extension == 'png' || $extension == 'PNG'){
    $img_original = imagecreatefrompng($rutaImagenOriginal);
    }
    $max_ancho = $ancho;
    $max_alto = $alto;
    list($ancho,$alto)=getimagesize($rutaImagenOriginal);
    $x_ratio = $max_ancho / $ancho;
    $y_ratio = $max_alto / $alto;
    if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
  	$ancho_final = $ancho;
		$alto_final = $alto;
	} elseif (($x_ratio * $alto) < $max_alto){
		$alto_final = ceil($x_ratio * $alto);
		$ancho_final = $max_ancho;
	} else{
		$ancho_final = ceil($y_ratio * $ancho);
		$alto_final = $max_alto;
	}
    $tmp=imagecreatetruecolor($ancho_final,$alto_final);
    imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
    imagedestroy($img_original);
    $calidad=90;
    imagejpeg($tmp,$ruta.$nombreN,$calidad);
    
}
//***************************************


/******************************************************/
/* Funcion paginar
 * actual:          Pagina actual
 * total:           Total de registros
 * por_pagina:      Registros por pagina
 * enlace:          Texto del enlace
 * maxpags:         El m&aacute;ximo de p&aacute;ginas a presentar simult&aacute;neamente (opcional)
 * Devuelve un texto que representa la paginacion
 */
function paginar($actual, $total, $por_pagina, $enlace, $maxpags=10) {
  $total_paginas = ceil($total/$por_pagina);
  $anterior = $actual - 1;
  $posterior = $actual + 1;
  $minimo = $maxpags ? max(1, $actual-ceil($maxpags/2)): 1;
  $maximo = $maxpags ? min($total_paginas, $actual+floor($maxpags/2)): $total_paginas;
  if ($actual>1)
    $texto = "<li><a href=\"$enlace$anterior\">Ant</a></li>";
  else
    $texto = "<li><a >Ant</li>";
  if ($minimo!=1) $texto.= "<li><a >...</a></li>";
  for ($i=$minimo; $i<$actual; $i++)
    $texto .= "<li><a href=\"$enlace$i\">$i</a></li>";
  $texto .= "<li class=\"active\"><a >$actual</a></li>";
  for ($i=$actual+1; $i<=$maximo; $i++)
    $texto .= "<li><a href=\"$enlace$i\">$i</a></li>";
  if ($maximo!=$total_paginas) $texto.= "<li><a >...</a></li>";
  if ($actual<$total_paginas)
    $texto .= "<li><a href=\"$enlace$posterior\">Sig</a></li>";
  else
    $texto .= "<li><a >Sig</a></li>";
  return $texto;
}

function booleanoAmigable($valorBoolean){
	if ($valorBoolean)
		return "S&iacute;";
	
	else
		return "No";
}

//***************************************
function urls_amigables($url) {

// Tranformamos todo a minusculas

$url = strtolower($url);

//Rememplazamos caracteres especiales latinos

$find = array('·', 'È', 'Ì', 'Û', '˙', 'Ò');

$repl = array('a', 'e', 'i', 'o', 'u', 'n');

$url = str_replace ($find, $repl, $url);

// AÒaadimos los guiones

$find = array(' ', '&', '\r\n', '\n', '+');
$url = str_replace ($find, '-', $url);

// Eliminamos y Reemplazamos dem·s caracteres especiales

$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

$repl = array('', '-', '');

$url = preg_replace ($find, $repl, $url);

return $url;

}

//*************************************************

?>