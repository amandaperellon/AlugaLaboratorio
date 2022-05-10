@extends('principal')
@section('conteudo')
<h1>Listagem de Equipamentos Cadastrados</h1>
<a href="/equipamentos/novo">
<span class="glyphicon glyphicon-plus"></span>
    Novo
</a>
<br><br>
<table class="table table-striped table-bordered table-hover">
    <?php foreach ($equipamentos as $e): ?>
        <tr>
            <td><?= $e->nome ?></td>
            <td>
                <a href="/equipamentos/mostra/<?= $e->id ?>">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
            </td>
            <td>
                <a href="/equipamentos/editar/<?= $e->id ?>">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
@stop