@extends('principal')
@section('conteudo')
<h3>Listagem de Locais</h3>

<div class="row text-center">
    <?php foreach ($locacao as $l): ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                <img class="card-img-top" src="res/site/images/labinfo.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?= $l->nome ?></h4>
                </div>
                <div class="card-footer">
                    <a href="/alocacao/mostra/<?= $l->id ?>" class="btn btn-primary">Mais infos.</a>
                    <a href="/alocacao/novo/<?= $l->id ?>" class="btn btn-primary">Alocar</a>
                </div>
                </div>
            </div>
    <?php endforeach ?>   
</div>
@stop