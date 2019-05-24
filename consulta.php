<div style="margin-top: 100px; " class="container">
    <form method="POST" action="processar_consulta.php">
        <div class="col-3 text-center" style="background-color:#668B8B; padding: 10px 30px 10px 30px; float: left; margin: 0px 20px;"  >
            <div class="form-group"> <!-- Por mês-->
                <label for="mes_selecionado" class="label-text">Mês:</label>
                <select class="form-control" required name="mes_selecionado">
                    <?php
                        $mes = [
                        'Selecione um mês',
                        'Janeiro',
                        'Fevereiro',
                        'Março',
                        'Abril',
                        'Maio',
                        'Junho',
                        'Julho',
                        'Agosto',
                        'Setembro',
                        'Outubro',
                        'Novembro',
                        'Dezembro'];
                        foreach ($mes as $key => $value) {
                            echo '<option value="'.$key.'">' .$value. '</option>';
                        }
                    ?>
                </select>
            </div>
            <input type="hidden" name="download_consulta" value="true">
            <input class="btn btn-primary" type="submit" value="Download">
        </div>
    </form>
    <form method="POST" action="processar_consulta.php">
            <div class="col-3 text-center" style="background-color:#668B8B; padding: 10px 30px 10px 30px; float: left;"  >
                <div class="form-group"> <!-- Por dia-->
                    <label for="dia_selecionado" class="label-text">Dia:</label>
                    <input class="form-control" type="date" required name="dia_selecionado">
                </div>
                <input type="hidden" name="download_consulta" value="true">
                <input class="btn btn-primary" type="submit" value="Download">
            </div>
    </form>
        
</div>
