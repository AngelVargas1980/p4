@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidotm')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo Tipo_mercancia</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('tmercancias.updatetm', $tmercancias->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required value="{{$tmercancias->id}}">
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" required value="{{$tmercancias->descripcion}}">
{{--                <label for="">Direccion</label>--}}
{{--                <input type="text" name="direccion" class="form-control" required value="{{$predios->direccion}}">--}}

                <br>
                <a href="{{ route("tmercancias.indextm") }}" class="btn btn-info">
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




