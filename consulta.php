<div style="margin-top: 100px; " class="container col-md-3 col-md-offset-1 text-center">
    <form method="POST" action="processar_consulta.php">
        <div style="background-color:#668B8B; padding: 10px 30px 10px 30px;"  >
            <div class="form-group">
                <label>Mês Inicial</label>
                <select class="custom-select" name="mes_selecionado">
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
        <button class="btn btn-primary" type="submit" role="button">Consultar</a>
        </div>
    </form>    
</div>
