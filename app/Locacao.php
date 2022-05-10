<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{

    protected $table = "locacao";

    protected $fillable = [
        'local_id', 'usuario_id', 'datacadastro',"data_locacao", "aula_inicio", "aula_fim"

    ];

    
}
