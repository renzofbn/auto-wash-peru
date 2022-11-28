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
                    <h5 class="card-header">Venta Nº {{ $venta->id }}</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
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
                                    <td>{{ $venta->servicio->nombre_servicio}}</td>
                                    <td>{{ $venta->cliente->nombre}} {{ $venta->cliente->ap_paterno}} {{ $venta->cliente->ap_materno}}</td>
                                    <td>{{ $venta->auto->marca }} {{ $venta->auto->modelo }}</td>
                                    <td>{{ $venta->mostrar_tipo_auto()}}</td>
                                    <td>{{ $venta->e_supervisor->nombre }} {{ $venta->e_supervisor->ap_paterno }} {{ $venta->e_supervisor->ap_materno }}</td>
                                    <td>{{ $venta->e_operario1->nombre}} {{ $venta->e_operario1->ap_paterno}} {{ $venta->e_operario1->ap_materno}}</td>
                                    <td>{{ $venta->e_operario2->nombre}} {{ $venta->e_operario2->ap_paterno}} {{ $venta->e_operario2->ap_materno}}</td>
                                    <td>{{ $venta->e_operario3->nombre}} {{ $venta->e_operario3->ap_paterno}} {{ $venta->e_operario3->ap_materno}}</td>
                                    <td>{{ $venta->fecha_ingreso }}</td>
                                    <td>{{ $venta->fecha_entrega }}</td>
                                    <td>{{ $venta->estadofinalizado() }}</td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection