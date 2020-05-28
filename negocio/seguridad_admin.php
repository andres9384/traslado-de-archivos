<?php 
session_start();
if($_SESSION["admin"]!="1"){
    header ("Location: ../negocio/salir.php");

}




?>