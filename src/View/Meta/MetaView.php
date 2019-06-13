<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Meta</title>
  </head>
  <body>
    <form action="../../Controller/MetaController.php?operation=cadastrar" method="post" name="cadMeta">
      <label>Selecione um Livro</label>
      <select name="txtLivro" id="txtLivro">
        <option value=""></option>
      </select>
      <input type="date" name="dtInicio" id="dtInicio" placeholder="Data Inicial"></br>
      <input type="date" name="dtFinal" id="dtFinal" placeholder="Data Final"></br>
      <input type="submit" name="btCalcular" id="btCalcular" value="Calcular"></br>
      <input type="reset" name="btCancelar" id="btCancelar" value="Cancelar"></br>
      <!--<input type="number" name="nmResultado" id="nmResultado" placeholder="Resultado">-->
    </form>
  </body>
</html>
