<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use \Carbon\Carbon;

class UsuarioController extends Controller{

    public function login()
    {
        return view('login');
    }

    public function verificalogin()
    {

        $usuario = Request::input('usuario');
        $senha = Request::input('senha');

        $verificacao = DB::select('select * from usuario where email = ?  and senha = ?', [$usuario, $senha]);

        if(empty($verificacao)){
            $resposta = 'Usuário ou Senha Incorretos';
            return view('login')->with('resposta', $resposta);
        }

        session_start();
        $_SESSION['id'] = $verificacao[0]->id;

        if($verificacao[0]->nivel == 1){
            return redirect('/alocacao');
        }else{
            return view('dashboard');
        }

    }

    public function novo()
    {
        return view('cadastro');
    }

    public function adicionar()
    {
        $nome = Request::input('nome');

        $senha = Request::input('senha');

        $email = Request::input('email');

        $now = Carbon::now();

        $data = $now->toDateTimeString();

        $verificacao = DB::select('select * from usuario where email = ?', [$email]);

        if(!empty($verificacao)){
             $resposta = 'Email já cadastrado';
            return view('cadastro')->with('resposta', $resposta);
        }

        DB::insert('insert into usuario values (null, ?,?,?,?,?,?)', [$nome, $email, $senha, 'Ativo', $data, '1']);

        return view('login');
    }

    public function dashboard()
    {
        return view('dashoard');
    }
}

?>