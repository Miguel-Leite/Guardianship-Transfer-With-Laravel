<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('home.panel');
    }

    public function phone() {
        return view('home.phone');
    }

    public function guardianshipTransfer() {
        return view('home.guardianshipTransfer');
    }
}
