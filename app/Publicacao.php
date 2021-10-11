<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $fillable = [
        'imagem',
        'titulo',
        'nome',
        'breve_descricao',
        'numero',
        'texto',
        'ativa'
    ];
}
