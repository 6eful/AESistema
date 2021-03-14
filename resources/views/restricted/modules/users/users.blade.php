@extends('restricted.layout.dashboard')
@section('title', 'Usuários')

@section('content')

<div class="content-text">
  <div class="row">
    <div class="col"></div>
    <div class="col-md-10">
      <div class="Tableboxs">

        <H2>USUÁRIOS</h2>
        <button type="button" class="btn btn-lg btn-primary">Export <i class="fa fa-download"></i></button>
        <button type="button" class="btn btn-lg btn-success"><a href="{{ route('users.create') }}">Novo usuário <i class="fa fa-plus"></i></a></button>

        <form class="">
          <div class="form-row">
            <div class="form-group col-md-3">
              <div class="input-group">
                  <input class="form-control py-2 border-right-0 border" type="search" value="" placeholder="Digite um cliente..." id="example-search-input">
                  <span class="input-group-append">
                      <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                  </span>
              </div>
            </div>
            <div class="form-group col-md-3">
              <div class="input-group">
                <label for="status" class="lblStatus">Status:</label>
                <select class="form-control" id="status">
                  <option>All</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
            </div>
            <div class="form-group col-md-3">
              <div class="input-group datepicker">
                <label for="fromDate" class="lblFromDate">From:</label>
                <input class="form-control py-2 border-right-0 border" type="date" value="" id="fromDate">
              </div>
            </div>
            <div class="form-group col-md-3">
              <div class="input-group datepicker">
                <label for="toDate" class="lblToDate">To:</label>
                <input class="form-control py-2 border-right-0 border" type="date" value="" id="toDate">
              </div>
            </div>

          </div>
        </form>
        @if(session('mensagens'))
        <div class="alert alert-success" role="alert">
          {{ session('mensagens') }}
        </div>

        @endif
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr class="">
              <th scope="col" class="">Nome <span class="fa fa-caret-down"></span></th>
              <th scope="col" class="">Email <span class="fa fa-caret-down"></span></th>
              <th scope="col" width="85px">Ação <span class="fa fa-caret-down"></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Larry</th>
              <td>Otto@hotmail.com</td>
              <td>
                <div class="dropdown d-flex justify-content-center">
                  <span class="fa fa-ellipsis-h dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-primary" href="#"><i class="fa fa-edit text-primary"></i> Editar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="" data-toggle="modal" data-target="#modalConfirmDelete"><i class="fa fa-trash text-danger"></i> Deletar</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Jacob</th>
              <td>Thornton@hotmail.com</td>
              <td>
                <div class="dropdown d-flex justify-content-center">
                  <span class="fa fa-ellipsis-h dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-primary" href="#"><i class="fa fa-edit text-primary"></i> Editar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#modalConfirmDelete"><i class="fa fa-trash text-danger"></i> Deletar</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Jason</th>
              <td>the Bird@hotmail.com</td>
              <td>
                <div class="dropdown d-flex justify-content-center">
                  <span class="fa fa-ellipsis-h dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-primary" href="#"><i class="fa fa-edit"></i> Editar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#modalConfirmDelete"><i class="fa fa-trash"></i> Deletar</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
          <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="modalConfirmDeleteTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-capitalize" id="modalConfirmDeleteTitle"><span class="fa fa-exclamation-triangle" style="color:#FF6663;"></span> Excluir Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>O usuário <span class="font-weight-bold">Chris Evans</span> perderá permanentemente seu:</p>
                <ul>
                  <li class="">Acesso ao sistema.</li>
                  <li class="">Dados Pessoais cadastrado no sistema.</li>
                </ul>
                <p>Você têm certeza que deseja continuar com esta operação?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Excluir Cliente</button>
              </div>
            </div>
          </div>
        </div>
        </table>
        <nav aria-label="Page navigation example" style="margin-top:20px;">
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="col"></div>
  </div>
</div>

@endsection

@section('js')
$(document).ready(function() {
  $(".alert").delay(4000).slideUp(200, function() {
    $(this).alert('close');
  });

  $('.datepicker').datepicker({
    formatSubmit: 'yyyy/mm/dd',
    hiddenPrefix: 'prefix__',
    hiddenSuffix: '__suffix',
  })
});

@endsection
