<?php
    $action = "inserir";
    include_once '../DAO/PaisDAO.php';
    include_once '../DAO/EstadoDAO.php';

    $nome = "";
    $uf = "";
    $pais = "";

    if(isset($_REQUEST['editar'])){
        $estado = EstadoDAO::buscarPorId($_GET['id']);
        $nome = $estado->getNome();
        $uf = $estado->getUf();
        $idPais = $estado->getPais();
        $action = "editar&id=".$estado->getId();
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
            <h2 style="text-align: center;">Cadastro de estados</h2><br/>
            <form action="../controller/EstadoController.php?<?php echo $action ?>" method="POST">
                <label>Nome: </label><input type="text" value="<?php echo $nome?>" name="nomeEstado" id="txtNomeEstado" class="form-control" placeholder="estado" required><br/><br/>
                <label>UF: </label><input type="text" value="<?php echo $uf?>" name="UF" id="txtUF" class="form-control" placeholder="UF"><br/><br/>

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
                <button type="reset" name="btnLimpar2" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnCadastrar2" class="btn btn-success"> Cadastrar <img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>
        
        <?php

            $lista = EstadoDAO::buscar();

        ?>
        <div class="container border">
            <table class="table">
                <thead>    
                    <tr>
                        <th>Nome</th>
                        <th>UF</th>
                        <th>País</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($lista as $estado){
                            echo '<tr>';
                            echo '<td>'.$estado->getNome().'</td>';
                            echo '<td>'.$estado->getUf().'</td>';
                            echo '<td>'.$estado->getPais().'</td>';
                            echo '<td><a href="FrmEstado_cadastro.php?editar&id='.$estado->getId().'">
                            <button> Editar </button></a></td>';
                            echo '<td><a href="../controller/EstadoController.php?excluir&id='.$estado->getId().'">
                            <button> Excluir </button></a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table><br/><br/>
            <button name="btnAlterar2" class="btn btn-warning"> Alterar <img src="icons/table_edit.png"> </button>
            <button name="btnRemover2" class="btn btn-danger"> Remover <img src="icons/table_delete.png"> </button>
        </div>
    
    </body>

</html>