<html>
    <head>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Alocação de Espaço</title>
    </head>
    <body>
        <h1>Cadastro de Local</h1>

        <form action='/admin/local/adicionar'>
            <label>Nome:</label>
            <input name='nome' id='nome' type='text'>
            <br><br>
            <label>Tipo de Local:</label>
            <select name="tipolocal">
              <?php  foreach($tipolocais as $tipolocal): ?>
                <option value="<?=$tipolocal->id?>"><?=$tipolocal->nome?></option>
                <?php endforeach; ?>
            </select>
            <br> <br>
            <label>Área:</label>
            <select name="area">
              <?php  foreach($areas as $area): ?>
                <option value="<?=$area->id?>"><?=$area->nome?></option>
                <?php endforeach; ?>
            </select>
            <br> <br>
            <button name="adicionarEquipamento" id="adicionarEquipamento">Adicionar Equipamento</button>
            <div class="equipamentos" id="equipamentos">
                <div class="clone">
                <label>Equipamentos:</label>
                <select name="equipamento">
                  <?php  foreach($equipamentos as $equipamento): ?>
                    <option value="<?=$equipamento->id?>" name='equipamento_local_0_equipamento_id'><?=$equipamento->nome?></option>
                    <?php endforeach; ?>
                </select>
                <br><br>
                <label>Quantidade:</label>
                <input name='equipamento_local_0_qtd' type='number'>
                </div>
            </div>
            <br><br>
            <button type='submit'>Cadastrar</button>
        </form>
    </body>

</html>

<script type="text/javascript">
    $(document).ready(function(){
        var campo = $('.clone:first');
        var botaoAdicionar = $('#adicionarEquipamento');
        var area = $('#equipamentos');
        var x = 0;
        
        $(botaoAdicionar).click(function(e){
            e.preventDefault();
            var newbloco = campo.clone();
            novoselect = newbloco.find("select");
            novoinput = newbloco.find("input");
            countSelect = $('.clone').length;
            countInput = novoinput.length;
            novoselect.attr('name', "equipamento_local_"+countSelect+"_equipamento_id");
            novoinput.attr('name', "equipamento_local_"+countSelect+"_qtd");
            newbloco.appendTo(area);
        })
    });
        
</script>