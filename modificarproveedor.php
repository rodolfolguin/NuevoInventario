<!DOCTYPE html>
<html>
<font face="Arial, Helvetica, sans-serif">
<center><IMG SRC="./img/vrbig.jpg"><H1></center>
<title>INVENTARIO || MODIFICAR PROVEEDOR</title>
<body bgcolor="#333333">
	<center>
		<table border="0">
			<thead>
				<tr bgcolor="#CCCCCC">
				<th colspan="3">DATOS DE PROVEEDORES</th>
				</tr>
			</thead>
				<tbody>
					<tr bgcolor="#505458">
						<td>RUT</td>
						<td>NOMBRE</td>
						<td>DIRECCION</td>
						<td colspan="2">EDITAR</td>

					</tr>
					<?php
							include("conecta.php");
							$con=conectar();

							$total = 0;
							$query="SELECT rut_prov, nom_prov, dir_prov FROM proveedores GROUP BY rut_prov";
							$resultado= $con->query($query);
							while($row= $resultado->fetch_assoc()){
							?>
							<tr bgcolor="#B9BCBF">
								<td><?php echo $row['rut_prov'];?></td>
								<td><?php echo $row['nom_prov'];?></td>
								<td><?php echo $row['dir_prov'];?></td>
								<td><a href="editarproveedor.php?rut_prov=<?php echo $row['rut_prov'];?>"><img src="./img/editar.png" border="0"></a></td>
								<td><a href="eliminarproveedor.php?rut_prov=<?php echo $row['rut_prov'];?>"><img src="./img/eliminar.png" border="0"></a></td>
							</tr>
							<?php
							}
							?>
				</tbody>
		</table>
	</center>
		<center>
				<form action="crearproveedor.html">
				<td colspan="10" align="center"><input type="submit" value="ATRAS" onclick="crearproveedor.html"></td>
				</form>
		</center>			
</body>
</font>
</html>