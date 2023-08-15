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

}
