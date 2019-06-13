<?php

  class MetaModel {
    private $livro;
    private $dataInicial;
    private $dataFinal;
    /*private $resultado;*/

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
