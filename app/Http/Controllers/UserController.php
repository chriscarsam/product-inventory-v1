<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Joel', 'Ellie', 'Tess', 'Tommy', 'Bill', 'Christian', '<script>alert("Clicker")</script>'    
            ];
        }       

        $title = 'Listado de usuarios';

       // dd(compact('title','users'));

        return view('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return "Mostrar detalle del usuario: {$id} ";
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
