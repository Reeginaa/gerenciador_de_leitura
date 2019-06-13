<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário Efetuado</title>
  </head>
  <body>
    <h1>Resultado</h1><p>
      <?php
        echo '<br>Nome Completo:'.$_SESSION['nomeCompleto'] .
             '<br>Sexo:'.$_SESSION['sexo'] .
             '<br>Data de Nascimento:'.$_SESSION['dataNascimento'] .
             '<br>Cidade:'.$_SESSION['cidade'] .
             '<br>Estado:'.$_SESSION['estado'] .
             '<br>E-mail:'.$_SESSION['email'];

        unset($_SESSION['nomeCompleto']);
        unset($_SESSION['sexo']);
        unset($_SESSION['dataNascimento']);
        unset($_SESSION['cidade']);
        unset($_SESSION['estado']);
        unset($_SESSION['email']);
      ?>
  </body>
</html>
