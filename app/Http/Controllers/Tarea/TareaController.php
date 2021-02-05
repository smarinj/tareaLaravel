<?php

namespace App\Http\Controllers\Tarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    //
    public function index(){
        return view("Tarea.index",
    [
        "mensaje"=>"Bienvenidos",
        "titulo"=>"Bienvenido"
    ]);
    }

}
