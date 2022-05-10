<html>
<head>
<link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Alocação de Espaço</title>
</head>
<body>
    <body>
    <div class="container">
        <h1>Listagem de Locais Cadastrados</h1>
        <a href="/admin/local/novo">
            <span class="glyphicon glyphicon-plus"></span>
            Novo
        </a>
        <br><br>
        <table class="table table-striped table-bordered table-hover">
            <?php foreach ($locais as $l): ?>
                <tr>
                    <td><?= $l->nome ?></td>
                    <td>
                        <a href="/admin/local/mostra/<?= $l->id ?>">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/admin/local/editar/<?= $l->id ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
        </div>
</html>