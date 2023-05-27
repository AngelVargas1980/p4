@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidom')
    <div class="card">
        <h5 class="card-header">Actualizar nueva mercancia</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('mercancias.updatem', $mercancias->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Codigo</label>
                <input type="text" name="codigo" class="form-control" required value="{{$mercancias->codigo}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$mercancias->nombre}}">
                <label for="">Id_tipo_mercancia</label>
                <input type="text" name="id_tipo_mercancia" class="form-control" required value="{{$mercancias->id_tipo_mercancia}}">

                <br>
                <a href="{{ route("mercancias.indexm") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span>  Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection




