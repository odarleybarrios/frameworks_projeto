<?php

namespace Database\Seeders;

use App\Models\Endereco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endereco::create([
            'rua'=>'Br 060',
            'cep'=>'79240000',
            'usuario_id'=>'1'


        ]);



    }
}
