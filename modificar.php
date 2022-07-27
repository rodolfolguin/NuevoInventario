<?php

	include("conecta.php");
	$con=conectar();
	$cod_prod=$_REQUEST['cod_prod'];
	$nom_prod= $_POST["nom_prod"];
	$cant_prod= $_POST["cant_prod"];
	$prec_prod= $_POST["prec_prod"];
	$prov_prod= $_POST["prov_prod"];

	$query="UPDATE productos SET cod_prod='$cod_prod', nom_prod='$nom_prod', cant_prod='$cant_prod', prec_prod='$prec_prod', prov_prod='$prov_prod' WHERE cod_prod='$cod_prod'";
	$resultado= $con->query($query);

	if($resultado){
		header("location: modificarproductos.php");
	}
	else{
		echo "Error al modificar datos";
	}

?>