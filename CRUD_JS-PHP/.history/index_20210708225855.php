<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD JS</title>
    <link rel="stylesheet" href="crud.css">
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="CRUD.js"></script>
  </head>
  <body>
    <header>
      <h1>Ver y Mostrar Vehiculos Abordados</h1>
      <div class="Buscador">
        <form accept-charset="utf-8" method="post">
          <input type="text" name="searchBus" id="searchBus" value="" placeholder="Buscar TM Abordados" onKeyUp="searchBus();">
        </form>
      </div>
      <nav>
      <ul>
        <button type="button" id="insertar-link"><a href="Insertar.html">Insertar</a></button>
        <button type="button" id="editar-link"><a href="Editar.php">Editar</a></button>
        <button type="button" id="eliminar-link"><a href="Eliminar.php">Eliminar</a></button>
      </ul>
      </nav>
    </header>
        <table id="Buses" id="resultSearch">
          <tr>
              <td>Movil</td>
              <td>Operador</td>
              <td>Carroceria</td>
              <td>Modelo</td>
              <td>Marca</td>
              <td>Tipologia</td>
          </tr>
          <?php   error_reporting (0); ?>
          <?php include_once('consult.php'); ?>
        </table>
    <footer>
        <div class="">
          <p>Desarrollado por William Leonardo Ortegón Aguirre &copy 2020</p>
          <p>CRUD con JavaScript</p>
        </div>
    </footer>
  </body>
</html>
<script>
$().ready(function(){
  $("#search").focus();
  searchBus();
});
</script>
