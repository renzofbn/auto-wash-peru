@extends("layout.plantilla")

@section("titulo", "DEtalle Venta - Auto Wash Perú")

@section("contenido")
    <div class="container mt-3">
        <header></header>
        <section>
            <article>
                <a href="{{ route('venta.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <div class="card mt-3">
                    <h5 class="card-header">{{ $venta->ap_paterno }}</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <>
                                <th scope="col">Servicio</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Auto</th>
                                <th scope="col">Tipo de Vehículo</th>
                                <th scope="col">Supervisor</th>
                                <th scope="col">Operario 1</th>
                                <th scope="col">Operario 2</th>
                                <th scope="col">Operario 3</th>
                                <th scope="col">Fecha de Ingreso</th>
                                <th scope="col">Fecha de Entrega</th>
                                <th scope="col">Finalizado</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $venta->servicio }}</td>
                                    <td>{{ $venta->cliente }}</td>
                                    <td>{{ $venta->auto }}</td>
                                    <td>{{ $venta->tipo_vehiculo }}</td>
                                    <td>{{ $venta->supervisor }}</td>
                                    <td>{{ $venta->operario1 }}</td>
                                    <td>{{ $venta->operario2 }}</td>
                                    <td>{{ $venta->operario3 }}</td>
                                    <td>{{ $venta->fecha_ingreso }}</td>
                                    <td>{{ $venta->fecha_entrega }}</td>
                                    <td>{{ $venta->finalizado }}</td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection