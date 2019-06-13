<?php
  class LivroModel {
    private $titulo;
    private $ISBN;
    private $autor;
    private $editora;
    private $genero;
    private $ano;
    private $qtdPaginas;
    private $classificacao;
    private $sinopse;

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
