@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoc')

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        <div class="card">
            <h5 class="card-header">Agregar nuevo camion</h5>
            <h7 class="card-header">Aqui estoy en storec</h7>
            <div class="card-body">
            <p class="card-text">
            <form action="{{ route('camiones.storec') }}" class="xx" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="number" name="id" class="form-control" required>
                <label for="">Placa</label>
                <input type="text" name="placa_camion" class="form-control" required>
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required>
                <label for="">Color</label>
                <input type="text" name="color" class="form-control" required>
                <label for="">Modelo</label>
                <input type="number" name="modelo" class="form-control" required>
                <label for="">Capacidad Toneladas</label>
                <input type="number" name="capacidad_toneladas" class="form-control" required>
                <label for="">Transporte Codigo</label>
                <input type="number" name="transporte_codigo" class="form-control" required>

                <br>
                <a href="{{ route("camiones.indexc") }}" class="btn btn-info">
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


{{--SweetAlert--}}
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{--    @if(session('agregar') == 'ok')--}}
{{--        <script>--}}
{{--            Swal.fire('Saved!', '', 'success')--}}
{{--            } else if (result.isDenied) {--}}
{{--                Swal.fire('Changes are not saved', '', 'info')--}}

{{--        </script>--}}

{{--) @endif--}}


    <script>
        $('.xx').submit(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('save!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                    this.submit();


                }
            })
        });

</script>

@endsection
