<?php

namespace Database\Seeders;

use App\Models\Cadastro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CadastroSeeder extends Seeder
{
    public function run()
    {
        $cadastros = [
            [
                'nome_completo' => 'John Peter',
                'data_nascimento' => '1990-01-01',
                'tipo_pessoa' => 'Física',
                'cpf_cnpj' => '123.456.730-00',
                'email' => 'teste1@email.com',
                'endereco' => 'Rua Seis, 123',
                'cep' => '12345-109',
                'latitude' => 12.343585,
                'longitude' => -45.80800,
            ],
        
        ];

        foreach ($cadastros as $cadastro) {
            Cadastro::create($cadastro);
        }
    }
}
