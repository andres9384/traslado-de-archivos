<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="600"  align="center" summary="">
    <tr>
    <td  height="60" colspan="3">
    <?php
    
    include ("banner.php")?>
    </td>
    </tr>
   <tr>
    <td height="300" colspan="3" ALIGN="center">
        <form action="../negocio/evaluar_sesion.php" method="post">
    
    <label for="">
        DOCUMENTO: <input type="text" name="documento" required id="">
    </label><BR></BR>
    <label for="">
        CONTRASEÑA: <input type="text" name="contraseña"  required  id="">
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