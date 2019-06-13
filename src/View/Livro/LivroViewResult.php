<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Livro Efetuado</title>
  </head>
  <body>
    <h1>RESULTADOS!!!</h1>
    <?php
        echo '<br>Título:'.$_SESSION['titulo'] .
             '<br>ISBN:'.$_SESSION['ISBN'] .
             '<br>Autor:'.$_SESSION['autor'] .
             '<br>Editora:'.$_SESSION['editora'] .
             '<br>Gênero:'.$_SESSION['genero'] .
             '<br>Ano:'.$_SESSION['ano'] .
             '<br>Páginas:'.$_SESSION['qtdPaginas'] .
             '<br>classificacao'.$_SESSION['classificacao'] .
             '<br>Sinopse:'.$_SESSION['sinopse'];

        unset($_SESSION['titulo']);
        unset($_SESSION['ISBN']);
        unset($_SESSION['autor']);
        unset($_SESSION['editora']);
        unset($_SESSION['genero']);
        unset($_SESSION['ano']);
        unset($_SESSION['qtdPaginas']);
        unset($_SESSION['classificacao']);
        unset($_SESSION['sinopse']);
    ?>
  </body>
</html>
