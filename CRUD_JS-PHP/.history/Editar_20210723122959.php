<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UPDATE JS</title>
    <link rel="stylesheet" href="crud.css">
    <script type="text/javascript" src="jquery-3.6.0.js"></script>
    <script defer type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="CRUD.js"></script>
  </head>
  <body>
    <header>
      <nav>
      <ul>
        <button type="button" id="inicio-link"><a href="index.php">Inicio</a></button>
       <button type="button" id="insertar-link"><a href="Insertar.html">Insertar</a></button>
        <button type="button" id="editar-link"><a href="Editar.php">Editar</a></button>
        <button type="button" id="eliminar-link"><a href="Eliminar.php">Eliminar</a></button>
      </ul>
      </nav>
    </header>
        <table>
          <tr>
              <td>Movil</td>
              <td>Operador</td>
              <td>Carroceria</td>
              <td>Modelo</td>
              <td>Marca</td>
              <td>Tipologia</td>
              <td>Opcion</td>
          </tr>

          <tr>
            <?php   error_reporting(0); ?>
            <?php include_once('edit.php'); ?>
          </tr>
        </table>
      <br>
      <div>
          <button type="button" onclick="editData()">Actualizar</button>
      </div>
     
        <footer>
            <div class="container">
              <p>Desarrollado por William Leonardo Ortegón Aguirre &copy 2021</p>
              <p>CRUD con JavaScript</p>
            </div>
        </footer>

  </body>
</html>
