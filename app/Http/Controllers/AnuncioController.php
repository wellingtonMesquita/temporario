<?php

namespace App\Http\Controllers;

use App\Anuncio;
use App\Services\Infra\UploadServiceContract;
use App\Publicacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnuncioController extends Controller
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

        $anuncios = Anuncio::all();
        return view('anuncios.index', compact('anuncios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anuncios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caminhoDaImagem = $this->uploadService->upload($request->file('arquivo'), 'anuncios');
        $data = $request->all();
        $data['imagem'] = $caminhoDaImagem;

        Anuncio::create($data);

        return redirect()->route('anuncios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Anuncio $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show(Anuncio $anuncio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Anuncio $anuncio
     * @return \Illuminate\Http\Response
     */
    public function edit(Anuncio $anuncio)
    {

        return view('anuncios.edit', compact('anuncio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Anuncio $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anuncio $anuncio)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) {
            if ($anuncio->image && Storage::exists($anuncio->image)) {
                Storage::delete($anuncio->image);
            }

            $imagePath = $request->image->store('anuncios');
            $data['image'] = $imagePath;
        }

        $anuncio->update($data);

        return redirect()->route('anuncios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Anuncio $anuncio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anuncio $anuncio)
    {

        if ($anuncio->image && Storage::exists($anuncio->image)){
            Storage::delete($anuncio->image);
        }

        $anuncio->delete();

        return redirect()->route('anuncios.index');
    }
}
