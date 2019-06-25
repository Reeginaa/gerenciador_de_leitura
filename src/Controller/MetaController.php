<?php
  session_start();//iniciar sessão
  include '../Model/MetaModel.php';
  include '../Dao/MetaDAO.php';

  if (isset($_GET['operation'])) {
    switch ($_GET['operation']) {
      case 'cadastrar':
        if ((!empty($_POST['txtUser'])) && (!empty($_POST['txtLivro'])) &&
      (!empty($_POST['dataInicio'])) && (!empty($_POST['dataFinal'])) && (!empty($_POST['dias']))) {

          $erros = array();

          if (count($erros) == 0) {
            $meta = new MetaModel();

            $meta->user = $_POST['txtUser'];
            $meta->livro = $_POST['txtLivro'];
            $meta->dataInicio = $_POST['dataInicio'];
            $meta->dataFinal = $_POST['dataFinal'];
            $meta->dias = $_POST['dias'];

            $metaDao = new MetaDAO();
            $metaDao->insertMeta($meta);

            $_SESSION['user'] = $meta->user;
            $_SESSION['livro'] = $meta->livro;
            $_SESSION['dataInicio'] = $meta->dataInicio;
            $_SESSION['dataFinal'] = $meta->dataFinal;
            $_SESSION['dias'] = $meta->dias;
            header("location:../View/Meta/MetaViewResult.php");
          } else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/Meta/MetaViewError.php");
          }
        } else {
          echo "<script language='javascript' type='text/javascript'>
            alert('Informe todos os campos!');
            window.location.href='../View/Meta/MetaView.php';
        	</script>";
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
        if (isset($_REQUEST['id'])) {
          $metaDao = new MetaDAO();
          $metaDao->deleteMeta($_REQUEST['id']);
          echo "<script language='javascript' type='text/javascript'>
            alert('Meta excluída com sucesso');
            window.location.href='../Controller/MetaController.php?operation=consultar';
        	</script>";
        } else {
          echo "<script language='javascript' type='text/javascript'>
            alert('Meta informada não existe');
            window.location.href='../View/Meta/MetaView.php';
        	</script>";
        }
        break;
    }
  }
?>
