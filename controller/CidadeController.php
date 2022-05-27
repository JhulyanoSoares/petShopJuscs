<?php
include_once '../model/CidadeModel.php';
include_once '../DAO/CidadeDAO.php';

    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomeCidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $cep = $_POST['CEP'];

        $cidade = new Cidade($nome, $estado, $pais, $cep); 

        echo $cidade->getNome().'    '.$cidade->getEstado().'     '.$cidade->getPais().'     '.$cidade->getCep();

        CidadeDAO::inserir($cidade);

        header("Location: ../view/FrmCidade_cadastro.php");

    }

    if(isset($_REQUEST['editar'])){   
        
        $cidade = new Cidade();
        $cidade->setId($_GET['id']);
        $cidade->setNome($_POST['nomeEstado']);
        $cidade->setEstado($_POST['UF']);
        $cidade->setPais($_POST['pais']);
        $cidade->setCep($_POST['cep']);
        
        CidadeDAO::editar($cidade);

        header("Location: ../view/FrmCidade_cadastro.php");
    }

?>