<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '1998';
$basededatos = 'tm';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");
