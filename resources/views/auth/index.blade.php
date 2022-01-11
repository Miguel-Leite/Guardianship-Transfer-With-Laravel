@extends('layouts.app')

@section('title','Welcome!')

@section('content')
    
    <div class="welcome-content">
        <div class="row">
            <div class="col-lg-7">

                <h1>
                    Seja Bem-vindo a <span>guardianship transfer</span>
                </h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, rerum reiciendis. Ut nisi deleniti quis minus odio asperiores impedit ratione. Mollitia velit quae soluta in cum eligendi asperiores hic culpa.
                </p>
                <a href="{{ route('auth.index') }}" class="btn"> Saber mais </a>
            </div>
            <div class="col-lg-5">
                <h2>Registra-se</h2>
                {{-- <p class="mb-0"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
            
                <form action="{{ route('dashboard.index') }}" method="get">
                    <div class="form-group">
                      <label for="name"></label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Digite os seu nome comleto">
                    </div>

                    <div class="form-group">
                      <label for="email"></label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="Digite um e-mail valido">
                    </div>

                    <div class="form-group">
                      <label for="password"></label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Digite uma senha segura">
                    </div>

                    <button type="submit" class="btn col-12"> Entrar </button>
                </form>
            </div>
        </div>
    </div>

@endsection