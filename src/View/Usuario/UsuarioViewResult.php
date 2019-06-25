<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário Efetuado</title>
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
    <h1>RESULTADO</h1><p>
      <?php
        echo '<table>';/*Tabela para apresentar os dados cadastrados*/
          echo '<thead>';
            echo '<tr>';
              echo '<th>Nome Completo</th>';
              echo '<th>Sexo</th>';
              echo '<th>Data de Nascimento</th>';
              echo '<th>Cidade</th>';
              echo '<th>Estado</th>';
              echo '<th>E-mail</th>';
            echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
            echo '<tr>';
              echo '<td>'.$_SESSION['nomeCompleto'].'</td>';
              echo '<td>'.$_SESSION['sexo'] .'</td>';
              echo '<td>'.$_SESSION['dataNascimento'] .'</td>';
              echo '<td>'.$_SESSION['cidade'] .'</td>';
              echo '<td>'.$_SESSION['estado'] .'</td>';
              echo '<td>'.$_SESSION['email'].'</td>';
            echo '</tr>';
          echo '</tbody>';
        echo '</table>';

        unset($_SESSION['nomeCompleto']);
        unset($_SESSION['sexo']);
        unset($_SESSION['dataNascimento']);
        unset($_SESSION['cidade']);
        unset($_SESSION['estado']);
        unset($_SESSION['email']);
      ?>
  </body>
</html>
