<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário com Erros</title>
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
