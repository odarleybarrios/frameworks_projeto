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
      return view('usuario.listar')
      ->with('meusUsuarios', $usuarios);
   }


   public function show($id){
      return Usuario::find($id);
   }

   public function delete($id){
      $usuario = Usuario::find($id);
      $usuario->delete();
   }
}



