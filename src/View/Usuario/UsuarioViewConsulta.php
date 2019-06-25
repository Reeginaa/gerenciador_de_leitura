<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta de Usuarios</title>
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
      if (isset($_SESSION['usuario'])) {
        include_once '../../Model/UsuarioModel.php';
        $usuario = array();
        $usuario = unserialize($_SESSION['usuario']);

        echo '<table>';/*Tabela para apresentar os dados cadastrados*/
          echo '<thead>';
            echo '<tr>';
              echo '<th>Nome Completo</th>';
              echo '<th>Data de Nascimento</th>';
              echo '<th></th>';
            echo '</tr>';
          echo '</thead>';

        foreach ($usuario as $u) {
          echo '<tbody>';
            echo '<tr>';
              echo '<td>';
                echo "$u->nomeCompleto";
              echo '</td>';
              echo '<td>';
                echo "$u->dataNascimento";
              echo '</td>';
              echo "<td><a href='../../Controller/UsuarioController.php?operation=excluir&id=$u->id'>Deletar</a></td>";
            echo '<tr>';
          echo '</tbody>';
        }
        echo '</table>';

        unset($_SESSION['usuario']);
      }
    ?>
  </body>
</html>
