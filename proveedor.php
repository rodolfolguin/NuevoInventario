<?php

include ("conecta.php");
$con=conectar();

	$rut_prov=$_POST["rutprov"];
	$nom_prov=$_POST["nombreprov"];
	$dir_prov=$_POST["direprov"];
	
	$insertar = "INSERT into proveedores values ('$rut_prov', '$nom_prov', '$dir_prov')";
		
    $result = mysqli_query($con, $insertar)
	    or die ("Error al Ingresar Datos");
	 mysqli_close($con);
	header("location: crearproveedor.html")
?>