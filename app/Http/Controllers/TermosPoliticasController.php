<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermosPoliticasController extends Controller
{
    public function termos(){
        return view('termos');
    }

    public function politicas(){
        return view('politicas');
    }
}
