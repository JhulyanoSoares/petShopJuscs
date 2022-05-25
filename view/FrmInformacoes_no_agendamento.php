<html>

    <header>

        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = no">


    </header>

    <body>
        
        <br/><br/>
        <div class="container border">
            <h2 style="text-align: center;">Preenchimento de informações no agendamento</h2><br/>
            <form>
                <label>Horario marcado:</label>
                <h3>16:00 (exemplo meramente ilustrativo)</h3>
                <!--
                <input type="text" id="text">
                <script type="text/javascript">
                    function update() {
                        var select = document.getElementById('horarios');
                        var option = select.options[select.selectedIndex];
        
                        document.getElementById('text').value = option.text;
                    }
        
                    update();
                </script>
                valor selecionado na tela 'Agenda' não está aparecendo nesta tela-->
                <hr><br/><br/>
                <input  type="text" name="pesquisa" id="txtPesquisa" class="form-control"><br/>
                <button class="btn btn-primary"> Pesquisar(por CPF) <img src="icons/magnifier.png"> </button><br/><br/>
                <label>Lista de pets:</label>
                <select id="listaPets" name="listaPets" class="form-select">
                    <option>selecione o pet</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select><br/><br/>
                <label>Informe sua Senha para finalizar o agendamento</label><input type="password" id="senha" name="senha" class="form-control"><br/><br/>
                <button class="btn btn-success"> Agendar <img src="icons/accept.png"> </button>
            </form>
        </div>
    
    </body>

</html>