<?php
	session_start();//iniciar sessão
	include '../Model/UsuarioModel.php';
	include '../Include/UsuarioValidate.php';
	include '../Dao/UsuarioDAO.php';

	if ((!empty($_POST['txtNome'])) && (!empty($_POST['txtSexo'])) && (!empty($_POST['dtNascimento'])) &&
	    (!empty($_POST['txtCidade'])) && (!empty($_POST['txtEstado'])) && (!empty($_POST['txtEmail']))) {

				$erros = array();

				if(!UsuarioValidate::testarEmail($_POST['txtEmail'])) {
					echo "E-mail inválido";
				}

				if (count($erros) == 0) {
					$usuario = new UsuarioModel();

					$usuario->nomeCompleto = $_POST['txtNome'];
					$usuario->sexo = $_POST['txtSexo'];
					$usuario->dataNascimento = $_POST['dtNascimento'];
					$usuario->cidade = $_POST['txtCidade'];
					$usuario->estado = $_POST['txtEstado'];
					$usuario->email = $_POST['txtEmail'];

					$usuarioDao = new UsuarioDAO();
					$usuarioDao->insertUsuario($usuario);

					$_SESSION['nomeCompleto'] = $usuario->nomeCompleto;
					$_SESSION['sexo'] = $usuario->sexo;
					$_SESSION['dataNascimento'] = $usuario->dataNascimento;
					$_SESSION['cidade'] = $usuario->cidade;
					$_SESSION['estado'] = $usuario->estado;
					$_SESSION['email'] = $usuario->email;
					header("location:../View/Usuario/UsuarioViewResult.php?");
				}
				else {
					$err = serialize($erros);
					$_SESSION['erros'] = $err;
					header("location:../View/Usuario/UsuarioViewError.php");
				}
			}
			else {
				echo "Informe todos os campos!";
			}
?>
