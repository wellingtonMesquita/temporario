@extends('layouts.adminPage')
@section('conteudo')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Publicações</h4>
                        <p class="card-description"></p>
                        <a href="{{route('publicacao.create')}}" class="btn btn-gradient-primary font-weight-bold"
                           id="add-task">Nova publicação</a>
                        <div class="table-scroll">
                            <table class="table table-striped">
                                <thead>
                                <tr class="table-inverse">
                                    <th> Imagem</th>
                                    <th> Titulo</th>
                                    <th> Telefone</th>
                                    <th> descrição</th>
                                    <th> texto</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($publicacao as $publicacaos)
                                    <tr>
                                        <th class="py-1">
                                            @if($publicacaos->imagem)
                                                <img src="{{$publicacaos->imagem}}" alt="{{$publicacaos->imagem}}"
                                                     style="max-width: 100px;"/>
                                            @endif
                                        </th>
                                        <td> {{$publicacaos->titulo}}</td>
                                        <td> {{$publicacaos->numero}}</td>
                                        <td> {{$publicacaos->breve_descricao}}</td>
                                        <td><a href="#" onclick="abrirmodal({{$publicacaos}})">ver mais</a></td>
                                        {{--                                    <input type="hidden" id="Longtext{{$index}}"
                                        value="{{$publicacaos->texto}}">--}}
                                        {{--                                    <td id="texto{{$index}}"></td>--}}
                                        <td class="text-right">
                                            <div class="dropdown-inverse dropdown open">
                                                <button
                                                    class="btn btn-inverse dropdown-toggle waves-effect waves-light "
                                                    type="button" id="dropdown-7" data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="true">Ações
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown-7"
                                                     data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item waves-light waves-effect"
                                                       href="{{route('publicacao.edit', $publicacaos->getKey())}}">Editar</a>
                                                    <form method="POST"
                                                          action="{{route('publicacao.destroy', $publicacaos->getKey())}}"
                                                          id="form-delete-{{$publicacaos->getKey()}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="dropdown-item waves-light waves-effect alert-success-cancel"
                                                                href="#" data-id="{{$publicacaos->getKey()}}">Deletar
                                                        </button>
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
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="textoModal"></div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        function abrirmodal(texto) {
            console.log(texto);
            $('#modal').modal();
            exibirDados(texto);
        }

        function exibirDados(texto) {
            $('#textoModal').html("<code>" + texto.texto + "</code>");
        }
    </script>

@endsection
