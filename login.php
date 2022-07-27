<?php

include ("conecta.php");
$con=conectar();

	$nom_usuario= $_POST["nom_usuario"];
	$clave_usuario= $_POST["clave_usuario"];
	$tipo_perfil= $_POST['tipo_perfil'];
	$sesion_login = true;

	$query = "SELECT * FROM usuario WHERE nom_usuario ='$nom_usuario' AND clave_usuario = '$clave_usuario' AND tipo_perfil='$tipo_perfil'";
	$result = $con->query($query);

		if($result->num_rows>0){

			while ($registro = $result->fetch_array()) {
				if ($tipo_perfil=="adm") {
					$nom_usuario = $registro['nom_usuario'];
					$_SESSION['nom_usuario'] =$nom_usuario;
						header('location: inicio.html');
					}
						elseif ($tipo_perfil=="user") {
							$nom_usuario = $registro['nom_usuario'];
							$_SESSION['nom_usuario'] =$nom_usuario;
								header('location: iniciouser.html');
						
					
				}else{$_SESSION['nom_usuario'] =$nom_usuario;
					echo"<script type=\"text/javascript\">alert('Usuario incorrecto, reintente'); window.location='index.html';</script>";
				}
				
			}

		}else{

			echo"<script type=\"text/javascript\">alert('Usuario incorrecto, reintente'); window.location='index.html';</script>";
		}


		
	?>