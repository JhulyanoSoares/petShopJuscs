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

    if(isset($_REQUEST['editar'])){
        $pais = new Pais();
        $pais->setNome($_POST['nomePais']);
        $pais->setSigla($_POST['siglaPais']);
        $pais->setId($_GET['id']);
        PaisDAO::editar($pais);

        header("Location: ../view/FrmPais_cadastro.php");
    }

    if(isset($_REQUEST['excluir'])){

        $id = $_GET['id'];
        $pais = PaisDAO::buscarPorId($id);
        echo '<br><br><hr>'
            .'<h3> Confirma a Exclusão do País '.$pais->getNome(). '?</h3>';
        echo '<a href="?ConfirmaExcluir&id='.$id.'">'
            .'<button> Sim </button></a>';
        echo '<a href="../view/FrmPais_cadastro.php"><button> Não </button></a>'
            .'<br><br><hr>';
    }
    
    if(isset($_REQUEST['ConfirmaExcluir'])){

        $id = $_GET['id'];
        PaisDAO::excluir($id);

        header("Location: ../view/FrmPais_cadastro.php");
    }

?>