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
                <h2>Login</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger my-1">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>        
                @endif
                @if (session('danger'))
                    <div class="alert alert-danger mb-3">
                        {{ session('danger') }}
                    </div>
                @endif
                {{-- <p class="mb-0"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
            
                <form action="{{ route('auth.auth') }}" method="post">

                    @csrf

                    <div class="form-group">
                      <label for="email"></label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                    </div>

                    <div class="form-group">
                      <label for="password"></label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
                    </div>

                    <button type="submit" class="btn col-12"> Entrar </button>
                </form>
            </div>
        </div>
    </div>

@endsection