@extends('layouts.panel')

@section('title','Dashboard')

@section('content')

<div class="panel-body">
      
    <div class="top">
      <div class="container">
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modelId"> Criar novo usuario</button>
      </div>
    </div>

    <div class="container">

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">email</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)    
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td> {{ $user->name }}</td> 
                  <td> {{ $user->email }}</td>
                  <td>
                    <a href="#" class="btn btn-danger">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                    <a href="#" class="btn btn-success">
                        <ion-icon name="pencil-outline"></ion-icon>
                    </a>
                </td>
                </tr>
              @endforeach
            </tbody>
          </table>

    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5>
              <div class="close" data-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                <span aria-hidden="true">&times;</span>
              </div>
          </div>
          
      <div class="modal-body mt-3">
        <div class="container-fluid">
          <form action="{{ 'dashboard.createUser' }}" method="post">

            <div class="form-group my-4">
              <label for="name">Nome:</label>
              <input type="text" name="name" class="form-control" placeholder="Digite o nome completo" required>
            </div>

            <div class="form-group my-4">
              <label for="email">E-mail:</label>
              <input type="text" name="email" class="form-control" placeholder="Digite o email do usuario" required>
            </div>

            <div class="form-group my-4">
              <label for="password">Senha:</label>
              <input type="text" name="name" class="form-control" placeholder="Digite a senha do usuario" required>
            </div>

            <div class="form-group mt-3">
              <button type="submit" class="btn btn-primary col-12">Cadastrar</button>
            </div>
          
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('#exampleModal').on('show.bs.modal', event => {
    var button = $(event.relatedTarget);
    var modal = $(this);
    // Use above variables to manipulate the DOM
    
  });
</script>

@endsection