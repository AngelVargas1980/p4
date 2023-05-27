@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidotm')
    <div class="card">
        <h5 class="card-header">Agregar nuevo Tipo_mercancia</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('tmercancias.storetm') }}" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" required>
{{--                <label for="">Direccion</label>--}}
{{--                <input type="text" name="direccion" class="form-control" required>--}}
                {{--                <label for="">Fecha</label>--}}
                {{--                <input type="date" name="fecha" class="form-control" required>--}}
                <br>
                <a href="{{ route("tmercancias.indextm") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection


