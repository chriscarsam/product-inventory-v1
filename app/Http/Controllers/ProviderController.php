<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index(){
        $saludo = "Darling";

        $title = 'Listado de proveedores';
        return view('providers', compact('title', 'saludo'));
    }
}
