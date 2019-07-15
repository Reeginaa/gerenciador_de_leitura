<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
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

    <div id="corpo-form-livro">
      <h1><b><ins>Cadastro de Livro</ins></b></h1>
      <form action="../../Controller/LivroController.php?operation=cadastrar" method="post">
        <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Título">
        <input type="text" name="txtISBN" id="txtISBN" placeholder="ISBN">
        <input type="text" name="txtAutor" id="txtAutor" placeholder="Autor">
        <input type="text" name="txtEditora" id="txtEditora" placeholder="Editora">
        <input type="text" name="txtGenero" id="txtGenero" placeholder="Gênero">
        <input type="text" name="txtAno" id="txtAno" placeholder="Ano de Publicação">
        <input type="text" name="txtPaginas" id="txtPaginas" placeholder="Quantidade de Páginas">
        <label id="classificacao"></label>
        <select name="txtClassificacao" id="txtClassificacao">
          <option value="">Selecione uma Classificação</option>
          <option value="Lido">Lido</option>
          <option value="Quero Ler">Quero Ler</option>
          <option value="Lendo">Lendo</option>
          <option value="Abandonei">Abandonei</option>
          <option value="Relendo">Relendo</option>
        </select>
        <input type="text" name="txtSinopse" id="txtSinopse" placeholder="Sinopse">
        <input type="submit" name="btCadastrar" id="btCadastrar" class="button-cadastrar" value="Cadastrar">
      </form>
    </div>

    <div id="rodape">
        <div>
			Maria Regina Cerbaro &copy 2019 Todos os direitos reservados
    	</div>
    </div>

  </body>
</html>
