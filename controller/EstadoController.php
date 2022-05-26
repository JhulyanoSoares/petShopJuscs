<?php
include_once '../model/EstadoModel.php';
include_once '../DAO/EstadoDAO.php';

    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomeEstado'];
        $uf = $_POST['UF'];
        $pais = $_POST['pais'];

        $estado = new Estado($nome, $uf, $pais);

        echo $estado->getNome().'    '.$estado->getUf().'     '.$estado->getPais();

        EstadoDAO::inserir($estado);

        header("Location: ../view/FrmEstado_cadastro.php");

    }

    if(isset($_REQUEST['editar'])){   
        $estado = new Estado();
        $estado->setNome($_POST['nomeEstado']);
        $estado->setUf($_POST['UF']);
        $estado->setPais($_POST['pais']);
        $estado->setId($_GET['id']);
        
        EstadoDAO::editar($estado);

        header("Location: ../view/FrmEstado_cadastro.php");
    }

?>