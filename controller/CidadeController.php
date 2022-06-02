<?php
    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomeCidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $cep = $_POST['CEP'];

        echo $nome.'  '.$estado.'  '.$pais.'  '.$cep;

    }
?>