<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = User::all();

        return view('home.panel',compact('users'));
    }

    public function phone() {
        return view('home.phone');
    }

    public function guardianshipTransfer() {
        return view('home.guardianshipTransfer');
    }

    public function createUser(Request $request) {
        
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $verify = $user->save();

        if ($verify) {
            return redirect()
                    ->route('dashboard.index')
                    ->with('succes','Usuario adicionado com sucesso!');
        }

        return redirect()
                    ->route('dashboard.index')
                    ->with('danger','Ops! Error ao adicionar usuario.');

    }
}
