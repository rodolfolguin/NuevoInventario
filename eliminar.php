<?php

	include("conecta.php");
	$con=conectar();
	$cod_prod=$_REQUEST['cod_prod'];
	$query="DELETE FROM productos WHERE cod_prod='$cod_prod' ";
	$resultado= $con->query($query);

	if($resultado){
		header("location: eliminarproductos.php");
	}
	else{
		echo"<script type=\"text/javascript\">alert('Error al eliminar datos'); window.location='eliminarproductos.php';</script>";
	}

?>