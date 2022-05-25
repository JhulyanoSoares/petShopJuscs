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
            <form>
                <label>Nome: </label><input type="text" name="nomePet" id="txtNomePet" class="form-control" required><br/><br/>
                <label>Tutor: </label><input type="text" name="tutor" id="txtTutor" class="form-control" required>
                <button name="btnBuscar" class="btn btn-primary"> Pesquisar <img src="icons/magnifier.png"> </button><br/><br/>
                <label>Raça: </label><input type="text" name="raca" id="txtRaca" class="form-control" required><br/><br/>
                <label>Idade: </label><input type="text" name="idade" id="txtIdade" class="form-control"><br/><br/>
                <label>Informações adicionais:</label>
                <textarea name=textarea id="textarea" placeholder="informações adicionais" class="form-control">

                </textarea><br/><br/>
                <button type="reset" name="btnLimpar5" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnCadastrar5" class="btn btn-success"> Cadastrar <img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>
        
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
            </table><br/><br/>
            <button name="btnAlterar5" class="btn btn-warning"> Alterar <img src="icons/table_edit.png"> </button>
            <button name="btnRemover5" class="btn btn-danger"> Remover <img src="icons/table_delete.png"> </button>
        </div>
    
    </body>

</html>