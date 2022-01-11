<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

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

        $this->middleware('auth');
        
        $user = Auth::user();
        

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Por favor informe o seu e-mail!',
            'password.required'=>'Por favor informe a senha!'
        ]);

        if (Auth::attempt(['email' => $request->email,'password'=>$request->password])) {
            return redirect()->route('dashboard.index')->with('success',"Bem-vindo ao panel de control");
        } else {
            return redirect()->route('auth.index')->with('danger','E-mail ou senha invalida!');
        }
    }

    public function phone() {

        $users = User::all();
        $phones = Phone::all();

        return view('home.phone',compact('users','phones'));
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

        $phone->name = $request->name;
        $phone->price = $request->price;
        $phone->model = $request->model;
        $phone->user_id = $request->user_id;

        $verify=$phone->save();

        if ($verify) {
            return redirect()
                    ->route('dashboard.phone')
                    ->with('success','Telefone adicionado com sucesso!');
        }

        return redirect()
                    ->route('dashboard.phone')
                    ->with('danger','Ops! Error ao adicionar o telefone.');

    }

    public function deletePhone($id) {

        $phone = Phone::find($id);

        $phone->delete();

        return redirect()
                    ->route('dashboard.phone')
                    ->with('success','Registro de telefone apagado com sucesso!');
    }

    public function logout() {
        Session::flush();
        
        Auth::logout();

        return redirect()->route('auth.index');
    }
}
