<?php

namespace App\Http\Controllers;

use App\Publicacao;
use App\Services\Infra\UploadServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicacaoController extends Controller
{
    protected $uploadService;

    public function __construct(UploadServiceContract $uploadServiceContract)
    {
        $this->uploadService = $uploadServiceContract;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicacao = Publicacao::all();
        return view('publicacao.index', compact('publicacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caminhoDaImagem = $this->uploadService->upload($request->file('arquivo'), 'publicacoes');
        $data = $request->all();
        $data['imagem'] = $caminhoDaImagem;

        Publicacao::create($data);

        return redirect()->route('publicacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Publicacao $publicacao
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacao $publicacao)
    {
        return view('publicacao.show', compact('publicacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Publicacao $publicacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacao $publicacao)
    {
        return view('publicacao.edit', compact('publicacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Publicacao $publicacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacao $publicacao)
    {

        $data = $request->all();
        if ($request->hasFile('imagem') && $request->imagem->isValid()) {
            if ($publicacao->imagem && Storage::exists($publicacao->imagem)) {
                Storage::delete($publicacao->imagem);
            }

            $imagePath = $request->imagem->store('publicacao');
            $data['imagem'] = $imagePath;
        }
        $publicacao->update($data);

        return redirect()->route('publicacao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Publicacao $publicacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacao $publicacao)
    {
        if ($publicacao->imagem && Storage::exists($publicacao->imagem)) {
            Storage::delete($publicacao->imagem);
        }

        $publicacao->delete();

        return redirect()->route('publicacao.index');
    }
}
