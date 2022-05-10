@extends('principal')
@section('conteudo')

<h3>Detalhes do Local: <?= $l->nome ?> </h3>
<h5>Equipamentos: <h5>

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
@stop