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
 
                <form action="modificar.php?cod_prod=<?php echo $row['cod_prod'];?>" method="POST">
                    <p><label>Codigo:</label></p>
                    <input REQUIRED name="cod_prod" type="text" placeholder="Ingrese codigo de producto" value="<?php echo $row['cod_prod'];?>"/ ></p>

                    <p><label>Nombre:</label></p>
                    <input REQUIRED name="nom_prod" type="text" placeholder="Ingrese nombre de producto" value="<?php echo $row['nom_prod'];?>"/></p>
 
                    <p><label>Cantidad:</label></p>
                    <input REQUIRED name="cant_prod" type="text" placeholder="Ingrese cantidad de producto" value="<?php echo $row['cant_prod'];?>"/></p>
 
                    <p><label>Precio:</label></p>
                    <input REQUIRED name="prec_prod" type="text" placeholder="Ingrese precio de producto" value="<?php echo $row['prec_prod'];?>"/></p>

                    <p><label>Proveedor:</label></p>                          
                    <select name="prov_prod">
                    <option value=""></option>
                    </form>
                <?php
                    $query = $con -> query ("SELECT * FROM proveedores");
                    while ($valores = mysqli_fetch_array($query))
                    {                 
                    echo '<option>'.$valores[nom_prov].'</option>';
                    }
                ?>
                <form>
                    <p><input type="submit" name="submit" value="MODIFICAR PRODUCTOS"  class="boton"></p>
                </form>
                    <p></p>
                    <form action="listaproductos.php" method="post">
                    <input type="submit"  value="VER PRODUCTOS" onclick="listar.php" class="boton"></td>
                    </div>
                <div id="pie">Modificar productos</div>
            </div>
        </div>
    </body>
</html>