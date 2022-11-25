@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | $empleado->nombre $empleado->ap_paterno")

@section("contenido")
    <div class="container mt-3">
        <header></header>
        <section>
            <article>
                <a href="{{ route('empleado.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <div class="card mt-3">
                    <h5 class="card-header">{{ $empleado->ap_paterno }}</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Ruc</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Actual Empleado</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $empleado->nombre }}</td>
                                    <td>{{ $empleado->ap_paterno }}</td>
                                    <td>{{ $empleado->ap_materno }}</td>
                                    <td>{{ $empleado->dni }}</td>
                                    <td>{{ $empleado->ruc }}</td>
                                    <td>{{ $empleado->telefono }}</td>
                                    <td>{{ $empleado->email}}</td>
                                    <td>{{ $empleado->direccion }}</td>
                                    <td>{{ $empleado->cargo }}</td>
                                    <td>{{ $empleado->esta_trabajando }}</td>
                                </tr>
                            </tbody>
                          </table>
                        
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection