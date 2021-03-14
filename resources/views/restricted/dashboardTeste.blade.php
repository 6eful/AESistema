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
    <title>Alonso Engenharia - Dashboard</title>
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
                  <p>Dummy Heading</p>
                </div>

                <ul class="list-unstyled components">
                  <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                  <li><a href="#"><i class="fas fa-users"></i>Usuários</a></li>
                  <li><a href="#"><i class="fas fa-user-tag"></i>Clientes</a></li>
                  <li><a href="#"><i class="fas fa-briefcase"></i>Contratos</a></li>
                  <button type="button" class="btn btn-large btn-logout"><a href="#" class="fa fa-power-off fa-2x" aria-hidden="true"></a></button>
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
              <div class="content-text">
                <h1>Tik tok</h1>
                <h2>Manchester United é melhor</h2>
                <h1>CITY NÃO TEM CHAMPIONS LEAGUE</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/fontawesome.js')}}"></script>
    <script src="{{ asset('js/alonso.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
        });
      });
    </script>
  </body>
</html>
