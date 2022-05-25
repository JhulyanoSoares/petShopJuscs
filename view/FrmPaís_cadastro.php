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
            <h2 style="text-align: center;">Cadastro de país</h2><br/>
            <form action="../controller/PaisController.php?<?php echo $action ?>" method="POST">
                <label>Nome: </label><input type="text" name="nomePais" id="txtNomePais" class="form-control" placeholder="país" required><br/><br/>
                <label>Sigla: </label><input type="text" name="siglaPais" id="txtSigla" class="form-control" placeholder="sigla"><br/><br/>
                <button type="reset" name="btnLimpar3" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnCadastrar3" class="btn btn-success"> Cadastrar<img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>
        
        <div class="container border">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sigla</th>
                    </tr>
                </thead>
            </table><br/><br/>
            <button name="btnAlterar3" class="btn btn-warning"> Alterar <img src="icons/table_edit.png"> </button>
            <button name="btnRemover3" class="btn btn-danger"> Remover <img src="icons/table_delete.png"> </button>
        </div>
    
    </body>

</html>