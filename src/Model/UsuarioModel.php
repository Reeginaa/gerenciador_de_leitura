<?php

	class UsuarioModel {
		private $nomeCompleto;
		private $sexo;
		private $dataNascimento;
		private $cidade;
		private $estado;
		private $email;

		//Métodos mágicos
		public function __construct(){}

		public function __set($propriedade, $valor){
			$this->$propriedade = $valor;
		}

		public function __get($propriedade){
			return $this->$propriedade;
		}
	}
?>