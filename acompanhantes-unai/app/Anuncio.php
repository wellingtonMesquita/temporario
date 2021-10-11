<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable = [
        'nome',
        'numero',
        'imagem',
        'anuncio',
        'destaque',
        'ativo'
    ];

    public function getAtivoFormatadoAttribute()
    {
        return $this->ativo ? '<label class="badge badge-success">Ativo</label>' : '<label class="badge badge-danger">Inativo</label>';
    }

    public function getDestaqueFormatadoAttribute()
    {
        return $this->destaque ? '<label class="badge badge-warning">Destaque</label>' : '<label class="badge badge-danger">Sem Destaque</label>';
    }
}
