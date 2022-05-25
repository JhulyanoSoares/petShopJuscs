<html>

    <header>

        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = no">

    </header>

    <body>

        <br/><br/>
        <div class="container border">
            <h2 style="text-align: center;">Agenda</h2><br/>
            <form>
                <label>horarios disponíveis</label>
                <select id="horarios" onChange="update()" name="horarios" class="form-select">
                    <option>--:--</option>
                    <option value="hora8:00">08:00</option>
                    <option value="hora10:00">10:00</option>
                    <option value="hora15:30">15:30</option>
                </select><br/>
                
                
                <a href="Informacoes_no_agendamento.html" type="button" name="btnAgendar" class="btn btn-success"> Agendar <img src="icons/accept.png"> </a><br/><br/>
            </form>
            <form>
                <label>Desmarcar horário</label>
                <input type="datetime-local" name="desmarcar" id="desmarcar" class="form-control"><br/>
                <button name="btnDesmarcar" class="btn btn-danger"> Desmarcar <img src="icons/cancel.png"> </button>
            </form>
        </div>
    
    </body>

</html>