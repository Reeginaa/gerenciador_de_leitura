<?php
  include '../Persistence/ConnectionDB.php';

  class LivroDAO {
    private $connection = null;

    public function __construct(){
      $this->connection = ConnectionDB::getInstance();
    }

    public function insertLivro ($livro) {
      try{
        $status = $this->connection->prepare("Insert into livro(id, titulo, ISBN, autor, editora, genero, ano, qtdPaginas, classificacao, sinopse) values (null, ?,?,?,?,?,?,?,?,?)");

        $status->bindValue(1, $livro->titulo);
        $status->bindValue(2, $livro->ISBN);
        $status->bindValue(3, $livro->autor);
        $status->bindValue(4, $livro->editora);
        $status->bindValue(5, $livro->genero);
        $status->bindValue(6, $livro->ano);
        $status->bindValue(7, $livro->qtdPaginas);
        $status->bindValue(8, $livro->classificacao);
        $status->bindValue(9, $livro->sinopse);

        $status->execute();

        //Encerrar Conexão
        $this->connection = null;
      } catch (PDOException $e) {
        echo "Ocorreram erros ao inserir novo livro.";
      }
    }
  }
?>
