@extends('layouts.panel')

@section('title','Dashboard')

@section('content')

<div class="panel-body">
      
    <div class="top">
      <div class="container">
        <a href="#" class="btn btn-success float-right"> Criar novo usuario</a>
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

@endsection