<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'Pedidos';
    protected $fillable = ['valor_total', 'previsao_entrega', 'preco_venda', 'observacao'];
}
