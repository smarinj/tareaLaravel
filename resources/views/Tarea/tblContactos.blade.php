@extends('layout.padre')

@section('title')
    Contactos
@endsection

@section('content')
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-striped ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Edad</th>
        <th scope="col">telefono</th>
        <th scope="col">correo</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contactos as $contacto)
            <tr>
                <th scope="row">{{$contacto->id}}</th>
                <td>{{$contacto->nombre}}</td>
                <td>{{$contacto->apellido}}</td>
                <td>{{$contacto->edad}}</td>
                <td>{{$contacto->telefono}}</td>
                <td>{{$contacto->correo}}</td>
                <td>
                    <a href="/editcontacto/{{$contacto->id}}"><i data-feather="edit-2"></i></a>
                    &nbsp;<a href="/eliminarcontacto/{{$contacto->id}}"><i data-feather="trash" style="color:red"></i></a>

                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
