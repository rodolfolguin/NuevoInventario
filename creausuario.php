<?php

include ("conecta.php");
$con=conectar();

	$id_usuario=$_POST["iduser"];
	$nom_usuario=$_POST["nombreuser"];
	$clave_usuario=$_POST["claveuser"];
	$tipo_perfil=$_POST["perfil"];
	
	$insertar = "INSERT into usuario values ('$id_usuario', '$nom_usuario', '$clave_usuario', '$tipo_perfil')";
		
    $result = mysqli_query($con, $insertar)
	    or die ("Error al Ingresar Datos");
	    
		 
    mysqli_close($con);
	header("location: creausuario.html");
?>