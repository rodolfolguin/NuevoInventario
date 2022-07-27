<?php

	include("conecta.php");
	$con=conectar();
	$id_usuario=$_REQUEST['id_usuario'];
	$nom_usuario=$_POST["nom_usuario"];
	$clave_usuario=$_POST["clave_usuario"];
	$tipo_perfil=$_POST["tipo_perfil"];


	$query="UPDATE usuario SET id_usuario='$id_usuario', nom_usuario='$nom_usuario', clave_usuario='$clave_usuario', tipo_perfil='$tipo_perfil' WHERE id_usuario='$id_usuario'";
	$resultado= $con->query($query);

	if($resultado){
		header("location: modificausuario.php");
	}
	else{
		echo "Error al modificar usuario";
	}

?>
