<?php

include ("conecta.php");
$con=conectar();

	$cod_prod=$_POST["codigo"];
	$nom_prod=$_POST["nombre"];
	$cant_prod=$_POST["cantidad"];
	$prec_prod=$_POST["precio"];
	$prov_prod=$_POST["proveedor"];
	
	$insertar = "INSERT into productos values ('$cod_prod', '$nom_prod', '$cant_prod', '$prec_prod', '$prov_prod')";
		
    $result = mysqli_query($con, $insertar)
	    or die ("Error al Ingresar Datos");
	mysqli_close($con);
	header("location: insertar_index.php");
?>
