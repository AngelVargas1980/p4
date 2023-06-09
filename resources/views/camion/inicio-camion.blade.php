@extends('layout.plantilla')

@section('tituloPagina', 'Crud de camiones')

@section('contenidoc')

    <div class="card" xmlns="http://www.w3.org/1999/html">
        <h5 class="card-header">CAMIONES</h5>
        <h7 class="card-header">Estoy en la vista camion/inicio-camion</h7>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>

                    @endif



                    {{--                    @if (session('success'))--}}
                    {{--                        <div class="alert alert-success">--}}
                    {{--                            {{ session('success') }}--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}

                    {{--                    @if (session('error'))--}}
                    {{--                        <div class="alert alert-danger">--}}
                    {{--                            {{ session('error') }}--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}


                </div>
            </div>
            <h5 class="card-title text-center">Listado de camiones en el sistema</h5>
            <h7 class="card-title text-center">inicio/indexc</h7>
            <p>
                <a href="{{ route("camiones.createc") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo camión
                </a>

{{--                <a href="{{ route("transportes.createt") }}" class="btn btn-primary">--}}
{{--                    <span class="fas fa-user-plus"></span> Agregar nuevo transporte--}}
{{--                </a>--}}

{{--                <a href="{{ route("personas.create") }}" class="btn btn-primary">--}}
{{--                    <span class="fas fa-user-plus"></span> Agregar nuevo piloto--}}
{{--                </a>--}}

{{--                <a href="{{ route("predios.createp") }}" class="btn btn-primary">--}}
{{--                    <span class="fas fa-user-plus"></span> Agregar nuevo predio--}}
{{--                </a>--}}

            </p>
            <hr>

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad_toneladas</th>
                    <th>Transporte_codigo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->placa_camion }}</td>
                            <td>{{ $item->marca }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->modelo }}</td>
                            <td>{{ $item->capacidad_toneladas }}</td>
                            <td>{{ $item->transporte_codigo }}</td>

                            <td>
                                <form action="{{ route("camiones.editc", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route("camiones.showc", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <hr>
                <br>
                <br>


            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
                <hr>
            </div>

            </p>

        </div>
    </div>

@endsection



