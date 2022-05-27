<?php
include_once '../model/PaisModel.php';
include_once '../DAO/PaisDAO.php';

    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomePais'];
        $sigla = $_POST['siglaPais'];

        $pais = new Pais($nome, $sigla);
        
        echo $pais->getNome().'    '.$pais->getSigla();

        PaisDAO::inserir($pais);

        header("Location: ../view/FrmPais_cadastro.php");
    }

    if($_REQUEST['editar']){

        $pais = new Pais();
        $pais->setId($_POST['id']);
        $pais->setNome($_POST['nomePais']);
        $pais->setSigla($_POST['sigla']);

        PaisDAO::editar($pais);

        header("Location: ../view/FrmPais_cadastro.php");
    }
?>