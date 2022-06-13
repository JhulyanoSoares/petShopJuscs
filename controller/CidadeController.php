<?php
include_once '../model/CidadeModel.php';
include_once '../DAO/CidadeDAO.php';


    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomeCidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $cep = $_POST['CEP'];

        $cidade = new Cidade($nome, $estado, $pais, $cep);

        echo $cidade->getNome().'  '.$cidade->getEstado().'  '.$cidade->getPais().'  '
        .$cidade->getCep();

        CidadeDAO::inserir($cidade);

        header("Location: ../view/FrmCidade_cadastro.php");

    }

    if(isset($_REQUEST['editar'])){   
        $cidade = new Cidade();
        $cidade->setNome($_POST['nomeCidade']);
        $cidade->setEstado($_POST['estado']);
        $cidade->setPais($_POST['pais']);
        $cidade->setCep($_POST['CEP']);
        $cidade->setId($_GET['id']);
        
        CidadeDAO::editar($cidade);

        header("Location: ../view/FrmCidade_cadastro.php");
    }

    if(isset($_REQUEST['excluir'])){

        $id = $_GET['id'];
        $cidade = CidadeDAO::buscarPorId($id);
        echo '<br><br><hr>'
            .'<h3> Confirma a Exclusão da Cidade '.$cidade->getNome(). '?</h3>';
        echo '<a href="?ConfirmaExcluir&id='.$id.'">'
            .'<button> Sim </button></a>';
        echo '<a href="../view/FrmCidade_cadastro.php"><button> Não </button></a>'
            .'<br><br><hr>';
    }

    if(isset($_REQUEST['ConfirmaExcluir'])){
        
        $id = $_GET['id'];
        CidadeDAO::excluir($id);

        header("Location: ../view/FrmCidade_cadastro.php");
    }

?>