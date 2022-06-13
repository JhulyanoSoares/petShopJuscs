<?php
include_once '../model/ClienteModel.php';
include_once '../DAO/ClienteDAO.php';

    if(isset($_REQUEST['inserir'])){   
        
        $nome = $_POST['nomeCliente'];
        $nacionalidade = $_POST['nacionalidade'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $complemento = $_POST['complemento'];

        $cliente = new Cliente($nome, $nacionalidade, $cpf, $email, $telefone, $rua, $numero, $cidade, $complemento);

        echo $cliente->getNome().'    '.$cliente->getNacionalidade().'     '.$cliente->getCpf().'   '.$cliente->getEmail()
        .'   '.$cliente->getTelefone().'   '.$cliente->getRua().'   '.$cliente->getNumero().'   '.$cliente->getCidade()
        .'   '.$cliente->getComplemento();

        ClienteDAO::inserir($cliente);

        header("Location: ../view/FrmCliente_cadastro.php");

    }

    if(isset($_REQUEST['editar'])){   
        $cliente = new Cliente();
        $cliente->setNome($_POST['nomeCliente']);
        $cliente->setNacionalidade($_POST['nacionalidade']);
        $cliente->setCpf($_POST['cpf']);
        $cliente->setEmail($_POST['email']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->setRua($_POST['rua']);
        $cliente->setNumero($_POST['numero']);
        $cliente->setCidade($_POST['cidade']);
        $cliente->setComplemento($_POST['complemento']);
        $cliente->setId($_GET['id']);
        
        ClienteDAO::editar($cliente);

        header("Location: ../view/FrmCliente_cadastro.php");
    }

    if(isset($_REQUEST['excluir'])){

        $id = $_GET['id'];
        $cliente = ClienteDAO::buscarPorId($id);
        echo '<br><br><hr>'
            .'<h3> Confirma a Exclusão do Cliente '.$cliente->getNome(). '?</h3>';
        echo '<a href="?ConfirmaExcluir&id='.$id.'">'
            .'<button> Sim </button></a>';
        echo '<a href="../view/FrmCliente_cadastro.php"><button> Não </button></a>'
            .'<br><br><hr>';
    }

    if(isset($_REQUEST['ConfirmaExcluir'])){
        
        $id = $_GET['id'];
        ClienteDAO::excluir($id);

        header("Location: ../view/FrmCliente_cadastro.php");
    }

?>