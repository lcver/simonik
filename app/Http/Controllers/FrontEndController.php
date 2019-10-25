<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        // $front = "Halaman Depan";
        return view('app.frontend.content');
    }
}
