<?php 
include ("conexion2.php");

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) &&
 !empty($_POST['contraseña']) && !empty($_POST['documento']) ){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ccontraseña = $_POST['contraseña'];
    $ddocumento = $_POST['documento'];
    
    $sql = "INSERT INTO registro(nombre,apellido,contraseña,documento) VALUES 
    ('$nombre','$apellido','$ccontraseña','$ddocumento')";
    $db ->query($sql);
    header ("Location: ../presentacion/inicio.php");
}
    

?>