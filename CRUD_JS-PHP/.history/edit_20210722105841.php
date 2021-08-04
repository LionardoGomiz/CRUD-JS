<?php
//$busSearch = $_POST["searchBus"];
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
 <style>
      td, textarea{
        background-color: blue;
        color: white;    
        }
 </style>
 <td><textarea id="EM" name="Movil" disabled>'.$Movil.'</textarea></td>
 <td><textarea id="EO" name="Operador" disabled>'.$Operador.'</textarea></td>
 <td><textarea id="EMO" name="Modelo" disabled>'.$Modelo.'</textarea></td>
 <td><textarea id="EMAR" name="Marca" disabled>'.$Marca.'</textarea></td>
 <td><textarea id="ECA" name="Carroceria" disabled>'.$Carroceria.'</textarea></td>
 <td><textarea id="ET" name="Tipologia" disabled>'.$Tipologia.'</textarea></td>
 <td><button type="button" name="Editar" id="Editar">Editar</button></td>
  </tr>
  ';
}
echo $message;

$Movil = $_POST['Movil'];
$Operador = $_POST['Operador'];
$Modelo = $_POST['Modelo'];
$Marca = $_POST['Marca'];
$Carroceria = $_POST['Carroceria'];
$Tipologia = $_POST['Tipologia'];

$sql = "UPDATE vehiculos SET ".
        "Movil = '$Movil',".
        "Operador = '$Operador',".
        "Modelo = '$Modelo',".
        "Marca = '$Marca',".
        "Carroceria = '$Carroceria',".
        "Tipologia = '$Tipologia',".
        "WHERE id = ".$id['id'];
 mysqli_query($db, $sql);
 echo 0;
 ?>

  <script>
     
    $('document').ready(function(){
       $("#Editar","*").click(function(){
          $("#EM","*").attr("disabled", false).focus().css("background-color","black");
          $("#EO","*").attr("disabled", false).focus().css("background-color","black");
          $("#EMO","*").attr("disabled", false).focus().css("background-color","black");
          $("#EMAR","*").attr("disabled", false).focus().css("background-color","black");
          $("#ECA","*").attr("disabled", false).focus().css("background-color","black");
          $("#ET","*").attr("disabled", false).focus().css("background-color","black");
       });
    });
       /*function Mostrar() {
            var my_display = document.getElementById('EM').style.display;
            var my_display = document.getElementById('EO').style.display;
            var my_display = document.getElementById('EMO').style.display;
            var my_disply = document.getElementById('EMAR').style.display;
            var my_display = document.getElementById('ECA').style.display;
            var my_display = document.getElementById('ET').style.display;
            if(my_display == "block",false)
              document.getElementById('EM').style.display = "none";
            else
              document.getElementById('EM').style.display = "block";
            }*/
 </script>


 