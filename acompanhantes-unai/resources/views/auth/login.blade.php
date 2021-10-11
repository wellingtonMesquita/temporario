@extends('layouts.adminLoginPage')

@section('conteudo')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
      <div class="row flex-grow">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left p-5">
            <div class="brand-logo">
              <img src="{{asset('landingpage-assets/images/Playboy-logo.jpg')}}" class="img-fluid m-auto d-block">
            </div>
            <h4>Bem vindo ao Acompanhantes Unaí</h4>
            <h6 class="font-weight-light">Faça login para continuar.</h6>
            <form class="pt-3" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="E-mail"
                  name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                  placeholder="Senha" name="password">
              </div>
              <div class="mt-3">
                <button type="submit"
                  class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">ENTRAR</a>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" name="remember"> Mantenha-me logado </label>
                </div>
                <a href="{{ route('password.request') }}" class="auth-link text-black">Esqueceu sua senha?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
@endsection