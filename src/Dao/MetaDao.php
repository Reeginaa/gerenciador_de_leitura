<?php
  include '../Persistence/ConnectionDB.php';

  class MetaDAO {
    private $connection = null;

    public function __construct(){
      $this->connection = ConnectionDB::getInstance();
    }

    public function insertMeta ($meta) {
      try {
        $status = $this->connection->prepare("INSERT INTO meta(id, livro, dataInicial, dataFinal, /*resultadoPg*/) VALUES(null, ?,?,?/*,?*/)");

        $status->bindValue(1, $meta->livro);
        $status->bindValue(2, $meta->dataInicial);
        $status->bindValue(3, $meta->dataFinal);
        /*$status->bindValue(4, $meta->resultado);*/

        $status->execute();

        //encerra conexão com o banco
        $this->connection = null;
      } catch (PDOException $e) {
        echo "Ocorreram erros ao inserir nova meta.";
      }

    }
  }
?>
