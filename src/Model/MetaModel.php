<?php

  class MetaModel {
    private $user;
    private $livro;
    private $dataInicio;
    private $dataFinal;
    private $dias;
    private $pgResultado;

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
