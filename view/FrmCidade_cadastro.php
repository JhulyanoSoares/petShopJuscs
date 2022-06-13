<?php
    $action = "inserir";
    include_once '../DAO/PaisDAO.php';
    include_once '../DAO/EstadoDAO.php';
    include_once '../DAO/CidadeDAO.php';

    $nome = "";
    $estado = "";
    $pais = "";
    $cep = "";

    if(isset($_REQUEST['editar'])){
        $cidade = CidadeDAO::buscarPorId($_GET['id']);
        $nome = $cidade->getNome();
        $idEstado = $cidade->getEstado();
        $idPais = $cidade->getPais();
        $cep = $cidade->getCep();
        $action = "editar&id=".$cidade->getId();
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
            <h2 style="text-align: center;">Cadastro de cidade</h2><br/>
            <form action="../controller/CidadeController.php?<?php echo $action ?>" method="POST">
                <label>Nome: </label><input type="text" value="<?php echo $nome?>" name="nomeCidade" id="txtNomeCidade" class="form-control" placeholder="cidade" required><br/><br/>
                <label>Estado: </label>
                <select id="estado" name="estado" class="form-select">
                    <option>Selecione o estado</option>
                    <?php
                        $lista = EstadoDAO::buscar();
                        //var_dump($lista);
                        foreach($lista as $estado){
                            $selecionar = "";
                            if($idEstado == $estado->getId()){
                                $selecionar = "selected";
                            }
                            echo '<option '.$selecionar.' value="'.$estado->getId().'">
                            '.$estado->getNome().'</option>';
                        } 
                    ?>
                </select><br/><br/>
                <label>País: </label>
                <select id="pais" name="pais" class="form-select">
                    <option>Selecione o país</option>
                    <?php
                        $lista = PaisDAO::buscar();
                        //var_dump($lista);
                        foreach($lista as $pais){
                            $selecionar = "";
                            if($idPais == $pais->getId()){
                                $selecionar = "selected";
                            }
                            echo '<option '.$selecionar.' value="'.$pais->getId().'">
                            '.$pais->getNome().'</option>';
                        }
                    ?>
                </select><br/><br/>
                <label>CEP: (opcional para não brasileiros)</label>
                <input type="text" value="<?php echo $cep?>" name="CEP" id="txtCep" class="form-control" placeholder="*****-***"><br/><br/>
                <button type="reset" name="btnLimpar1" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnCadastrar1" class="btn btn-success"> Cadastrar <img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>
        
        <?php

            $lista = CidadeDAO::buscar();

        ?>
        <div class="container border">
            <table class="table">
                <thead>    
                    <tr>
                        <th>Nome</th>
                        <th>Estado</th>
                        <th>País</th>
                        <th>CEP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($lista as $cidade){
                            echo '<tr>';
                            echo '<td>'.$cidade->getNome().'</td>';
                            echo '<td>'.$cidade->getEstado()->getNome().'</td>';
                            echo '<td>'.$cidade->getPais()->getNome().'</td>';
                            echo '<td>'.$cidade->getCep().'</td>';
                            echo '<td><a href="FrmCidade_cadastro.php?editar&id='.$cidade->getId().'">
                            <button class="btn btn-warning"> Editar <img src="icons/table_edit.png"> </button></a></td>';
                            echo '<td><a href="../controller/CidadeController.php?excluir&id='.$cidade->getId().'">
                            <button class="btn btn-danger"> Excluir <img src="icons/table_delete.png"> </button></a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table><br/><br/>
        
        </div>
    
    </body>

</html>