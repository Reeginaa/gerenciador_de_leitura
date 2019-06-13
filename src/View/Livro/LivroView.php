<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Livros</title>
  </head>
  <body>
    <form action="../../Controller/LivroController.php?operation=cadastrar" method="post" name="cadlivro">
      <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Título"></br>
      <input type="text" name="txtISBN" id="txtISBN" placeholder="ISBN"></br>
      <input type="text" name="txtAutor" id="txtAutor" placeholder="Autor"></br>
      <input type="text" name="txtEditora" id="txtEditora" placeholder="Editora"></br>
      <input type="text" name="txtGenero" id="txtGenero" placeholder="Gênero"></br>
      <input type="text" name="txtAno" id="txtAno" placeholder="Ano de Publicação"></br>
      <input type="text" name="txtPaginas" id="txtPaginas" placeholder="Quantidade de Páginas"></br>
      <label>Classificação</label>
      <select name="txtClassificacao">
        <option value="txtLido">Lido</option>
        <option value="txtQueroLer">Quero Ler</option>
        <option value="txtLendo">Lendo</option>
        <option value="txtAbandonei">Abandonei</option>
        <option value="txtRelendo">Relendo</option>
      </select></br>
      <input type="text" name="txtSinopse" id="txtSinopse" placeholder="Sinopse"></br>
      <input type="submit" name="btCadastrar" id="btCadastrar" value="Cadastrar"></br>
      <input type="reset" name="btLimpar" id="btLimpar" value="Limpas">
    </form>
  </body>
</html>
