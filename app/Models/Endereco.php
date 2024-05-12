<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'Enderecos';
    protected $fillable = ['cidade', 'rua', 'bairro', 'estado', 'cep'];
}
