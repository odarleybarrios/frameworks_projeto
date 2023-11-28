<?php

namespace Database\Seeders;


use App\Models\Endereco;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endereco::create([
            'rua'=>'Casa Ouro Preto',
            'cep' => '3423432',
            'usuario_id'=>1
        ]);
    }
}
