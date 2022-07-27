<!DOCTYPE html>
<html lang="es">
<head>
    <title>INVENTARIO ||  INSERTAR PRODUCTOS</title>
    <center><IMG SRC="./img/vrbig.jpg"><H1></center>
    <meta charset="utf-8">
    <link type="text/css" href="./css/style2.css" rel="stylesheet" />
</head>
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
<body>
    </div>
    <div id="envoltura">
        <div id="contenedor">
            <div id="cabecera">
                </div>
                    <div id="cuerpo"> 
                    <form action="insertar.php" method="POST" >
                    <p><label>Codigo:</label></p>
                    <input REQUIRED name="codigo" type="text" placeholder="Ingrese codigo de producto" autofocus="autofocus" maxlength="4" onkeypress="return valida(event)"/></p>

                    <p><label>Nombre:</label></p>
                    <input REQUIRED name="nombre" type="text" placeholder="Ingrese nombre de producto" /></p>
 
                    <p><label>Cantidad:</label></p>
                    <input REQUIRED name="cantidad" type="text" placeholder="Ingrese cantidad de producto" onkeypress="return valida(event)"/></p>
 
                    <p><label>Precio:</label></p>
                    <input REQUIRED name="precio" type="text" placeholder="Ingrese precio de producto" onkeypress="return valida(event)"/></p>
                    <p><label>Proveedor:</label></p>                          
                    <select REQUIRED name="proveedor">
                    <option value="0"></option>
                    </form>
        <?php
                    include("conecta.php");
                    $con=conectar();                 
                    $query = $con -> query ("SELECT * FROM proveedores");
                    while ($valores = mysqli_fetch_array($query))
                {                 
                    echo '<option>'.$valores[nom_prov].'</option>';
                                                                      }
        ?>
                <form>
                    <p><input type="submit" name="submit" value="AGREGAR PRODUCTOS"  class="boton"></p>
                </form>
                    <p></p>
                    <form action="inicio.html">
                    <input type="submit"  value="INICIO" onclick="inicio.html" class="boton"></td>
                    </div>
                <div id="pie">Ingresar productos</div>
            </div> 
        </div>
    </body>
</html>