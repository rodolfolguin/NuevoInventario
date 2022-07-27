<?php

	include("conecta.php");
	$con=conectar();
	$rut_prov=$_REQUEST['rut_prov'];
	$query="DELETE FROM proveedores WHERE rut_prov='$rut_prov'";
	$resultado= $con->query($query);

	if($resultado){
		header("location:modificarproveedor.php");
	}
	else{
		echo"<script type=\"text/javascript\">alert('Error al eliminar proveedor'); window.location='modificarproveedor.php';</script>";
	}

?>