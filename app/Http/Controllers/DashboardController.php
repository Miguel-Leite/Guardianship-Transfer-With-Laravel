<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $logger = Auth::user();
        $users = User::all();

        return view('home.panel',compact('users','logger'));
    }

    public function signIn() {
        if (Auth::check()) {
            return redirect()->back();
        }

        return view('auth.index');
    }

    public function auth(Request $request) {
        
        $user = Auth::user();
        

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Por favor informe o seu e-mail!',
            'password.required'=>'Por favor informe a senha!'
        ]);

        if (Auth::attempt(['email' => $request->email,'password'=>$request->password])) {
            return redirect()->route('dashboard.index')->with('success',"Bem-vindo ao panel de control {$user->name}");
        } else {
            return redirect()->back()->with('danger','E-mail ou senha invalida!');
        }
    }

    public function phone() {

        $users = User::all();

        return view('home.phone',compact('users'));
    }

    public function guardianshipTransfer() {
        return view('home.guardianshipTransfer');
    }

    public function createUser(Request $request) {

        $verify = User::create([
            'email' => $request->email, 
            'name' => $request->name, 
            'phone' => $request->phone, 
            'password' => bcrypt($request->password)]);

        if ($verify) {
            return redirect()
                    ->route('dashboard.index')
                    ->with('success','Usuario adicionado com sucesso!');
        }

        return redirect()
                    ->route('dashboard.index')
                    ->with('danger','Ops! Error ao adicionar usuario.');

    }

    public function deleteUser($id) {

        $user = User::find($id);
        $user->delete();

        return redirect()
                    ->route('dashboard.index')
                    ->with('success','Registro apagado com sucesso!');
    }

    public function addPhone(Request $request) {

        $phone = new Phone();
    }
}
