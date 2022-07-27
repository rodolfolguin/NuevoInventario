<!DOCTYPE html>
<html lang="es">
<head>
    <title>INVENTARIO || MODIFICAR USUARIO</title>
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

        $id_usuario=$_REQUEST['id_usuario'];
        include("conecta.php");
        $con=conectar();
        $query="SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
        $resultado= $con->query($query);
        $row= $resultado->fetch_assoc();
?>

</div>
    <div id="envoltura">
        <div id="contenedor">
            <div id="cabecera">
            </div>
 
            <div id="cuerpo">
 
                <form action="modiuser.php?id_usuario=<?php echo $row['id_usuario'];?>" method="POST">
                    <p><label>ID:</label></p>
                    <input REQUIRED name="id_usuario" type="text" placeholder="Ingrese ID de usuario" maxlength="4" onkeypress="return valida(event)" readonly="readonly" value="<?php echo $row['id_usuario'];?>"/ ></p>

                    <p><label>Nombre:</label></p>
                    <input REQUIRED name="nom_usuario" type="text" placeholder="Ingrese nombre de usuario" value="<?php echo $row['nom_usuario'];?>"/></p>
 
                    <p><label>Clave:</label></p>
                    <input REQUIRED name="clave_usuario" type="text" placeholder="Ingrese clave de usuario" value="<?php echo $row['clave_usuario'];?>"/></p>

                    <p><label>Tipo de perfil:</label></p>
                    <td> 
                    <select REQUIRED name = "tipo_perfil">
                    <option></option>
                    <option value = "adm">Administrador</option>
                    <option value = "user">Usuario</option>
                    </select>
                    <p></p>
                    <p></p>
                    <p></p>
                <form>
                    <p><input type="submit" name="submit" value="MODIFICAR USUARIO"  class="boton"></p>
                </form>
                    <p></p>
                    <form action="modificausuario.php" method="post">
                    <input type="submit"  value="ATRAS" onclick="modificausuario.php" class="boton"></td>
                    </div>
                <div id="pie">Modificar usuario</div>
            </div>
        </div>
    </body>
</html>