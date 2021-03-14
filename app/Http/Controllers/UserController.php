<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use app\User;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller {
    public function index(){
      return view('restricted.modules.users.users');
    }
    public function create(){
      return view('restricted.modules.users.create');
    }
    public function store(Request $dadosHTTP){
      $validator = Validator::make($dadosHTTP->all(), [
            'password'          => 'required|max:16',
            'password_confirm'  => 'required|same:password',
            'email'             => ['required', 'unique:users', 'max:255'],
      ]);

      if ($validator->fails()) {
        return redirect('/users/create')
                    ->withErrors('As senhas informadas não conferem ou Email já cadastrado')
                    ->withInput();
      }

      $enviarHTTP = User::store($dadosHTTP->all());
      switch ($enviarHTTP['code_status']) {
        case '200':
          return redirect()->action('UserController@index')->with('mensagens', $enviarHTTP['message']);
          break;
        case '400':
          return redirect()->back()->withInput()->withErrors($enviarHTTP['message']);
          break;

        default:
          return redirect()->back()->withInput()->withErrors(['Erro ao tentar cadastrar os dados informados!']);
          break;
      }
    }

    public function show($id){
      $data = $enviarHTTP = User::getInformationbyID($id);
      return view('restricted.modules.users.edit', compact('data'));
    }

    public function update(){}


    public function destroy($id){
      $command = User::deletebyID($id);
      return back()->with('mensagens', $command['message']);
    }
}
