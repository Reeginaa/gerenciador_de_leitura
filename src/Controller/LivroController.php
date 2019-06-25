<?php
  session_start();//Iniciar sessão
  include '../Model/LivroModel.php';
  include '../Include/LivroValidate.php';
  include '../Dao/LivroDAO.php';

  if (isset($_GET['operation'])) {
    switch ($_GET['operation']) {
      case 'cadastrar':
        if ( (!empty($_POST['txtTitulo'])) && (!empty($_POST['txtISBN'])) && (!empty($_POST['txtAutor'])) &&
             (!empty($_POST['txtEditora'])) && (!empty($_POST['txtGenero'])) && (!empty($_POST['txtAno'])) &&
             (!empty($_POST['txtPaginas'])) && (!empty($_POST['txtClassificacao'])) && (!empty($_POST['txtSinopse']))) {

          $erros = array();

          if (count($erros) == 0){
            $livro = new LivroModel();

            $livro->titulo = $_POST['txtTitulo'];
            $livro->ISBN = $_POST['txtISBN'];
            $livro->autor = $_POST['txtAutor'];
            $livro->editora = $_POST['txtEditora'];
            $livro->genero = $_POST['txtGenero'];
            $livro->ano = $_POST['txtAno'];
            $livro->qtdPaginas = $_POST['txtPaginas'];
            $livro->classificacao = $_POST['txtClassificacao'];
            $livro->sinopse = $_POST['txtSinopse'];

            $livroDao = new LivroDAO();
            $livroDao->insertLivro($livro);

            $_SESSION['titulo'] = $livro->titulo;
            $_SESSION['ISBN'] = $livro->ISBN;
            $_SESSION['autor'] = $livro->autor;
            $_SESSION['editora'] = $livro->editora;
            $_SESSION['genero'] = $livro->genero;
            $_SESSION['ano'] = $livro->ano;
            $_SESSION['qtdPaginas'] = $livro->qtdPaginas;
            $_SESSION['classificacao'] = $livro->classificacao;
            $_SESSION['sinopse'] = $livro->sinopse;
            header("location:../View/Livro/LivroViewResult.php?");
          } else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Livro/LivroViewError.php");
          }
        } else {
          echo "<script language='javascript' type='text/javascript'>
            alert('Informe todos os campos!');
            window.location.href='../View/Livro/LivroView.php';
        	</script>";
        }
        break;

      case 'consultar':
        $livroDao = new LivroDAO();
        $array = array();
        $array = $livroDao->searchLivro();

        $_SESSION['livro'] = serialize($array);
        header("location:../View/Livro/LivroViewConsulta.php");
        break;

      case 'excluir':
        if (isset($_REQUEST['id'])) {
          $livroDao = new LivroDAO();
          $livroDao->deleteLivro($_REQUEST['id']);
          echo "<script language='javascript' type='text/javascript'>
            alert('Livro excluido com sucesso');
            window.location.href='../Controller/LivroController.php?operation=consultar';
        	</script>";
        } else {
          echo "<script language='javascript' type='text/javascript'>
            alert('Livro informado não existe');
            window.location.href='../View/Meta/MetaView.php';
        	</script>";
        }
        break;
    }
  }
?>
