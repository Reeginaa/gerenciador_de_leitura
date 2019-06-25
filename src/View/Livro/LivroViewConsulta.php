<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta de Livros</title>
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
    <?php
      if (isset($_SESSION['livro'])) {
        include_once '../../Model/LivroModel.php';
        $livro = array();
        $livro = unserialize($_SESSION['livro']);

        echo '<table>';/*Tabela para apresentar os dados cadastrados*/
          echo '<thead>';
            echo '<tr>';
              echo '<th>Título</th>';
              echo '<th>Autor</th>';
              echo '<th>Páginas</th>';
              echo '<th>Classificação</th>';
              echo '<th></th>';
            echo '</tr>';
          echo '</thead>';

        foreach ($livro as $u) {
          echo '<tbody>';
            echo '<tr>';
              echo '<td>';
                echo "$u->titulo";
              echo '</td>';
              echo '<td>';
                echo "$u->autor";
              echo '</td>';
              echo '<td>';
                echo "$u->qtdPaginas";
              echo '</td>';
              echo '<td>';
                echo "$u->classificacao";
              echo '</td>';
              echo "<td><a href='../../Controller/LivroController.php?operation=excluir&id=$u->id'>Deletar</a></td>";
            echo '<tr>';
          echo '</tbody>';
        }

        echo '</table>';

        unset($_SESSION['livro']);
      }
    ?>
  </body>
</html>
