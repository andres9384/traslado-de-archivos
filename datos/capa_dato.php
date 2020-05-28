<?php


$contador ="0";

$sql = "SELECT * FROM registro WHERE documento='$documento' ";
if (!$result = $db->query($sql)){
    die(' !!pailas !!!  [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
    $documento = stripslashes($row["documento"]);
    $contador=$contador+1;
}
if ($contador == "0"){

    mysqli_query($db,"INSERT INTO registro (id,apellido,nombre,documento,contraseña) VALUES 
    (NULL,'$apellido','$nombre','$documento','$contraseña')")
    or die(mysqli_error($db));


    $rol_defecto="1";
    mysqli_query($db,"INSERT INTO permisos (id_permisos,documento,fk_id_rol) VALUES 
    (NULL,'$documento','$rol_defecto')")
    or die(mysqli_error($db));

    

   
    echo '<div style="background-color:green;text-align:center;">¡BIENVENIDO UD SE ACABA DE REGISTRAR</div>';
    
}

if($contador !="0"){
    echo " ";
    echo '<div style="background-color:red;text-align:center;">ESTE DOCUMENTO DE IDENTIDAD YA EXISTE</div>';
}






?>