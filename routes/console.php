<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('make:user', function () {
    $email    = $this->ask('Digite um e-mail');
    $name     = $this->ask('Digite o nome');
    $password = $this->secret('Digite a senha');
    
    App\Models\User::create(['email' => $email, 'name' => $name, 'password' => bcrypt($password)]);
    
    $this->info('Usuário criado com sucesso!');
})->describe('comando para criar usuario');
