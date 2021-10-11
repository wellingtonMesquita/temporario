@extends('layouts.adminPage')
@section('conteudo')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"></h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Altere uma publicação</h4>
                            <p class="card-description"></p>
                            <form action="{{route('publicacao.update', $publicacao->getKey())}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')

                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label for="exampleInputName1">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="{{$publicacao->nome}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" value="{{$publicacao->titulo}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Numero</label>
                                    <input type="text" class="form-control" name="numero" value="{{$publicacao->numero}}">
                                </div>

                                <div class="form-group">
                                    <label>Alterar foto perfil</label>
                                    <input type="file" name="imagem" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                               placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>

                                <textarea id="summernote" name="texto">{!! $publicacao->texto !!}</textarea>

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
