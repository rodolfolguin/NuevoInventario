<?php
function conectar(){
	$host = "localhost";
    $user = "root";
    $password = "";
    $db = "inventario";
    $enlace = mysqli_connect($host, $user, $password, $db) or die ("Error de conexion a la base de datos");
	 return $enlace;
	}
	
?>
