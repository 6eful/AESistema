<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/alonso.css')}}">
    <title>Alonso Engenharia - Entre</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12" id="FormLogin">
          <p>Bem-Vindo ao</p>
          <h1>Alonso Engenharia!</h1>
          <p>Faça login para acessar e gerenciar a Alonso Engenharia</p>
          <form name="FormLoginContent" method="post" action="{{ route('login.do') }}">
            @csrf

            @if($errors->all())
              @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                  {{ $error }}
                </div>
              @endforeach
            @endif

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" value="alonso@gmail.com">
              <span class="input-group-addon">
                <i class="fa fa-user" style="color:gray;"></i>
              </span>
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="insira sua senha..." minlength="8" maxlength="16" required title="8 to 16 characters">
              <span class="input-group-addon">
                <i class="fa fa-key" style="color:gray;"></i>
              </span>
              <!-- <span class="input-view">
                <i class="fas fa-eye" style="color:gray;"></i>
              </span> -->
            </div>
            <button type="submit" class="btn btn-infinity btn-lg">Entrar</button>
          </form>
        </div>
        <div class="col-lg-6 d-none d-lg-block" id="banner">
          <h1>Alonso <br>engenharia</h1>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/fontawesome.js')}}"></script>
    <script src="{{ asset('js/alonso.js')}}"></script>
  </body>
</html>
