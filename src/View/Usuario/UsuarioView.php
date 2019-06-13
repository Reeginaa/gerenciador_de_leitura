<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Usuários</title>
	</head>
	<body>
		<form action="../../Controller/UsuarioController.php?operation=cadastrar" method="post" name="cadUser">
			<input type="txt" name="txtNome" id="txtNome" placeholder="Nome Completo"></br>
			<input type="txt" name="txtSexo" id="txtSexo" placeholder="Sexo"></br>
			<input type="date" name="dtNascimento" id="dtNascimento" placeholder="Data Nascimento"></br>
			<input type="txt" name="txtCidade" id="txtCidade" placeholder="Cidade"></br>
			<input type="txt" name="txtEstado" id="txtEstado" placeholder="Estado"></br>
			<input type="txt" name="txtEmail" id="txtEmail" placeholder="E-mail"></br>
			<input type="submit" name="btCadastrar" id="btCadastrar" value="Cadastrar"></br>
			<input type="reset" name="btCancelar" id="btCancelar" value="Cancelar">
		</form>
	</body>
</html>
