<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'Funcionarios';
    protected $fillable = ['nome', 'cpf', 'telefone', 'sexo', 'endereco_id', 'pedido_id'];

    public function endereco(){

        return $this->belongsTo(Endereco::class);

    }

    public function servico(){

        return $this->belongsTo(Servico::class);
    }
}
