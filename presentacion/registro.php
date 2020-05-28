<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="600"align="center" summary="">
    <tr>
    <td  height="60" colspan="3">
    <?php
    
    include ("banner.php")?>
    </td>
    </tr>
   <tr>
    <td height="300" colspan="3" ALIGN="center">
    <form action="../negocio/negocio.php" method="post">
    <label for="">
        NOMBRE: <input type="text" name="nombre" id="">
    </label><BR></BR>
    <label for="">
        APELLIDO: <input type="text" name="apellido" id="">
    <label for=""><br><br>
        DOCUMENTO: <input type="text" name="documento" id="">
    </label><BR></BR>
    <label for="">
        CONTRASEÑA: <input type="text" name="contraseña" id="">
    </label><br><br><br>
    <input type="submit" value="ENVIAR">
    
    </form>

    </td>
   
    </tr>
    <tr>
    <td height="60" colspan="3">
    <?php
    
    include ("footer.php")?></td
    ></tr>
     </table>
</body>
</html>