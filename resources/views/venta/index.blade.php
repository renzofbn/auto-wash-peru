@extends("layout.plantilla")

@section("titulo", "Venta - Auto Wash Perú")

@section("contenido")
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('venta.create') }}" class="btn btn-outline-success">
                    Nueva Venta
                </a>
                <div class="card mt-3">
                    @if ($venta)
                    <h5 class="card-header">Ventas</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Servios</th>
                                <th>Fecha de entrega</th>
                                <th>Finalizado</th>
                                <th colspan="3">Acción</th>
                            </tr>
                            @foreach ($venta as $arr_venta)
                            <tr>
                                <td>{{ $arr_venta->servicio}}</td>
                                <td>{{ $arr_venta->fecha_entrega }}</td>
                                <td>{{ $arr_venta->finalizado }}</td>
                                <td>
                                    <a href="{{ route('venta.show', $arr_venta) }}" class="btn btn-outline-success btn-sm">
                                        Ver más
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('venta.edit', $arr_venta) }}" class="btn btn-outline-primary btn-sm">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_venta->id }}">
                                        Borrar
                                    </button>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="mc{{ $arr_venta->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Borrar registro</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Seguro de borrar el registro?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <form method="post" action="{{ route('venta.destroy', $arr_venta) }}">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="btn btn-outline-danger">Borrar</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @else
                    <div class="alert alert-danger" role="alert">
                        No hay registros
                    </div>
                    @endif
                </div>
            </article>
        </section>
    </div>
@endsection