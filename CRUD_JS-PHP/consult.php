<?php
$busSearch = $_POST["searchBus"];
$message = "";
require("conexion.php");
$sql = mysqli_query($db, "SELECT * FROM vehiculos WHERE Movil LIKE '%$busSearch%' OR Operador LIKE'%$busSearch%'");

while ($result = mysqli_fetch_array($sql)) {
  error_reporting (0);

  $id = $result['id'];
  $Movil = $result['Movil'];
  $Operador = $result['Operador'];
  $Modelo = $result['Modelo'];
  $Marca = $result['Marca'];
  $Carroceria = $result['Carroceria'];
  $Tipologia = $result['Tipologia'];
  $message .= '
 <tr>
  <td>'.$Movil.'</td>
  <td>'.$Operador.'</td>
  <td>'.$Modelo.'</td>
  <td>'.$Marca.'</td>
  <td>'.$Carroceria.'</td>
  <td>'.$Tipologia.'</td>
  </tr>
  ';



}
echo $message;
 ?>
