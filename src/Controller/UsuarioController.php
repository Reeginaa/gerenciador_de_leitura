<?php
	session_start();//iniciar sessão
	include '../Model/UsuarioModel.php';
	include '../Include/UsuarioValidate.php';
	include '../Dao/UsuarioDAO.php';

	if (isset($_GET['operation'])) {
		switch ($_GET['operation']) {
			case 'cadastrar':
				if ((!empty($_POST['txtNome'])) && (!empty($_POST['txtSexo'])) && (!empty($_POST['dtNascimento'])) &&
					 (!empty($_POST['txtEmail']))) {

					$erros = array();

					if(!UsuarioValidate::testarEmail($_POST['txtEmail'])) {
						echo "E-mail inválido";
					}

					if (count($erros) == 0) {
						$usuario = new UsuarioModel();

						$usuario->nomeCompleto = $_POST['txtNome'];
						$usuario->sexo = $_POST['txtSexo'];
						$usuario->dataNascimento = $_POST['dtNascimento'];
						$usuario->email = $_POST['txtEmail'];

						$usuarioDao = new UsuarioDAO();
						$usuarioDao->insertUsuario($usuario);

						$_SESSION['nomeCompleto'] = $usuario->nomeCompleto;
						$_SESSION['sexo'] = $usuario->sexo;
						$_SESSION['dataNascimento'] = $usuario->dataNascimento;
						$_SESSION['email'] = $usuario->email;
						header("location:../View/Usuario/UsuarioViewResult.php?");
					}	else {
						$err = serialize($erros);
						$_SESSION['erros'] = $err;
						header("location:../View/Usuario/UsuarioViewError.php");
					}
				} else {
					echo "<script language='javascript' type='text/javascript'>
            alert('Informe todos os campos!');
            window.location.href='../View/Usuario/UsuarioView.php';
        	</script>";
				}
				break;

			case 'consultar':
				$usuarioDao = new UsuarioDAO();
				$array = array();
				$array = $usuarioDao->searchUsuario();

				$_SESSION['usuario'] = serialize($array);
				header("location:../View/Usuario/UsuarioViewConsulta.php");
			  break;

			case 'excluir':
				if (isset($_REQUEST['id'])) {
					$usuarioDao = new UsuarioDAO();
					$usuarioDao->deleteUsuario($_REQUEST['id']);
					header('location:../Controller/UsuarioController.php?operation=consultar');
					echo "<script language='javascript' type='text/javascript'>
            alert('Usuário excluido com sucesso');
            window.location.href='../Controller/UsuarioController/php?operation=consultar';
        	</script>";
				} else {
					echo "<script language='javascript' type='text/javascript'>
            alert('Usuário informado não existe');
            window.location.href='../View/Usuario/UsuarioView.php';
        	</script>";
				}
				break;
		}
	}
?>
