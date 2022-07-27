<!DOCTYPE html>
<html lang="es">
<head>
    <title>INVENTARIO ||  MODIFICAR PRODUCTOS</title>
    <center><IMG SRC="./img/vrbig.jpg"><H1></center>
    <meta charset="utf-8">
    <link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>
    <body>

<?php

        $cod=$_REQUEST['cod_prod'];
        include("conecta.php");
        $con=conectar();
        $query="SELECT * FROM productos WHERE cod_prod='$cod'";
        $resultado= $con->query($query);
        $row= $resultado->fetch_assoc();
?>

</div>
    <div id="envoltura">
        <div id="contenedor">
            <div id="cabecera">
            </div>
 
            <div id="cuerpo">
 
                <form action="rebajaprod.php?cod_prod=<?php echo $row['cod_prod'];?>" method="POST">
                    <p><label>Codigo:</label></p>
                    <input REQUIRED name="cod_prod" type="text" placeholder="Ingrese codigo de producto" value="<?php echo $row['cod_prod'];?>" readonly="readonly"/></p>

                    <p><label>Nombre:</label></p>
                    <input REQUIRED name="nom_prod" type="text" placeholder="Ingrese nombre de producto" value="<?php echo $row['nom_prod'];?>" readonly="readonly"/></p>
 
                    <p><label>Cantidad a rebajar:</label></p>
                    <input REQUIRED name="reb_prod" type="text" placeholder="Ingrese cantidad a rebajar"/></p>
 
                    <p><label>Precio:</label></p>
                    <input REQUIRED name="prec_prod" type="text" placeholder="Ingrese precio de producto" value="<?php echo $row['prec_prod'];?>" readonly="readonly"/></p>
                    <form>
                    <p><input type="submit" name="submit" value="REBAJAR PRODUCTOS"  class="boton"></p>
                </form>
                    <p></p>
                    <form action="listarebajar.php" method="post">
                    <input type="submit"  value="ATRAS" onclick="listarebajar.php" class="boton"></td>
                    </div>
                <div id="pie">Rebajar productos</div>
            </div>
        </div>
    </body>
</html>