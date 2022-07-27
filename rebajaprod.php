<?php

	include("conecta.php");
	$con=conectar();
	$cod_prod=$_REQUEST['cod_prod'];
	$nom_prod= $_POST["nom_prod"];
	$cant_prod= $_POST["cant_prod"];
	$reb_prod= $_POST["reb_prod"];
	$prec_prod= $_POST["prec_prod"];
	$prov_prod= $_POST["prov_prod"];

	$query="UPDATE productos SET cant_prod= cant_prod-'$reb_prod' WHERE cod_prod='$cod_prod'";
	$resultado= $con->query($query);

	if($resultado){
		header("location: listarebajar.php");
	}
	else{
		echo "Error al modificar datos";
	}

?>