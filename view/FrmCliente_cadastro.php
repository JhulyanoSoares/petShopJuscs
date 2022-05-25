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
            <form>
                <label>Nome completo: </label><input type="text" name="nomeCliente" id="txtNomeCliente" class="form-control" placeholder="Nome e Sobrenome ..." required><br/><br/>
                <label>Nacionalidade: </label><input type="text" name="nacionalidade" id="txtNacionalidade" class="form-control" required><br/><br/>
                <label>CPF e/ou passaporte: </label><input type="text" name="cpf" id="txtCpf" class="form-control" placeholder="***.***.***-**" required><br/><br/>
                <label>Email: </label><input type="email" name="email" id="txtEmail" class="form-control" placeholder="exemplo@exemplo.com"><br/><br/>
                <label>Telefone: </label><input type="number" name="telefone" id="txtTelefone" class="form-control" placeholder="(**)*****-****"><br/><br/>
                <label>Rua: </label><input type="text" name="rua" id="txtRua" class="form-control" required><br/>
                <label>Número: </label><input type="number" name="numero" id="txtNumero" class="form-control" required><br/><br/>
                <label>Cidade: </label>
                <select id="cidade" name="cidade" class="form-select" required>
                    <option>selecione a cidade</option>
                    <option>Porto Alegre</option>
                    <option>Alvorada</option>
                    <option>Viamão</option>
                </select><br/><br/>
                <label>Complemento: </label><input type="text" name="complemento" id="txtComplemento" class="form-control"><br/><br/>
                <a href="Pet_cadastro.html" type="button" name="btnCadastreOSeuPet" class="btn btn-dark"> Cadastre o seu pet <img src="icons/add.png"> </a><br/><br/>
                <button type="reset" name="btnLimpar4" class="btn btn-info"> Limpar <img src="icons/application_form.png"> </button>
                <button type="submit" name="btnSalvar" class="btn btn-success"> Salvar <img src="icons/accept.png"> </button>
            </form>
        </div><br/><br/><br/>  
        
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
                        <th>Número</th>
                        <th>Cidade</th>
                        <th>Complemento</th>
                    </tr>
                </thead>
            </table><br/><br/>
            <button name="btnAlterar4" class="btn btn-warning"> Alterar <img src="icons/table_edit.png"> </button>
            <button name="btnRemover4" class="btn btn-danger"> Remover <img src="icons/table_delete.png"> </button>
        </div>
    
    </body>

</html>