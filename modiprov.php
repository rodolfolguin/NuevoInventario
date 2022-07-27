<?php

	include("conecta.php");
	$con=conectar();
	$rut_prov=$_REQUEST["rut_prov"];
	$nom_prov=$_POST["nom_prov"];
	$dir_prov=$_POST["dir_prov"];



	$query="UPDATE proveedores SET rut_prov='$rut_prov', nom_prov='$nom_prov', dir_prov='$dir_prov' WHERE rut_prov='$rut_prov'";
	$resultado= $con->query($query);

	if($resultado){
		header("location: modificarproveedor.php");
	}
	else{
		echo "Error al modificar proveedor";
	}

?>
