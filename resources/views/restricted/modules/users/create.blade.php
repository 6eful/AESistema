@extends('restricted.layout.dashboard')
@section('title', 'Usuários')

@section('content')
<div class="content-text">
  <div class="row">
    <div class="col"></div>
    <div class="col-md-10">
      <div class="Formboxs">
        <h2>Criar novo usuário ao Alonso Engenharia</h2>
        <h3>Preencha os campos abaixo para o cadastro de um novo usuário no sistema.</h3>
        <div class="alert alert-info" role="alert">
          <h4 class="alert-heading font-weight-bold">ATENÇÃO!</h4>
          <p>Usuários terão acesso as seguintes funcionalidades do sistema:<p>
          <ul>
            <li>Cadastro e edição de clientes.</li>
            <li>Visualizar contratos atrelados aos clientes.</li>
            <li>Cadastro e edição de contratos.</li>
            <li class="text-danger font-weight-bold">A aréa de cadastro e edição de usuário é estritamente proibido para usuários comuns do sistema.</li>
          </ul>
        </div>
        @if($errors->all())
          @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
              {{ $error }}
            </div>
          @endforeach
        @endif
        <form method="post" action="{{ route('users.store') }}">
          @include('restricted.modules.users._form')

          <div>
            <input type="reset" class="btn btn-lg btn-light float-md-left" value="Reset All">
            <button type="submit" class="btn btn-lg btn-primary float-md-right">Finalizar <span class="fa fa-check-circle"></span></button>
          </div>

        </form>
      </div>
    </div>
    <div class="col"></div>
  </div>
</div>
@endsection
