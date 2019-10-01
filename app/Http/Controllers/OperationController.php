<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index()
    {
        $title = 'Operaciones';
        $numbers = [400,5];
        $operations = ['suma', 'resta', 'multiplicacion', 'division'];

        return view('operations', compact('title', 'operations', 'numbers'));
    }

    public function operations($opr, $num1, $num2)
    {
        $message = "Resultado de la {$opr}:";

        switch ($opr) {
            case 'suma':
                $result = $num1 + $num2;                
                break;

            case 'resta':
                $result = $num1 - $num2;                
                break;

            case 'multiplicacion':
                $result = $num1 * $num2;                
                break;

            case 'division':
                $result = $num1 / $num2;                
                break;        
        }

        return "{$message} {$result}";
    }
  
}
