<?php
//$busSearch = $_POST["searchBus"];
$message = "";
require("conexion.php");
$sql = mysqli_query($db, "SELECT * FROM vehiculos");

while ($result = mysqli_fetch_array($sql)) {
  error_reporting (1);

  $id = $result['id'];
  $Movil = $result['Movil'];
  $Operador = $result['Operador'];
  $Carroceria = $result['Carroceria'];
  $Modelo = $result['Modelo'];
  $Marca = $result['Marca'];
  $Tipologia = $result['Tipologia'];
  $message .= '
 <tr>
 <style>
      td, textarea{
        background-color: blue;
        color: white;    
        }
 </style>
 
 <td><textarea id="Movil" name="Movil" disabled>'.$Movil.'</textarea></td>
 <td><textarea id="Operador" name="Operador" disabled>'.$Operador.'</textarea></td> 
 <td><textarea id="Carroceria" name="Carroceria" disabled>'.$Carroceria.'</textarea></td>
 <td><textarea id="Modelo" name="Modelo" disabled>'.$Modelo.'</textarea></td>
 <td><textarea id="Marca" name="Marca" disabled>'.$Marca.'</textarea></td>
 <td><textarea id="Tipologia" name="Tipologia" disabled>'.$Tipologia.'</textarea></td>
 <td><button type="button" name="Editar" id="Editar">Editar</button></td>
 
  </tr>
  ';
}
echo $message;

$Movil = $_POST['Movil'];
$Operador = $_POST['Operador'];
$Carroceria = $_POST['Carroceria'];
$Modelo = $_POST['Modelo'];
$Marca = $_POST['Marca'];
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
          $("#Movil","*").attr("disabled", false).focus().css("background-color","black");
          $("#Operador","*").attr("disabled", false).focus().css("background-color","black");
          $("#Carroceria","*").attr("disabled", false).focus().css("background-color","black");
          $("#Modelo","*").attr("disabled", false).focus().css("background-color","black");
          $("#Marca","*").attr("disabled", false).focus().css("background-color","black");
          $("#Tipologia","*").attr("disabled", false).focus().css("background-color","black");
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


 