@extends('layouts.panel')

@section('title','Telefone')

@section('content')

<div class="panel-body">
      
    <div class="top">
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <p> <strong>Telefone: </strong> {{ $phone->name }} </p>
          <p> <strong>Preço: {{ $phone->price }} </strong> </p>
          <p> <strong>Modelo: {{ $phone->model }} </strong> </p>
          <p> <strong>Usuário: {{ $user->name }} </strong> </p>
        </div>
        <div class="col-lg-4">
          <form action="{{ route('dashboard.updatePhone',$phone->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="user_id">Escolhe o usuario destinado: </label>
              <select class="form-control" name="user_id" id="user_id">
                <option disabled selected>Selecione o usuario...</option>
                @foreach ($users as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-success col-12 my-3">Enviar a tutela</button>
          </form>
        </div>
      </div>
    </div>

</div>

@endsection