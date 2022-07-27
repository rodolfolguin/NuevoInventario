<!DOCTYPE html>
<html>
<head>
<title>INVENTARIO || LISTA DE PRODUCTOS</title>
</head>
<font face="Arial, Helvetica, sans-serif">
<body bgcolor="#333333">
	<center>
		<table border="0">
			<thead>
				<tr bgcolor="#CCCCCC">
				<th colspan="9">DATOS DE USUARIOS</th>
				</tr>
			</thead>
				<tbody>
					<tr bgcolor="#505458">
						<td>ID</td>
						<td>NOMBRE</td>
						<td>CLAVE DE USUARIO</td>
						<td>TIPO DE PERFIL</td>			
					</tr>
					<?php
							include("conecta.php");
							$con=conectar();

							$total = 0;
							$query="SELECT id_usuario, nom_usuario, clave_usuario, tipo_perfil FROM usuario";
							$resultado= $con->query($query);
							while($row= $resultado->fetch_assoc()){
							?>
							<tr bgcolor="#B9BCBF">
								<td><?php echo $row['id_usuario'];?></td>
								<td><?php echo $row['nom_usuario'];?></td>
								<td><?php echo $row['clave_usuario'];?></td>
								<td><?php echo $row['tipo_perfil'];?></td>
							</tr>
							<?php
							}
							?>
				</tbody>
		</table>
	</center>			
</body>
</font>
</html>