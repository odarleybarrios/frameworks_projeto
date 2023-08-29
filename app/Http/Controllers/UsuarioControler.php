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
      return Usuario::all();
   }

   public function show($id){
      return Usuario::find($id);
   }
}



