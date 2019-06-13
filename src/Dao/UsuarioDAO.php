<?php
	include '../Persistence/ConnectionDB.php';

	class UsuarioDAO {
		private $connection = null;

		public function __construct(){
			$this->connection = ConnectionDB::getInstance();
		}

		public function insertUsuario ($usuario) {
			try{
				$status = $this->connection->prepare("Insert into usuario(id, nomeCompleto, sexo, dataNascimento, cidade,
				                                      estado, email) values (null,?,?,?,?,?,?)");

				$status->bindValue(1, $usuario->nomeCompleto);
				$status->bindValue(2, $usuario->sexo);
				$status->bindValue(3, $usuario->dataNascimento);
				$status->bindValue(4, $usuario->cidade);
				$status->bindValue(5, $usuario->estado);
				$status->bindValue(6, $usuario->email);
				$status->execute();

				//$status->debugDumpParams(); die();

				//Encerrar Conexão
				$this->connection = null;
			} catch (PDOException $e) {
				echo "Ocorreram erros ao inserir novo usuário.";
			}
		}
	}
?>
