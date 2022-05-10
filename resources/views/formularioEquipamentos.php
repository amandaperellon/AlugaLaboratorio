<html>
    <head>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Alocação de Espaço</title>
    </head>
    <body>
        <h1>Cadastro de Equipamentos</h1>

        <form action='/admin/equipamentos/adicionar'>
            <label>Nome:</label>
            <input name='nome' id='nome' type='text'>
            <br><br>
            <label>Descricao:</label>
            <input name='descricao' id='descricao' type='text'>
            <br> <br>
            <button type='submit'>Cadastrar</button>
        </form>
    </body>

</html>