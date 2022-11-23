@extends("layout.plantilla")

@section("titulo", "Servicios - Auto Wash Perú")

@section("contenido")
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('servicio.create') }}" class="btn btn-outline-success">
                    Nueva Servicio
                </a>
                <div class="card mt-3">
                    @if ($servicio)
                    <h5 class="card-header">Servicios</h5>
                    <div class="card-body">
                        <table class="table table-hover table-dark">
                            <tr>
                                <th>Nombre de Servicio</th>
                                <th colspan="4">Acción</th>
                            </tr>
                                @foreach ( $servicio as $arr_servicio)
                                    <tr>
                                        <td>arr_servicios</td>
                                        <td>{{ $arr_servicio->servicio }}</td>
                                        <td>
                                            <a href="{{ route('servicio.show', $arr_servicio) }}" class="btn btn-outline-success btn-sm">
                                                Ver Detalle
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('servicio.edit', $arr_servicio) }}" class="btn btn-outline-primary btn-sm">
                                                Editar
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_servicio->id }}">
                                                Borrar
                                            </button>
                                        </td>
                                        <!-- Modal -->
                                        <div class="modal fade" id="mc{{ $arr_servicio->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                    <form method="post" action="{{ route('servicio.destroy', $arr_servicio) }}">
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