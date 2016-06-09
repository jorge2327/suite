<?php 
include("conexion.php");

if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['pw']) && !empty($_POST['pw']))
	

{
	$con=mysql_connect($host, $user, $pw)or die ("error al conectar");
	mysql_select_db($db, $con)or die ("error al conectar la base de datos");

	mysql_query("INSERT INTO tabla (NOMBRE, PW) VALUES ('$_POST[nombre]','$_POST[pw]')",$con);
echo"Conexion correcta";
}else{
	echo "error al conectar pagina";
}

 ?>