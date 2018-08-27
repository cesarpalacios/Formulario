<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
 
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

// Variables
$time = time();
$fecha = date("d/m/Y", $time);
$datos = trim($_POST["datos"]);
$organizacion = trim($_POST["organizacion"]);
$Nombres = trim($_POST["Nombres"]);
$Apellidos = trim($_POST["Apellidos"]);
$Telefono = trim($_POST["Telefono"]);
$Correo = trim($_POST["Correo"]);
$Funcionario = trim($_POST["Funcionario"]);
$atencion = trim($_POST["atencion"]);
$calidad = trim($_POST["calidad"]);
$oportunidad = $_POST["oportunidad"];
$atencionf = $_POST["atencionf"];
$satisfaccion = $_POST["satisfaccion"];
$funcionarioc = $_POST["funcionarioc"];
$Paciencia = $_POST["Paciencia"];
$opinion = $_POST["opinion"];

//setcookie("encuesta", "20");

if(isset($fecha) && isset($datos) && isset($organizacion) && isset($Nombres) && isset($Apellidos) && isset($Telefono) && isset($Correo) && isset($Funcionario) && isset($atencion) && isset($calidad) && isset($oportunidad) && isset($atencionf) && isset($satisfaccion) && isset($funcionarioc) && isset($Paciencia) && isset($opinion)) {
	$fp = fopen("../registro.csv","a") or die('No abrio');
	fwrite($fp, "$fecha | $datos | $organizacion | $Nombres | $Apellidos | $Telefono | $Correo | $Funcionario | $atencion | $calidad | $oportunidad | $atencionf | $satisfaccion | $funcionarioc | $Paciencia | $opinion" . PHP_EOL) or die('no escribio');
	fclose($fp);
	header ("Location: https://github.com/cesarpalacios");
}

//if(!isset($_COOKIE["encuesta"])){
//	$fp = fopen("../registro.csv","a") or die('No abrio');
//	fwrite($fp, "$area | $uno | $dos | $tres | $cuatro | $cinco | $seis | $siete | $opinion" . PHP_EOL) or die('no escribio');
//	fclose($fp);
//	header ("Location: http://conexionantv/");
//	echo $_COOKIE["encuesta"];
//}else{
//	echo "<center><font color='red'><b>Cuidado!</b></font><br>Usted esta respondiendo dos veces el mismo cuestionario.</center><script>function redireccionar(){ ocument.location.href='http//conexionantv/' } setTimeout('redireccionar()', 200);</script>\n";
//}



?>