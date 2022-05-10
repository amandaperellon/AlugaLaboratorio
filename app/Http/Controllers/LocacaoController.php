<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use \Carbon\Carbon;

class LocacaoController extends Controller{

    public function aloca(){
        $locacao = DB::select('select * from local');
        
        return view("locacao")->with("locacao", $locacao);
    }

    public function mostra(){
        $id = Request::route('id', '0');

        $resposta = DB::select('select * from local where id = ?',[$id]);

        $equipamento = DB::select('select * from local_equipamentos where local_id = ?', [$id]);
        
        if(empty($resposta)) {
            return "Essa locação não existe";
        }
        return view("detalhes")->with(["l" => $resposta[0], "equipamento"=>$equipamento]);
    }

    public function novo(){
        $locacao_id = Request::route('id', '0');
        return view('formulario')->with(["locacao_id"=>$locacao_id]);
    }

    public function adiciona(){
        session_start();
        $data = Request::input("data");
        $inicio = Request::input("inicio");
        $fim = Request::input("fim");
        $locacao_id = Request::route('id', '0');
        $verificacao = false;
        $texto = '';

        if($data < date("Y-m-d")){
            $verificacao = true;
            $texto = "A data de aloacação não pode ser menor que a atual";
        }

        $locacaoDia = DB::select('select id, aula_inicio, aula_fim, data_locacao from locacao where data_locacao = ? and local_id = ?', [date("Y-m-d", strtotime($data)), $locacao_id]);
        
        if(!empty($locacaoDia)){

            $intervalo = range($inicio, $fim);

            $check = DB::select('SELECT * from locacao where (aula_inicio in ('.implode(", ", $intervalo).') or aula_fim in ('.implode(", ", $intervalo).')) and data_locacao = "'.date("Y-m-d", strtotime($data)).'" and local_id = "'.$locacao_id.'"');

            if(empty($check)){
                DB::insert("insert into locacao (local_id, usuario_id, datacadastro, data_locacao, aula_inicio, aula_fim) values (?, ? ,'".Carbon::now()."', ?, ?, ?)", [$locacao_id, $_SESSION['id'], date("Y-m-d", strtotime($data)), $inicio, $fim]);
                return 'Local alocado com sucesso!!!';
            }else{
                return "Este local já está alocado para essa data e horário!!!!";
            }
        }else{
                DB::insert("insert into locacao (local_id, usuario_id, datacadastro, data_locacao, aula_inicio, aula_fim) values (?, ? ,'".Carbon::now()."', ?, ?, ?)", [$locacao_id, $_SESSION['id'], date("Y-m-d", strtotime($data)), $inicio, $fim]);
                return 'Local alocado com sucesso!!!';
        }

    }
}

?>