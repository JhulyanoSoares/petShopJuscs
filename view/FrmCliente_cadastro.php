<?php
    $action = "inserir";
    include_once '../DAO/CidadeDAO.php';
    include_once '../DAO/ClienteDAO.php';

    $nome = "";
    $nacionalidade = "";
    $cpf = "";
    $email = "";
    $telefone = "";
    $rua = "";
    $numero = "";
    $cidade = "";
    $complemento = "";

    if(isset($_REQUEST['editar'])){
        $cliente = ClienteDAO::buscarPorId($_GET['id']);
        $nome = $cliente->getNome();
        $nacionalidade = $cliente->getNacionalidade();
        $cpf = $cliente->getCpf();
        $email = $cliente->getEmail();
        $telefone = $cliente->getTelefone();
        $rua = $cliente->getRua();
        $numero = $cliente->getNumero();
        $idCidade = $cliente->getCidade();
        $action = "editar&id=".$cliente->getId();
    }
    
?>

<html>

    <header>

        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = no">

    </header>

    <body>
  
    <br/><br/>
        <div class="container border">
            <h2 style="text-align: center;">Cadastro de clientes</h2><br/>
            <form action="../controller/ClienteController.php?<?php echo $action ?>" method="POST">
                <label>Nome completo: </label><input type="text" value="<?php echo $nome?>" name="nomeCliente" id="txtNomeCliente" class="form-control" placeholder="Nome e Sobrenome ..." required><br/><br/>
                <label>Nacionalidade: </label><input type="text" value="<?php echo $nacionalidade?>" name="nacionalidade" id="txtNacionalidade" class="form-control" required><br/><br/>
                <label>CPF e/ou passaporte: </label><input type="text" value="<?php echo $cpf?>" name="cpf" id="txtCpf" class="form-control" placeholder="***.***.***-**" required><br/><br/>
                <label>Email: </label><input type="email" value="<?php echo $email?>" name="email" id="txtEmail" class="form-control" placeholder="exemplo@exemplo.com"><br/><br/>
                <label>Telefone: </label><input type="number" value="<?php echo $telefone?>" name="telefone" id="txtTelefone" class="form-control" placeholder="(**)*****-****"><br/><br/>
                <label>Rua: </label><input type="text" value="<?php echo $rua?>" name="rua" id="txtRua" class="form-control" required><br/>
                <label>N??mero: </label><input type="number" value="<?php echo $numero?>" name="numero" id="txtNumero" class="form-control" required><br/><br/>
                <label>Cidade: </label>
                <select id="cidade" name="cidade" class="form-select">
                    <option>Selecione a cidade</option>
                    <?php
                        $lista = CidadeDAO::buscar();
                        //var_dump($lista);
                        foreach($lista as $cidade){
                            $selecionar = "";
                            if($idCidade == $cidade->getId()){
                                $selecionar = "selected";
                            }
                            echo '<option '.$selecionar.' value="'.$cidade->getId().'">
                            '.$cidade->getNome().'</option>';
                        }
                    ?>
                </select><br/><br/>
                <label>Complemento: </label><input type="text" value="<?php echo $complemento?>" name="complemento" id="txtComplemento" class="form-control"><br/><br/>
                <a href="FrmPet_cadastro.php" type="button" name="btnCadastreOSeuPet" class="btn btn-dark"> Cadastre o seu pet <img src="icons/add.png"> </a><br/><br/>
                <button type="reset" name="btnLimpar4" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnSalvar" class="btn btn-success"> Salvar <img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>  
        
        <?php

            $lista = ClienteDAO::buscar();

        ?>
        <div class="container border">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nacionalidade</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Rua</th>
                        <th>N??mero</th>
                        <th>Cidade</th>
                        <th>Complemento</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        foreach($lista as $cliente){
                            echo '<tr>';
                            echo '<td>'.$cliente->getNome().'</td>';
                            echo '<td>'.$cliente->getNacionalidade().'</td>';
                            echo '<td>'.$cliente->getCpf().'</td>';
                            echo '<td>'.$cliente->getEmail().'</td>';
                            echo '<td>'.$cliente->getTelefone().'</td>';
                            echo '<td>'.$cliente->getRua().'</td>';
                            echo '<td>'.$cliente->getNumero().'</td>';
                            echo '<td>'.$cliente->getCidade()->getNome().'</td>';
                            echo '<td>'.$cliente->getComplemento().'</td>';
                            echo '<td><a href="FrmCliente_cadastro.php?editar&id='.$cliente->getId().'">
                            <button class="btn btn-warning"> Editar <img src="icons/table_edit.png"> </button></a></td>';
                            echo '<td><a href="../controller/ClienteController.php?excluir&id='.$cliente->getId().'">
                            <button class="btn btn-danger"> Excluir <img src="icons/table_delete.png"> </button></a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table><br/><br/>
            <button name="btnAlterar4" class="btn btn-warning"> Alterar <img src="icons/table_edit.png"> </button>
            <button name="btnRemover4" class="btn btn-danger"> Remover <img src="icons/table_delete.png"> </button>
        </div>
    

</html>