<!DOCTYPE html>
<html>
<head>
	<title>INVENTARIO || LISTA DE PRODUCTOS</title>
	<center><IMG SRC="./img/vr.jpg"><H1></center>
</head>
<font face="Arial, Helvetica, sans-serif">
<body bgcolor="#333333">
	<center>
		<table border="0">
			<thead>
				<tr bgcolor="#CCCCCC">
				<th colspan="5">DATOS DE PRODUCTOS</th>
				<th colspan="1">EXPORTAR</th>
				</tr>
			</thead>
				<tbody>
					<tr bgcolor="#505458">
						<td>CODIGO</td>
						<td>NOMBRE</td>
						<td>CANTIDAD</td>
						<td>PRECIO UNIDAD</td>
						<td>PROVEEDOR</td>
						<td><a href="excel.php"><img src="./img/excel.png" border="0"></a></td>
						
					</tr>
					<?php
							include("conecta.php");
							$con=conectar();

							$total = 0;
							$query="SELECT cod_prod,nom_prod,prec_prod,prov_prod, SUM(cant_prod) AS Total FROM productos GROUP BY cod_prod";
							$resultado= $con->query($query);
							while($row= $resultado->fetch_assoc()){
							?>
							
							<tr bgcolor="#B9BCBF">
								<td><?php echo $row['cod_prod'];?></td>
								<td><?php echo $row['nom_prod'];?></td>
								<td><?php echo $row['Total'];?></td>
								<td><?php echo $row['prec_prod'];?></td>
								<td><?php echo $row['prov_prod'];?></td>

							</tr>
							<?php
							}
							?>
				</tbody>
		</table>
				<br>
		<center>
				<form action="index.html">
				<td colspan="10" align="center"><input type="submit" value="ATRAS" onclick="index.html"></td>
				</form>
		</center>		
	</center>			
</body>
</font>
</html>