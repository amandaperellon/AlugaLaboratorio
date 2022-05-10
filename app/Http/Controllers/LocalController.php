<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use \Carbon\Carbon;


class LocalController extends Controller{

	public function view(){

		$local = DB::select('select * from local where situacao = ?', ['Ativo']);
        
        return view("local")->with("locais", $local);
	}

	public function mostra(){
        $id = Request::route('id', '0');

        $resposta = DB::select('select * from local where id = ?',[$id]);

        $equipamento = DB::select('select * from local_equipamentos where local_id = ?', [$id]);
        
        if(empty($resposta)) {
            return "Esse local não existe";
        }
        return view("detalhesLocal")->with(["l" => $resposta[0], "equipamento" => $equipamento]);
    }

    public function novo(){
        $areas = DB::select('select * from area');
        $tipolocais = DB::select('select * from tipo_local');
        $equipamentos = DB::select('select * from equipamentos');
        return view('formularioLocal')->with(["areas" => $areas, "tipolocais" => $tipolocais, 'equipamentos' => $equipamentos]);
    }

    public function adicionar(){

        $nome = Request::input('nome');

        $tipo_local = Request::input('tipolocal');
        
        $area = Request::input('area');

        $now = Carbon::now();

        $data = $now->toDateTimeString();

        //DB::insert('insert into local values (null, ?,?,?,?,?)', [$nome, 'Ativo', $data, $tipo_local, $area]);

        $todos = Request::all();

        $qtd = 0;
        $equipamento = 0;

        foreach ($todos as $key => $value) {
            if(strpos($key, 'qtd')){
                $qtd = $value;
            }
            if(strpos($key, 'equipamento')){
                var_dump(strpos($key, 'equipamento'));
                $ocal = DB::select('select * from local where nome = ?', [$nome]);
                
                DB::insert('insert into local_equipamentos values (null, ?,?,?)', [$local[0]->id, $value, $qtd]);
            }
        }

        return redirect('/admin/local/mostra');

    }

}

?>