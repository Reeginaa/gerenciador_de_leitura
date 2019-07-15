<?php
  include_once '../Persistence/ConnectionDB.php';

  class LivroDAO {
    private $connection = null;

    public function __construct(){
      $this->connection = ConnectionDB::getInstance();
    }

    public function insertLivro ($livro) {
      try{
        $status = $this->connection->prepare("INSERT INTO livro(id, titulo, ISBN, autor, editora, genero, ano, qtdPaginas, classificacao, sinopse) VALUES (null, ?,?,?,?,?,?,?,?,?)");

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

    public function searchLivro(){
      try {
        $status = $this->connection->query("SELECT * FROM livro");

        $array = array();
        $array = $status->fetchAll(PDO::FETCH_CLASS, 'LivroModel');

        $this->connection = null;

        return $array;
      } catch (PDOException $e) {
        echo 'Ocorreram erros ao buscar livros' . $e;
      }
    }

    public function searchLivroId($id){
      try {
        $status = $this->connection->query("SELECT * FROM livro WHERE id = ".$id);

        $array = array();
        $array = $status->fetch(PDO::FETCH_OBJ);

        $this->connection = null;

        return $array;
        $this->connection = null;
      } catch (PDOException $e) {
        echo 'Ocorreram erros ao buscar livros' . $e;
      }
    }

    public function deleteLivro($id) {
      try {
        $status = $this->connection->prepare("DELETE FROM livro WHERE id = ?");

        $status->bindValue(1, $id);
        $status->execute();

        $this->connection = null;
      } catch (PDOException $e) {
        echo "Ocorreram erros ao deletar o livro! <br>$e";
      }

    }
  }
?>
