@extends('layout.padre')

@section('title')
  Editar Contacto
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Editar Contacto
                </div>
                <div class="card-body">
                    <form action="/contactos" method="post">
                        @method('PUT')
                        @csrf
                        <input type="hidden" value="{{$contacto->id}}" name="id"/>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" value="{{$contacto->nombre}}" id="nombre" name="nombre" placeholder="Nombre...">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" value="{{$contacto->apellido}}" id="apellido" name="apellido" placeholder="Apellido...">
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" value="{{$contacto->edad}}" id="edad" name="edad" placeholder="18">
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" value="{{$contacto->telefono}}" id="telefono" name="telefono" placeholder="Teléfono...">
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Correo</label>
                            <input type="email" class="form-control" value="{{$contacto->correo}}" id="mail" name="mail" placeholder="name@example.com">
                          </div>
                          <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
              </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif
@endsection
