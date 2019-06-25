<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta de Metas</title>
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
      if (isset($_SESSION['meta'])) {
        include_once '../../Model/MetaModel.php';
        $meta = array();
        $meta = unserialize($_SESSION['meta']);

        echo '<table>';/*Tabela para apresentar os dados cadastrados*/
          echo '<thead>';
            echo '<tr>';
              echo '<th>Leitor | </th>';
              echo '<th>Livro | </th>';
              echo '<th>Data Início | </th>';
              echo '<th>Data Final | </th>';
              echo '<th>Quantidade de Páginas | </th>';
              echo '<th>...</th>';
            echo '</tr>';
          echo '</thead>';

        foreach ($meta as $u) {
          echo '<tbody>';
            echo '<tr>';
              echo '<td>';
                echo "$u->user";
              echo '</td>';
              echo '<td>';
                echo "$u->livro";
              echo '</td>';
              echo '<td>';
                echo "$u->dataInicio";
              echo '</td>';
              echo '<td>';
                echo "$u->dataFinal";
              echo '</td>';
              echo '<td>';
                echo "$u->dias";
              echo '</td>';
              echo "<td><a href='../../Controller/LivroController.php?operation=excluir&id=$u->id'>Deletar</a></td>";
            echo '<tr>';
          echo '</tbody>';
        }

        echo '</table>';

        unset($_SESSION['meta']);
      }
    ?>
  </body>
</html>
