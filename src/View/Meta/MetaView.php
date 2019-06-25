<!DOCTYPE html>
<?php
  include_once '../../Persistence/ConnectionDB.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Meta</title>
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="menu">
			<ul>
				<li><a href="../../../home.php">Página Inicial</a></li>
        <li><a href="../../indexUsuario.php">Manutenção de Usuário</a></li>
				<li><a href="../../indexLivro.php">Manutenção de Livro</a></li>
				<li><a href="../../indexMeta.php">Manutenção de Meta</a></li>
			</ul>
		</div>
    <div id="corpo-form">
      <h1>Cadastro de Meta</h1>
      <form action="../../Controller/MetaController.php?operation=cadastrar" method="post">
        <select name="txtUser" id="txtUser">
          <option>Selecione um Usuário</option>
          <?php
            include_once '../../Dao/UsuarioDAO.php';
            include_once '../../Model/UsuarioModel.php';
            $usuarioDao = new UsuarioDAO();
            $usuario = $usuarioDao->searchUsuario();
            foreach ($usuario as $u) {
              echo "<option value='$u->nomeCompleto'>$u->nomeCompleto</option>";
            }
          ?>
        </select></br>
        <select name="txtLivro" id="txtLivro">
          <option>Selecione um Livro</option>
          <?php
            include_once '../../Dao/LivroDAO.php';
            include_once '../../Model/LivroModel.php';
            $livroDao = new LivroDAO();
            $livro = $livroDao->searchLivro();
            foreach ($livro as $l) {
              echo "<option value='$l->Título'>$l->titulo</option>";
            }
          ?>
        </select></br>
        <p>Data Início</p>
        <input type="date" name="dataInicio" id="dataInicio" placeholder="Data Início"></br>
        <p>Data Final</p>
        <input type="date" name="dataFinal" id="dataFinal" placeholder="Data Final"></br>
        <input type="hidden" name="dias" id="dias" placeholder="Dias">
        <input type="submit" name="btCalcular" id="btCalcular" class="button-cadastrar" value="Calcular"><!--Para Realizar o cálculo das páginas-->
      </form>
    </div>

        <script>/*Realizar Cálculo de diferença entre datas*/
          $('#btCalcular').on('click', function() {
            console.log('Calculando . . . ');
            date1 = new Date($('#dataInicio').val());
            date2 = new Date($('#dataFinal').val());

            var diferenca = Math.abs(date1 - date2); //diferença em milésimos e positivo
            var dia = 1000*60*60*24; // milésimos de segundo correspondente a um dia
            var total = Math.round(diferenca/dia); //valor total de dias arredondado
            document.getElementById("dias").value = total;
          });
        </script>

  </body>
</html>
