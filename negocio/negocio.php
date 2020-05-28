<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="600" border="1" align="center" summary="">
    <tr>
    <td  height="60">
    <?php
    
    include ("../presentacion/banner.php");?>
    </td>
    </tr>
   <tr>
    <td height="300" colspan="3" ><?php 
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $documento = $_POST["documento"];
    $contraseña = $_POST["contraseña"];

    
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) &&
    !empty($_POST['contraseña']) && !empty($_POST['documento']) )
    {
        include ("../datos/conexion2.php");
        include ("../datos/capa_dato.php");
    }
    if (empty($_POST['nombre']) || empty($_POST['apellido']) ||
    empty($_POST['contraseña']) || empty($_POST['documento']) )
    {
        echo "Rellene todos los espacios";
    }
    ?></td>
   
    </tr>
    <tr>
    <td height="60" colspan="3">
    <?php
    
    include ("../presentacion/footer.php")?></td
    ></tr>
     </table>
</body>
</html>