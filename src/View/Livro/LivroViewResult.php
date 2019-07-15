<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Livro Efetuado</title>
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
  </head>
  <body>
    <div id="menu">
			<ul>
				<li><a href="../../../home.php">Página Inicial</a></li>
        <li><a href="../../indexUsuario.php">Manutenção de Usuário</a></li>
				<li><a href="../../indexMeta.php">Manutenção de Meta</a></li>
				<li><a href="../../indexLivro.php">Manutenção de Livro</a></li>
			</ul>
		</div>
    <div id="titulo">
      <h1><b><ins>RESULTADOS</ins></b></h1>
    </div>
    <?php
      echo '<table>';/*Tabela para apresentar os dados cadastrados*/
        echo '<thead>';
          echo '<tr>';
            echo '<th>Título</th>';
            echo '<th>ISBN</th>';
            echo '<th>Autor</th>';
            echo '<th>Editora</th>';
            echo '<th>Gênero</th>';
            echo '<th>Ano</th>';
            echo '<th>Páginas</th>';
            echo '<th>Classificação</th>';
            echo '<th>Sinopse</th>';
          echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
          echo '<tr>';
            echo '<td>'.$_SESSION['titulo'].'</td>';
            echo '<td>'.$_SESSION['ISBN'] .'</td>';
            echo '<td>'.$_SESSION['autor'] .'</td>';
            echo '<td>'.$_SESSION['editora'] .'</td>';
            echo '<td>'.$_SESSION['genero'] .'</td>';
            echo '<td>'.$_SESSION['ano'].'</td>';
            echo '<td>'.$_SESSION['qtdPaginas'].'</td>';
            echo '<td>'.$_SESSION['classificacao'].'</td>';
            echo '<td>'.$_SESSION['sinopse'].'</td>';
          echo '</tr>';
        echo '</tbody>';
      echo '</table>';

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

    <div id="rodape">
        <div>
			Maria Regina Cerbaro &copy 2019 Todos os direitos reservados
    	</div>
    </div>
  </body>
</html>
