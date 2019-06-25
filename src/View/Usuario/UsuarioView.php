<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Usuários</title>
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
		<div id="corpo-form">
			<h1>Cadastro de Usuário</h1>
			<form action="../../Controller/UsuarioController.php?operation=cadastrar" method="post">
						<input type="txt" name="txtNome" id="txtNome" placeholder="Nome Completo">
						<input type="txt" name="txtSexo" id="txtSexo" placeholder="Sexo">
						<p>Data de Nascimento</p>
						<input type="date" name="dtNascimento" id="dtNascimento">
						<input type="txt" name="txtCidade" id="txtCidade" placeholder="Cidade">
						<input type="txt" name="txtEstado" id="txtEstado" placeholder="Estado">
						<input type="txt" name="txtEmail" id="txtEmail" placeholder="E-mail">
						<input type="submit" name="btCadastrar" id="btCadastrar" class="button-cadastrar" value="Cadastrar">
			</form>
		</div>
	</body>
</html>
