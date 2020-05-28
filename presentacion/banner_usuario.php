<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  
    
      .admin{
          color:white; 
          float:right;
          display:inline-block;
      }
      .seleccione{
          float:left;
         
      }
    

    </style>
</head>
<body >
    <table  class="banner" width="100%" >
   
   <tr>
    <td style="margin:auto;"> 
    <p >Soy un lindo banner</p><br>
    </td>
    </tr>
   
    <tr>
    <td class="seleccione">
    <select onchange="this.options[this.selectedIndex] . value && 
    (window.location = this.options [this.selectedIndex] .value);">
    <option value="">Seleccione:</option>
    <?php 
    include ("../datos/conexion2.php");
    
    $documento=$_SESSION["documento"];
    $contador ="0";
    $sql = "SELECT * FROM permisos WHERE documento='$documento'";
   
    if (!$result = $db->query($sql)){
        die ('PAILAS:  ['.$db->error .']');
    }    
    while($row = $result->fetch_assoc()){
        $documento=stripslashes($row["documento"]);
        $fk_id_rol=stripslashes($row["fk_id_rol"]);
        $contador = $contador+1;
       
        if($fk_id_rol=="1"){
            echo "<option value='../presentacion/usuario.php'>Usuario
             </option>"; $_SESSION["usuario"]="1";}
        if($fk_id_rol=="2"){
            echo "<option value='../presentacion/administrador.php'>Administrador
             </option>"; $_SESSION["admin"]="1";}
        if($fk_id_rol=="3"){
            echo "<option value='../presentacion/supervisor.php'>Supervisor
             </option>"; $_SESSION["supervisor"]="1";}
        if($fk_id_rol=="4"){
            echo "<option value='../presentacion/vendedor.php'>Vendedor
             </option>"; $_SESSION["vendedor"]="1";}              
    }
    ?>
    </select>
    </td>
    <td   style="float:right;">
   <?php  echo "$contador"; ?>
   <a href="../negocio/salir.php" class="admin">Cerra Sesion  </a>
   
   
    </td>
    </tr>
    </table>
   
</body>
</html>