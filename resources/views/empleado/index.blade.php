@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | Empleados")

@section("contenido")
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('empleado.create') }}" class="btn btn-outline-success">
                    Nuevo Empleado
                </a>
                <div class="card mt-3">
                    @if ($empleado)
                    <h5 class="card-header">Empleados</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Apellido Paterno</th>
                                <th>Nombre</th>
                                <th colspan="3">Acción</th>
                            </tr>
                            @foreach ($empleado as $arr_cliente)
                            <tr>
                                <td>{{ $arr_cliente->ap_paterno }}</td>
                                <td>{{ $arr_cliente->nombre }}</td>
                                <td>
                                    <a href="{{ route('empleado.show', $arr_cliente) }}" class="btn btn-outline-success btn-sm">
                                        Ver más
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('empleado.edit', $arr_cliente) }}" class="btn btn-outline-primary btn-sm">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_cliente->id }}">
                                        Borrar
                                    </button>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="mc{{ $arr_cliente->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                            <form method="post" action="{{ route('empleado.destroy', $arr_cliente) }}">
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