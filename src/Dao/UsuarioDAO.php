<?php
	include '../Persistence/ConnectionDB.php';

	class UsuarioDAO {
		private $connection = null;

		public function __construct(){
			$this->connection = ConnectionDB::getInstance();
		}

		public function insertUsuario ($usuario) {
			try{
				$status = $this->connection->prepare("INSERT INTO usuario(id, nomeCompleto, sexo, dataNascimento, email)
				                                       VALUES (null,?,?,?,?)");

				$status->bindValue(1, $usuario->nomeCompleto);
				$status->bindValue(2, $usuario->sexo);
				$status->bindValue(3, $usuario->dataNascimento);
				$status->bindValue(4, $usuario->email);
				$status->execute();

				//$status->debugDumpParams(); die();

				//Encerrar Conexão
				$this->connection = null;
			} catch (PDOException $e) {
				echo "Ocorreram erros ao inserir novo usuário.";
			}
		}

		public function searchUsuario(){
			try {
				$status = $this->connection->query("SELECT * FROM usuario");

				$array = array();
				$array = $status->fetchAll(PDO::FETCH_CLASS, 'UsuarioModel');

				$this->connection = null;

				return $array;
			} catch (PDOException $e) {
				echo 'Ocorreram erros ao buscar usuários' . $e;
			}
		}

		public function deleteUsuario($id) {
			try {
				$status = $this->connection->prepare("DELETE FROM usuario WHERE id = ?");

				$status->bindValue(1, $id);
				$status->execute();

				$this->Connection = null;
			} catch (PDOException $e) {
				echo "Ocorreram erros ao deletar o usuário! <br>$e";
			}
		}
	}
?>
