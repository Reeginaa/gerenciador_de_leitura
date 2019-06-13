<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Livro com Erros</title>
  </head>
  <body>
    <h1>ERROS!!!</h1>
    <?php
      if (isset($_GET['erros'])) {
        $erros = array();
        $erros = unserialize($_GET['erros']);

        foreach ($erros as $e) {
          echo '<br/>' . $e;
        }
      }
    ?>
  </body>
</html>
