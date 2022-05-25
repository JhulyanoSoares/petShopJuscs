<?php
include_once '../model/PaisModel.php';
include_once '../DAO/PaisDAO.php';

    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomePais'];
        $sigla = $_POST['siglaPais'];

        $pais = new Pais($nome, $sigla);
        
        echo $pais->getNome().'    '.$pais->getSigla();

        PaisDAO::inserir($pais);
    }
?>