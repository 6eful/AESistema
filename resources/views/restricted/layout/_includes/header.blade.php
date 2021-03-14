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
    <title>@yield('title')</title>
  </head>
  <body class="bgp-content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
              <div class="sidebar-header">
                <div class="bg-profile">
                  <picture>
                    <img src="{{asset('img/profile.jpg')}}" alt="" class="img-thumbnail rounded-circle mx-auto d-block">
                  </picture>
                  <p>{{Auth::user()->name}}</p>
                </div>

                <ul class="list-unstyled components">
                  <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                  @if(Auth::user()->accessLevel)
                  <li><a href="{{ route('users.index') }}"><i class="fas fa-users"></i>Usuários</a></li>
                  @endif
                  <li><a href="#"><i class="fas fa-user-tag"></i>Clientes</a></li>
                  <li><a href="#"><i class="fas fa-briefcase"></i>Contratos</a></li>
                  <button type="button" class="btn btn-large btn-logout"><a href="{{ route('login.logout') }}"> <i class="fa fa-power-off fa-2x" aria-hidden="true"></i></a></button>
                </ul>
              </div>
            </nav>

            <!-- Page Content -->
            <div id="content">
              <nav class="navbar navbar-expand-lg">

                  <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                  </button>

                  <picture>
                    <img src="{{asset('img/profile.jpg')}}" alt="" class="img-thumbnail rounded-circle mx-auto d-block">
                  </picture>

              </nav>
