@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidom')
    <div class="card">
        <h5 class="card-header">Agregar nueva mercancia</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('mercancias.storem') }}" method="POST">
                @csrf
                <label for="">Codigo</label>
                <input type="text" name="codigo" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Id_tipo_mercancia</label>
                <input type="text" name="id_tipo_mercancia" class="form-control" required>
                {{--                <label for="">Fecha</label>--}}
                {{--                <input type="date" name="fecha" class="form-control" required>--}}
                <br>
                <a href="{{ route("mercancias.indexm") }}" class="btn btn-info">
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


