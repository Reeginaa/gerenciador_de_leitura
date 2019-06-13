<?php
  session_start();//inicia sessão
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Meta Efetuado</title>
  </head>
  <body>
    <h1>RESULTADO</h1><p>
    <?php
      if (isset($_SESSION['livro']) && isset($_SESSION['dataInicial']) &&
          isset($_SESSION['$dataFinal']) /*&& isset($_SESSION['resultado'])*/) {
        echo '<br>Livro: '.$_SESSION['livro'] .
             '<br>Data Inicial: '.$_SESSION['dataInicial'] .
             '<br>Data Final: '.$_SESSION['dataFinal'] /* .
             '<br>Resultado: '.$_SESSION['resultado']*/;

        unset($_SESSION['livro']);
        unset($_SESSION['dataInicial']);
        unset($_SESSION['dataFinal']);
        /*unset($_SESSION[resultado]);*/
      }
    ?>
  </body>
</html>
