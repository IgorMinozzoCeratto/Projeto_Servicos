<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'Funcionarios';
    protected $fillable = ['nome', 'cpf', 'telefone', 'sexo'];
}
