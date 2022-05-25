<?php
    $action = "inserir";
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
                <label>Nome: </label><input type="text" name="nomeCidade" id="txtNomeCidade" class="form-control" placeholder="cidade" required><br/><br/>
                <label>Estado: </label>
                <select id="estado" name="estado" class="form-select" required>
                    <option>selecione o estado</option>
                    <?php
                        
                    ?>
                </select><br/><br/>
                <label>País: </label>
                <select id="pais" name="pais" class="form-select">
                    <option>selecione o país</option>
                    <option>Brasil</option>
                    <option>EUA</option>
                    <option>Argentina</option>
                    <option>Canadá</option>
                </select><br/><br/>
                <label>CEP: (opcional para não brasileiros)</label><input type="text" name="CEP" id="txtCep" class="form-control" placeholder="*****-***"><br/><br/>
                <button type="reset" name="btnLimpar1" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnCadastrar1" class="btn btn-success"> Cadastrar <img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>
        
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
            </table><br/><br/>
            <button name="btnAlterar1" class="btn btn-warning"> Alterar <img src="icons/table_edit.png"> </button>
            <button name="btnRemover1" class="btn btn-danger"> Remover <img src="icons/table_delete.png"> </button>
        </div>
    
    </body>

</html>