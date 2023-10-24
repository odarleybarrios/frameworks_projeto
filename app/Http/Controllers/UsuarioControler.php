<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Models\Usuario;

class UsuarioControler extends Controller
{
   public function verPost(){

    $usuario = Usuario::first();

    print($usuario);

   }

   public function index(){
      $usuarios = Usuario::all();
      return view('usuario.listar')->with('meusUsuarios', $usuarios);

   }

   public function editar($id){
      $usuario = Usuario::find($id);
      return view('usuario.editar')->with('usuario', $usuario);

   }

   public function criar(){
      return view('usuario.novoUsuario');

   }

   public function salvar(Request $request){
      $usuario = new Usuario();
      $usuario->nome = $request ->nome;
      $usuario->senha = bcrypt($request ->senha) ;
      $usuario->email= $request ->email;
      $usuario->save();

      return redirect()->route('usuario.listar');

   }
   public function atualizar(Request $request, $id){
      $usuario = Usuario::find($id);
      $usuario->nome = $request ->nome;
      $usuario->senha = $request ->senha ;
      $usuario->email= $request ->email;
      $usuario->save();

      return redirect()->route('usuario.listar');


   }

   public function mostrar(){

   }

   public function delete($id){
      $usuario = Usuario::find($id);
      $usuario->delete();
   }

   public function salvarUsuario(Request $request) {
      return $request->all();
   }

   public function criarUsuario(){
      return view('usuario.novoUsuario');
   }
}



