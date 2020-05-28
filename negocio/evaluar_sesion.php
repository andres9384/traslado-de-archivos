<?php 


class Usuario
{
    public function loguearse($documento,$contraseña){

session_start();

include ("../datos/conexion2.php");
$contador ="0";
$sql = "SELECT * FROM registro  WHERE documento='$documento' AND contraseña='$contraseña' ";

if (!$result = $db->query($sql)){
    die ('PAILAS:  ['.$db->error .']');
} 
while($row = $result->fetch_assoc()){
    $documento=stripslashes($row["documento"]);
    $contador = $contador+1;
}

echo "EL VALOR DEL CONTADOR ES = $contador";

    if($contador=="0"){

        $_SESSION["usuario"]="0";
        header ("Location: ../presentacion/error_sesion.php");
    }
    if($contador!="0"){
        $_SESSION["usuario"]="1";
        header ("Location: ../presentacion/usuario.php");
    }
    }
}
$nuevo= new Usuario();
$nuevo -> loguearse($_POST["documento"],$_POST["contraseña"]);
?>