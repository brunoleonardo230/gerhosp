<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
     'idunidade',
     'nome',
     'cep',
     'logradouro',
     'complemento',
     'bairro',
     'localidade',
     'uf',
     'ibge',
     'numero'
    ];
}
