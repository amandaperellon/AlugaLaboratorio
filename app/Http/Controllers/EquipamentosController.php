<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;


class EquipamentosController extends Controller{

	public function view(){

		$equipamentos = DB::select('select * from equipamentos where situacao = ?', ['Ativo']);
        
        return view("equipamentos")->with("equipamentos", $equipamentos);
	}

	public function mostra(){
        $id = Request::route('id', '0');

        $resposta = DB::select('select * from equipamentos where id = ?',[$id]);
        
        if(empty($resposta)) {
            return "Esse equipamento não existe";
        }
        return view("detalhesEquipamentos")->with("e", $resposta[0]);
    }

    public function novo(){
        return view('formularioEquipamentos');
    }

    public function adicionar(){
        
        $nome = Request::input('nome');

        $descricao = Request::input('descricao');

        DB::insert('insert into equipamentos values (null, ?,?,?)', [$nome, 'Ativo', $descricao]);

        return redirect('/admin/equipamentos/view');
    }

}

?>