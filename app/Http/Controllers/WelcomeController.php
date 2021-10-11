<?php

namespace App\Http\Controllers;

use App\Anuncio;
use App\Publicacao;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $anunciosDestaque = Anuncio::where('destaque', true)->where('ativo', true)->get();
        $anuncios = Anuncio::where('destaque', false)->where('ativo', true)->get();
        $publicacoes = Publicacao::where('ativa', true)->paginate();
        return view('welcome', compact('anuncios', 'publicacoes', 'anunciosDestaque'));
    }
}
