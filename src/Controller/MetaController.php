<?php
  session_start();//iniciar sessão
  include '../Model/MetaModel.php';
  include '../Dao/MetaDAO.php';

  if (isset($_GET['operation'])) {
    switch ($_GET['operation']) {
      case 'cadastrar':
        if ((!empty($_POST['txtLivro'])) && (!empty($_POST['dtInicio'])) &&
      (!empty($_POST['dtFinal'])) /*&& (!empty($_POST['nmResultado']))*/) {

          $erros = array();

          if (count($erros) == 0) {
            $meta = new MetaModel();

            $meta->livro = $_POST['txtLivro'];
            $meta->$dataInicial = $_POST['dtInicio'];
            $meta->$dataFinal = $_POST['dtFinal'];
            /*$meta->dataFinal = $_POST['nmResultado'];*/

            $metaDao = new MetaDAO();
            $metaDao->insertMeta($meta);

            $_SESSION['livro'] = $meta->livro;
            $_SESSION['dtInicio'] = $meta->$dataInicial;
            $_SESSION['dtFinal'] = $meta->dataFinal;
            /*$_SESSION['nmResultado'] = $meta->resultado;*/
            header("location:../View/Meta/MetaViewResult.php");
          } else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Meta/MetaViewError.php");
          }
        } else {
          echo "Informe todos os campos";
        }
        break;

      case 'consultar':
        $metaDao = new MetaDAO();
        $array = array();
        $array = $metaDao->searchMeta();

        $_SESSION['meta'] = serialize($array);
        header("location:../View/Meta/MetaViewConsulta.php");
        break;

      case 'excluir':
        echo "excluir";
        break;

      case 'alterar':
        echo "alterar";
        break;
    }
  }
?>
