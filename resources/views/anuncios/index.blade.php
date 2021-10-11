@extends('layouts.adminPage')
@section('conteudo')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Anuncios</h4>
                    <p class="card-description"></p>
                    <a href="{{route('anuncios.create')}}" class="btn btn-gradient-primary font-weight-bold"
                        id="add-task">Novo Anuncio</a>
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-inverse">
                                <th> Imagem</th>
                                <th> Nome</th>
                                <th> Ativo</th>
                                <th> Destaque</th>
                                <th> Telefone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($anuncios as $anuncio)
                            <tr>
                                <th class="py-1">
                                    <img src="{{ $anuncio->imagem }}" alt="{{$anuncio->imagem}}"
                                        style="max-width: 100px;" />
                                </th>
                                <td> {{$anuncio->nome}}</td>
                                <td> {!!$anuncio->ativo_formatado!!}</td>
                                <td> {!! $anuncio->destaque_formatado!!}</td>
                                <td> {{$anuncio->numero}}</td>
                                <td class="text-right">
                                    <div class="dropdown-inverse dropdown open">
                                        <button class="btn btn-inverse dropdown-toggle waves-effect waves-light "
                                            type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="true">Ações</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-7"
                                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item waves-light waves-effect"
                                                href="{{route('anuncios.edit', $anuncio->getKey())}}">Editar</a>
                                            <form method="POST"
                                                action="{{route('anuncios.destroy', $anuncio->getKey())}}"
                                                id="form-delete-{{$anuncio->getKey()}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="dropdown-item waves-light waves-effect alert-success-cancel"
                                                    href="#" data-id="{{$anuncio->getKey()}}">Deletar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
