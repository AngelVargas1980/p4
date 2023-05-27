@extends('layout.plantilla')

@section("tituloPagina", "eliminar un registro")

@section('contenidom')
    <div class="card">
        <h5 class="card-header">Eliminar una mercancia!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Id_tipo_mercancia</th>

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $mercancias->codigo }}</td>
                        <td>{{ $mercancias->nombre }}</td>
                        <td>{{ $mercancias->id_tipo_mercancia }}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('mercancias.destroym', $mercancias->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("mercancias.indexm") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span>Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>Eliminar
                    </button>

                </form>
            </div>
            </p>

        </div>
    </div>

@endsection


{{--SweetAlert--}}
{{--referencia de SweetAlert  https://sweetalert2.github.io/#download--}}
{{--video de referencia https://youtu.be/D3Ww5FGa1mY--}}
{{--se instalo npm install sweetalert2 en la terminal--}}
{{--El origen del codigo esta en la visata eliminar-camion--}}

@section('alertm')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="sweetalert2.all.min.js"></script>

    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">



    <script>

        Swal.fire({
            title: 'Está seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borrar este dato!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'da click en boton eliminar!',
                    'tus datos seran eliminados.',
                    'success'
                )
                this.submit();
            }
        })




    </script>

@endsection

