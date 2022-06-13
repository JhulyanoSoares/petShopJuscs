<?php
    $action = "inserir";
    include_once '../DAO/PetDAO.php';

    $nome = "";
    $tutor = "";
    $raca = "";
    $idade = "";
    $infoad = "";

    if(isset($_REQUEST['editar'])){
        $pet = PetDAO::buscarPorId($_GET['id']);
        $nome = $pet->getNome();
        $tutor = $pet->getTutor();
        $raca = $pet->getRaca();
        $idade = $pet->getIdade();
        $infoad = $pet->getInfoad(); 
        $action = "editar&id=".$pet->getId();
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
            <h2 style="text-align: center;">Cadastro de pets</h2><br/>
            <form action="../controller/PetController.php?<?php echo $action ?>" method="POST">
                <label>Nome: </label><input type="text" value="<?php echo $nome?>" name="nomePet" id="txtNomePet" class="form-control" required><br/><br/>
                <label>Tutor: </label><input type="text" value="<?php echo $tutor?>" name="tutor" id="txtTutor" class="form-control" required>
                <button name="btnBuscar" class="btn btn-primary"> Pesquisar <img src="icons/magnifier.png"> </button><br/><br/>
                <label>Raça: </label><input type="text" value="<?php echo $raca?>" name="raca" id="txtRaca" class="form-control" required><br/><br/>
                <label>Idade: </label><input type="text" value="<?php echo $idade?>" name="idade" id="txtIdade" class="form-control"><br/><br/>
                <label>Informações adicionais:</label>
                <textarea value="<?php echo $infoad?>" name=textarea id="textarea" placeholder="informações adicionais" class="form-control">

                </textarea><br/><br/>
                <button type="reset" name="btnLimpar5" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnCadastrar5" class="btn btn-success"> Cadastrar <img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>
        
        <?php

            $lista = PetDAO::buscar();

        ?>
        
        <div class="container border">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Tutor</th>
                        <th>Raça</th>
                        <th>Idade</th>
                        <th>Informações adicionais</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($lista as $pet){
                            echo '<tr>';
                            echo '<td>'.$pet->getNome().'</td>';
                            echo '<td>'.$pet->getTutor().'</td>';
                            echo '<td>'.$pet->getRaca().'</td>';
                            echo '<td>'.$pet->getIdade().'</td>';
                            echo '<td>'.$pet->getInfoad().'</td>';
                            echo '<td><a href="FrmPet_cadastro.php?editar&id='.$pet->getId().'">
                            <button class="btn btn-warning"> Editar <img src="icons/table_edit.png"> </button></a></td>';
                            echo '<td><a href="../controller/PetController.php?excluir&id='.$pet->getId().'">
                            <button class="btn btn-danger"> Excluir <img src="icons/table_delete.png"> </button></a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table><br/><br/>

        </div>
    
    </body>

</html>