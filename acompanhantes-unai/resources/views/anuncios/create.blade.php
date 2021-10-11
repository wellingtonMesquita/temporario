@extends('layouts.adminPage')
@section('conteudo')
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
                        <h4 class="card-title  margin-title">Crie um Anuncio</h4>
                        <p class="card-description"></p>
                        <form class="form" action="{{route('anuncios.store')}}" method="POST"
                            enctype="multipart/form-data" name="formName">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Nome</label>
                                <input type="text" class="form-control size-input" name="nome" placeholder="Nome">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Numero</label>
                                <input type="text" class="form-control size-input" name="numero" placeholder="Numero">
                            </div>

{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked1"--}}
{{--                                    name="destaque">--}}
{{--                                <label class="custom-control-label" for="defaultUnchecked1" style="color: white">--}}
{{--                                    Anuncio Destaque</label>--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label>Foto para anuncio</label>
                                <input type="file" name="arquivo" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info size-input-upload" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Salvar</button>
                            <button class="btn btn-light" href="{{route('anuncios.index')}}">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
