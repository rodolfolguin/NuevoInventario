<!DOCTYPE html>
<html lang="es">
<head>
    <title>INVENTARIO ||  MODIFICAR PROVEEDOR</title>
    <center><IMG SRC="./img/vrbig.jpg"><H1></center>
    <meta charset="utf-8">
    <link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>
    <body>

<script>
    function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    if (tecla==8){
        return true;
    }

    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
    }

</script> 

<?php

        $rut_prov=$_REQUEST['rut_prov'];
        include("conecta.php");
        $con=conectar();
        $query="SELECT * FROM proveedores WHERE rut_prov='$rut_prov'";
        $resultado= $con->query($query);
        $row= $resultado->fetch_assoc();
?>

</div>
    <div id="envoltura">
        <div id="contenedor">
            <div id="cabecera">
            </div>
 
            <div id="cuerpo">
 
                <form action="modiprov.php?rut_prov=<?php echo $row['rut_prov'];?>" method="POST">
                    <p><label>RUT:</label></p>
                    <input REQUIRED name="rut_prov" type="text" placeholder="Ingrese RUT de proveedor" maxlength="10" onkeypress="return valida(event)" value="<?php echo $row['rut_prov'];?>"/ ></p>

                    <p><label>Nombre:</label></p>
                    <input REQUIRED name="nom_prov" type="text" placeholder="Ingrese nombre de proveedor" value="<?php echo $row['nom_prov'];?>"/></p>
 
                    <p><label>Direccion:</label></p>
                    <input REQUIRED name="dir_prov" type="text" placeholder="Ingrese direccion de proveedor" value="<?php echo $row['dir_prov'];?>"/></p>

                <form>
                    <p><input type="submit" name="submit" value="MODIFICAR PROVEEDOR"  class="boton"></p>
                </form>
                    <p></p>
                    <form action="modificarproveedor.php" method="post">
                    <input type="submit"  value="ATRAS" onclick="modificarproveedor.php" class="boton"></td>
                    </div>
                <div id="pie">Modificar proveedor</div>
            </div>
        </div>
    </body>
</html>