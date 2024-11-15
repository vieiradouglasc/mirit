<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome_completo',
        'cpf',
        'data_aniversario',
        'email',
        'telefone',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cep',
        'cidade',
        'estado',
    ];
}
