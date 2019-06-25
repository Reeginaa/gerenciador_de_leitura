<?php
  session_start();//inicia sessão
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Meta Efetuado</title>
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
      echo '<table>';/*Tabela para exibir resultado do cadastro*/
        echo '<thead>';
          echo '<tr>';
            echo '<th>Leitor</th>';
            echo '<th>Livro</th>';
            echo '<th>Data Início</th>';
            echo '<th>Data Final</th>';
            echo '<th>Resultado</th>';
          echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
          echo '<tr>';
            echo '<td>'.$_SESSION['user'].'</td>';
            echo '<td>'.$_SESSION['livro'] .'</td>';
            echo '<td>'.$_SESSION['dataInicio'] .'</td>';
            echo '<td>'.$_SESSION['dataFinal'] .'</td>';
            echo '<td>'.$_SESSION['pgResultadp'] .'</td>';
          echo '</tr>';
        echo '</tbody>';
      echo '</table>';

      unset($_SESSION['user']);
      unset($_SESSION['livro']);
      unset($_SESSION['dataInicio']);
      unset($_SESSION['dataFinal']);
      unset($_SESSION['dias']);
    ?>
  </body>
</html>
