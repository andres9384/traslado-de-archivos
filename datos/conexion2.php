<?php 
header ("Content-Type: text/html;charset=utf-8");


$db = new mysqli('localhost','root','','prueba2');
$acentos = $db-> query("SET NAMES 'utf8'");
if ($db->connect_error > 0){
    die ('error database : [' . $db->connect_error . ']');
}




?>