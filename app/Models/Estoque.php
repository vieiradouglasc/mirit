<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome_produto',
        'descricao',
        'quantidade',
        'valor',
        'categoria',
        'fonecedor_id'
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
