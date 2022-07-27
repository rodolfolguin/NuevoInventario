<?php
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Reportes.xls");
?>
<HTML LANG="es">
</head>
<body>
<?php

include("conecta.php");					
$con=conectar();

$query="SELECT cod_prod,nom_prod,cant_prod,prec_prod,prov_prod FROM productos GROUP BY cod_prod";
$resultado= $con->query($query);

?>

<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
					<TR>
						<td>CODIGO</td>
						<td>NOMBRE</td>
						<td>CANTIDAD</td>
						<td>PRECIO UNIDAD</td>
						<td>PROVEEDOR</td>

					</TR>
<?php
while($row= $resultado->fetch_assoc()){
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
</tr>", $row["cod_prod"],$row["nom_prod"],$row["cant_prod"],$row["prec_prod"],$row["prov_prod"]);
}
?>
</table>
</body>
</html>