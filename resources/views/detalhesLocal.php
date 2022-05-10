<head>
<link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Alocação de Espaço</title>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Local: <?= $l->nome ?> </h1>
        <h3>Equipamentos: <h3>
        <table class="table table-striped table-bordered table-hover">
        <th>Nome</th>
        <th>Quantidade</th>
        <?php foreach ($equipamento as $eq): 
            $nome = DB::select('select nome from equipamentos where id = ?', [$eq->equipamentos_id]);?>
                <tr>
                    <td><?= $nome[0]->nome?></td>
                    <td><?= $eq->quantidade ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>
