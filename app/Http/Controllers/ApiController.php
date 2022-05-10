<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locacao;

class ApiController extends Controller
{
    public function getLocacaoDia($dia) {
        if (Locacao::where('data_locacao', $dia)->exists()) {
            $locacao = Locacao::where('data_locacao', $dia)->get()->toJson(JSON_PRETTY_PRINT);
            return response($locacao, 200);
          } else {
            return response()->json([
              "message" => "Nenhuma Locacao para este dia"
            ], 404);
          }
    }
}
