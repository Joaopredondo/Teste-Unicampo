<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'tipo_pessoa',
        'cpf_cnpj',
        'email',
        'endereco',
        'cep',
        'latitude',
        'longitude',
    ];
}