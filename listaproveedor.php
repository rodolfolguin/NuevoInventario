<!DOCTYPE html>
<html>
<head>
	<title>INVENTARIO || LISTA DE PROVEEDORES</title>
</head>
<font face="Arial, Helvetica, sans-serif">
<body bgcolor="#333333">
	<center>
		<table border="0">
			<thead>
				<tr bgcolor="#CCCCCC">
				<th colspan="3">DATOS DEL PROVEEDOR</th>
				</tr>
			</thead>
				<tbody>
					<tr bgcolor="#505458">
						<td>RUT</td>
						<td>NOMBRE</td>
						<td>DIRECCION</td>
					</tr>
					<?php
							include("conecta.php");
							$con=conectar();

							$total = 0;
							$query="SELECT rut_prov, nom_prov, dir_prov FROM proveedores";
							$resultado= $con->query($query);
							while($row= $resultado->fetch_assoc()){
							?>
							
							<tr bgcolor="#B9BCBF">
								<td><?php echo $row['rut_prov'];?></td>
								<td><?php echo $row['nom_prov'];?></td>
								<td><?php echo $row['dir_prov'];?></td>
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