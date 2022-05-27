<?php
    $action = "inserir";
    include_once '../DAO/PaisDAO.php';

    $nome = "";
    $sigla = "";

    if(isset($_REQUEST['editar'])){
        $pais = PaisDAO::buscarPorId($_GET['id']);
        $nome = $pais->getNome();
        $uf = $pais->getSigla();
        $action = "editar&id=".$pais->getId();
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
            <h2 style="text-align: center;">Cadastro de país</h2><br/>
            <form action="../controller/PaisController.php?<?php echo $action ?>" method="POST">
                <label>Nome: </label><input type="text" value="<?php echo $nome?>" name="nomePais" id="txtNomePais" class="form-control" placeholder="país" required><br/><br/>
                <label>Sigla: </label><input type="text" value="<?php echo $sigla?>" name="siglaPais" id="txtSigla" class="form-control" placeholder="sigla"><br/><br/>
                <button type="reset" name="btnLimpar3" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnCadastrar3" class="btn btn-success"> Cadastrar<img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>
        
        <?php

            $lista = PaisDAO::buscar();

        ?>
        <div class="container border">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sigla</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($lista as $pais){
                            echo '<tr>';
                            echo '<td>'.$pais->getNome().'</td>';
                            echo '<td>'.$pais->getSigla().'</td>';
                            echo '<td><a href="FrmPais_cadastro.php?editar&id='.$pais->getId().'">
                            <button class="btn btn-warning"> Editar <img src="icons/table_edit.png"> </button></a></td>';
                            echo '<td><a href="../controller/PaisController.php?excluir&id='.$pais->getId().'">
                            <button class="btn btn-danger"> Excluir <img src="icons/table_delete.png"> </button></a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table><br/><br/>
        </div>
    
    </body>

</html>