<?php 
session_start();
if($_SESSION["vendedor"]!="1"){
    header ("Location: ../negocio/salir.php");

}




?>