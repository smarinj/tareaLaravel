<?php

namespace App\Http\Controllers\Tarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacto;

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

    public function frmContacto(){
        return view('Tarea.frmContacto');
    }

    public function Rcontacto(Request $R){
        $R->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required|numeric',
            'telefono'=>'required',
            'mail'=>'required|regex:/^.+@.+$/i'
        ],
        [
            'nombre.required'=>'El campo nombre es obligatorio',
            'apellido.required'=>'El campo apellido es obligatorio',
            'edad.required'=>'El campo edad es obligatorio',
            'edad.numeric'=>'El campo debe ser número',
            'telefono.required'=>'El campo telefono es obligatorio',
            'mail.required'=>'El campo telefono es obligatorio',
            'mail.regex'=>'El campo debe cumplir con la forma de un correo electrónico'
        ]);
        $contacto = new Contacto();

        $contacto->nombre = $R->nombre;
        $contacto->apellido = $R->apellido;
        $contacto->edad = $R->edad;
        $contacto->telefono = $R->telefono;
        $contacto->correo = $R->mail;

        $contacto->save();

        return redirect()->route('lista');

    }

    public function tblContactos(){
        $contactos = Contacto::all();
        return view('Tarea.tblContactos',['contactos'=>$contactos]);
    }

    public function frmEditContacto($id){
        $contacto = Contacto::find($id);
        return view('Tarea.frmEditContacto',['contacto'=>$contacto]);
    }

    public function actualizar(Request $req){
        $req->validate([
            'id'=>'required|numeric',
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required|numeric',
            'telefono'=>'required',
            'mail'=>'required|regex:/^.+@.+$/i'
        ],
        [
            'id.required'=>'El id es obligatorio',
            'nombre.required'=>'El campo nombre es obligatorio',
            'apellido.required'=>'El campo apellido es obligatorio',
            'edad.required'=>'El campo edad es obligatorio',
            'edad.numeric'=>'El campo debe ser número',
            'telefono.required'=>'El campo telefono es obligatorio',
            'mail.required'=>'El campo telefono es obligatorio',
            'mail.regex'=>'El campo debe cumplir con la forma de un correo electrónico'
        ]);

        $contacto = Contacto::find($req->id);

        $contacto->nombre = $req->nombre;
        $contacto->apellido = $req->apellido;
        $contacto->edad = $req->edad;
        $contacto->telefono = $req->telefono;
        $contacto->correo = $req->mail;

        $contacto->save();

        return redirect('lista');

    }

    public function eliminar($id){
        $contacto = Contacto::find($id);
        $contacto->delete();
        return back();
    }
}
