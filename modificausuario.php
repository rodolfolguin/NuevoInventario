<!DOCTYPE html>
<html>
<font face="Arial, Helvetica, sans-serif">
<center><IMG SRC="./img/vrbig.jpg"><H1></center>
<title>INVENTARIO || MODIFICAR USUARIOS</title>
<body bgcolor="#333333">
	<center>
		<table border="0">
			<thead>
				<tr bgcolor="#CCCCCC">
				<th colspan="6">DATOS DE USUARIOS</th>
				</tr>
			</thead>
				<tbody>
					<tr bgcolor="#505458">
						<td>ID USUARIO</td>
						<td>NOMBRE</td>
						<td>CLAVE DE USUARIO</td>
						<td>TIPO DE PERFIL</td>
						<td colspan="2">EDITAR</td>

					</tr>
					<?php
							include("conecta.php");
							$con=conectar();

							$total = 0;
							$query="SELECT id_usuario, nom_usuario, clave_usuario, tipo_perfil FROM usuario GROUP BY id_usuario";
							$resultado= $con->query($query);
							while($row= $resultado->fetch_assoc()){
							?>
							<tr bgcolor="#B9BCBF">
								<td><?php echo $row['id_usuario'];?></td>
								<td><?php echo $row['nom_usuario'];?></td>
								<td><?php echo $row['clave_usuario'];?></td>
								<td><?php echo $row['tipo_perfil'];?></td>
								<td><a href="modificarusuario.php?id_usuario=<?php echo $row['id_usuario'];?>"><img src="./img/editar.png" border="0"></a></td>
								<td><a href="eliminarusuario.php?id_usuario=<?php echo $row['id_usuario'];?>"><img src="./img/eliminar.png" border="0"></a></td>
							</tr>
							<?php
							}
							?>
				</tbody>
		</table>
	</center>
		<center>
				<form action="creausuario.html">
				<td colspan="10" align="center"><input type="submit" value="ATRAS" onclick="creausuario.html"></td>
				</form>
		</center>			
</body>
</font>
</html>