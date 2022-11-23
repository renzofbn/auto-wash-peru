@extends("layout.plantilla")

@section("titulo", "DEtalle Cliente - Auto Wash Perú")

@section("contenido")
    <div class="container mt-3">
        <header></header>
        <section>
            <article>
                <a href="{{ route('cliente.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <div class="card mt-3">
                    <h5 class="card-header">{{ $cliente->ap_paterno }}</h5>
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
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->ap_paterno }}</td>
                                    <td>{{ $cliente->ap_materno }}</td>
                                    <td>{{ $cliente->dni }}</td>
                                    <td>{{ $cliente->ruc }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->email}}</td>
                                    <td>{{ $cliente->direccion }}</td>
                                </tr>
                            </tbody>
                          </table>
                        
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection