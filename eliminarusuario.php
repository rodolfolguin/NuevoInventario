<?php

	include("conecta.php");
	$con=conectar();
	$id_usuario=$_REQUEST['id_usuario'];
	$query="DELETE FROM usuario WHERE id_usuario='$id_usuario' ";
	$resultado= $con->query($query);

	if($resultado){
		header("location: modificausuario.php");
	}
	else{
		echo"<script type=\"text/javascript\">alert('Error al eliminar usuario'); window.location='modificausuario.php';</script>";
	}

?>