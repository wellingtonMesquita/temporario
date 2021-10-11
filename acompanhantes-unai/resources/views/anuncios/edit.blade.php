@extends('layouts.adminPage')
@section('conteudo')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Cadastro de Anuncios </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crie um Anuncio</h4>
                        <p class="card-description"></p>
                        <form action="{{route('anuncios.update', $anuncio->getKey())}}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputName1">Nome</label>
                                <input type="text" class="form-control" name="nome" value="{{$anuncio->nome}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Numero</label>
                                <input type="text" class="form-control" name="numero" value="{{$anuncio->numero}}">
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="ativo" {{ $anuncio->ativo ? 'checked' : '' }}>
                                <label class="custom-control-label" for="defaultUnchecked" style="color: white">Exibir
                                    Anuncio</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked1"
                                    name="destaque" {{ $anuncio->destaque ? 'checked' : '' }}>
                                <label class="custom-control-label" for="defaultUnchecked1" style="color: white">
                                    Anuncio Destaque</label>
                            </div>

                            <div class="form-group">
                                <label>Foto para anuncio</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <button class="btn btn-light">voltar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection