<?php
include_once '../model/PetModel.php';
include_once '../DAO/PetDAO.php';

    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomePet'];
        $tutor = $_POST['tutor'];
        $raca = $_POST['raca'];
        $idade = $_POST['idade'];
        $infoad = $_POST['textarea'];

        $pet = new Pet($nome, $tutor, $raca, $idade, $infoad);
        
        echo $pet->getNome().'    '.$pet->getTutor().'   '.$pet->getRaca().'   '.$pet->getIdade().'   '.$pet->getInfoad();

        PetDAO::inserir($pet);

        header("Location: ../view/FrmPet_cadastro.php");
    }

    if(isset($_REQUEST['editar'])){
        $pet = new Pet();
        $pet->setNome($_POST['nomePet']);
        $pet->setTutor($_POST['tutor']);
        $pet->setRaca($_POST['raca']);
        $pet->setIdade($_POST['idade']);
        $pet->setInfoad($_POST['textarea']);
        $pet->setId($_GET['id']);
        PetDAO::editar($pet);

        header("Location: ../view/FrmPet_cadastro.php");
    }

    if(isset($_REQUEST['excluir'])){

        $id = $_GET['id'];
        $pet = PetDAO::buscarPorId($id);
        echo '<br><br><hr>'
            .'<h3> Confirma a Exclusão do Pet '.$pet->getNome(). '?</h3>';
        echo '<a href="?ConfirmaExcluir&id='.$id.'">'
            .'<button> Sim </button></a>';
        echo '<a href="../view/FrmPet_cadastro.php"><button> Não </button></a>'
            .'<br><br><hr>';
    }
    
    if(isset($_REQUEST['ConfirmaExcluir'])){

        $id = $_GET['id'];
        PetDAO::excluir($id);

        header("Location: ../view/FrmPet_cadastro.php");
    }

?>