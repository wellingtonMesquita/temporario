@extends('layouts.landingpage')
@section('conteudo')


{{--    <section id="anuncios">--}}
{{--        <div class="container-fluid p-sm-0">--}}
{{--            <div class="row featured-post-slider">--}}
{{--                @foreach ($anuncios as $anuncio)--}}
{{--                    <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">--}}
{{--                        <article class="card bg-dark text-center text-white border-0 rounded-0 card-position">--}}
{{--                            <img class="card-img rounded-0 img-fluid w-100 img-size" src="{{ $anuncio->imagem }}"--}}
{{--                                 alt="post-thumb">--}}
{{--                            <div class="card-img-overlay">--}}
{{--                                <div class="card-content">--}}
{{--                                    <a class="btn btn-outline-light"--}}
{{--                                       href="https://api.whatsapp.com/send?phone={{$anuncio->numero}}">--}}
{{--                                        {{$anuncio->numero}}</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="https://api.whatsapp.com/send?phone=+5561996349453&text=OL%C3%81%20GOSTARIA%20DE%20FAZER%20O%20MEU%20AN%C3%9ANCIO%20NO%20SITE%20WWW.ACOMPANHANTESUNAI.COM.BR."
                    class="style-link">
                    <img class="img-fluid m-auto d-block"
                        src="{{asset('landingpage-assets/images/Faca-seu-anuncio.gif')}}" alt="post-thumb">
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h4 class="title yellow"><i class="material-icons star-left yellow">grade</i>Estrelas<i
                        class="material-icons star-right yellow">grade</i>
                </h4>
            </div>
        </div>
    </div>
</section>

<!-- blog post -->
<section class="section" id="publicacoes">
    <div class="container">
        <div class="row masonry-container">
            @foreach ($publicacoes as $publicacao)
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="{{$publicacao->imagem}}" alt="post-thumb">
                    <p class="text-uppercase mb-2 text-white">{{ $publicacao->nome }}</p>
                    <h4 class="title-border"><a class="text-dark"
                            href="{{route('perfil',$publicacao->getKey())}}">{{ $publicacao->titulo }}</a>
                    </h4>
                    <p class="text-white">{{ $publicacao->breve_descricao }}</p>
                    <a href="https://api.whatsapp.com/send?phone={{ $publicacao->numero }}&text=Ol%C3%A1,%20{{$publicacao->titulo}}%20tudo%20bem%20?%20Peguei%20seu%20contato%20no%20site%20ACOMPANHANTES%20UNAI%20(https://acompanhantesunai.com).%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20seu%20atendimento.)"
                        class="btn whats-number">{{ $publicacao->numero }}</a>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /blog post -->

<section>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h4 class="title yellow"><i class="material-icons star-left yellow">grade</i>Anúncio<i
                        class="material-icons star-right yellow">grade</i>
                </h4>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-sm-0">
        <div class="row">
            @foreach($anuncios as $anuncio)
            <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
                <article class="card bg-dark text-center text-white border-0 rounded-0">
                    <img class="card-img rounded-0 img-fluid w-100" src="{{ $anuncios->first()->imagem }}"
                        alt="post-thumb">
                    <div class="card-img-overlay">
                        <div class="card-content">
                            <a class="btn btn-outline-light"
                                href="https://api.whatsapp.com/send?phone={{$anuncio->numero}}&text=OL%C3%81%20GOSTARIA%20DE%20FAZER%20O%20MEU%20AN%C3%9ANCIO%20NO%20SITE%20WWW.ACOMPANHANTESUNAI.COM.BR.">
                                {{$anuncio->numero}}</a>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection