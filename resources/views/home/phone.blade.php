@extends('layouts.panel')

@section('title','Telefone')

@section('content')

<div class="panel-body">
      
    <div class="top">
      <div class="container">
        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#modelId"> Adicionar novo telefone</a>
      </div>
    </div>

    <div class="container">

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
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
          <form action="{{ route('dashboard.createUser') }}" method="POST">
            @csrf
            <div class="form-group my-4">
             <div class="form-group">
                <label for="user_id">Escolhe um usuario:</label>
                <select class="form-control" name="user_id" id="user_id">
                  <option>Selecione um usuario</option>
                  @foreach ($users as $user)
                    <option value="{{ $user->id}}">{{ $user->name }}</option>  
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group my-4">
              <label for="name">Nome do telefone:</label>
              <input type="text" name="name" class="form-control" placeholder="Digite nome do telefone..." required>
            </div>

            <div class="form-group my-4">
              <label for="model">Model do telefone(marca):</label>
              <input type="text" name="model" class="form-control" placeholder="Digite modelo do telefone..." required>
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
@endsection