<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta de Metas</title>
  </head>
  <body>
    <?php
      if (isset($_SESSION['meta'])) {
        include_once '../../Model/MetaModel.php';
        $meta = array();
        $meta = unserialize($_SESSION['meta']);

        foreach ($variable as $key => $value) {
          echo '<tr>';
          echo "<td><a href='../../Controller/MetaController.php?operation=excluir&id=$u->id'>Deletar</a></td>";
          echo "$u->nome<br>";
          echo "</tr>";
        }

        unset($_SESSION['meta']);
      }
    ?>
  </body>
</html>
