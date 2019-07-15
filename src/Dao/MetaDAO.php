<?php
  //session_start();
  include_once '../Persistence/ConnectionDB.php';
  include 'LivroDAO.php';

  class MetaDAO {
    private $connection = null;

    public function __construct(){
      $this->connection = ConnectionDB::getInstance();
    }

    public function insertMeta ($meta) {
      try {
        $status = $this->connection->prepare("INSERT INTO meta(id, usuario, livro, dataInicio, dataFinal, pgResultado) VALUES(null,?,?,?,?,?)");

        $status->bindValue(1, $meta->user);
        $status->bindValue(2, $meta->livro);
        $status->bindValue(3, $meta->dataInicio);
        $status->bindValue(4, $meta->dataFinal);

        //Cálculo para dar o resultado de quantas páginas deve ler por dia
        $livroDAO = new LivroDAO();
        $livros = $livroDAO->searchLivroId($meta->livro);
        $qtdPgs = $livros->qtdPaginas;
        $pgResultado = $qtdPgs / $meta->dias;
        $_SESSION['pgResultado'] = $pgResultado;
        //manda para o banco o resultado das páginas e não os dias
        $status->bindValue(5, $pgResultado);

        $status->execute();

        //$status->debugDumpParams(); die();
        //encerra conexão com o banco
        $this->connection = null;
      } catch (PDOException $e) {
        echo "Ocorreram erros ao inserir nova meta.";
      }
    }

    public function searchMeta(){
      try {
        $status = $this->connection->query("SELECT * FROM meta");

        $array = array();
        $array = $status->fetchAll(PDO::FETCH_CLASS, 'MetaModel');

        $this->connection = null;

        return $array;
      } catch (PDOException $e) {
        echo 'Ocorreram erros ao buscar metas' . $e;
      }
    }

    public function deleteMeta($id){
      try {
        $status = $this->connection->prepare("DELETE FROM meta WHERE id = ?");

        $status->bindValue(1, $id);
        $status->execute();

        $this->connection = null;
      } catch (PDOException $e) {
        echo "Ocorreram erros ao deletar a meta! <br>$e";
      }

    }
  }
?>
