<?php
$Movil = $_POST["Movil"];
$Operador = $_POST["Operador"];
$Modelo = $_POST["Modelo"];
$Carroceria = $_POST["Carroceria"];
$Marca = $_POST["Marca"];
$Tipologia = $_POST["Tipologia"];
require("conexion.php");
$sql = "INSERT INTO vehiculos (Movil,Operador,Modelo,Carroceria,Marca,Tipologia) 
VALUES('$Movil','$Operador','$Modelo','$Carroceria','$Marca','$Tipologia');";
//require_once 'config/conexion.php';
mysqli_query($db,$sql);
echo 0;
header("Location: insert.php");
 ?>
