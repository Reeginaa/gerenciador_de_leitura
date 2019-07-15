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
    <div id="titulo">
      <h1><b><ins>ERROS!</ins></b></h1>
    </div>
    <fieldset>
      <?php
        if (isset($_GET['erros'])) {
          $erros = array();
          $erros = unserialize($_GET['erros']);

          foreach ($erros as $e) {
            echo '<br/>' . $e;
          }
        }
      ?>
    </fieldset>

    <div id="rodape">
        <div>
			Maria Regina Cerbaro &copy 2019 Todos os direitos reservados
    	</div>
    </div>
  </body>
</html>
