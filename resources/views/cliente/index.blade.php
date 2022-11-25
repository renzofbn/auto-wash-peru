@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | Clientes")

@section("contenido")
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('cliente.create') }}" class="btn btn-outline-success">
                    Nuevo Cliente
                </a>
                <div class="card mt-3">
                    @if ($cliente)
                    <h5 class="card-header">Clientes</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Apellido Paterno</th>
                                <th>Nombre</th>
                                <th colspan="3">Acción</th>
                            </tr>
                            @foreach ($cliente as $arr_cliente)
                            <tr>
                                <td>{{ $arr_cliente->ap_paterno }}</td>
                                <td>{{ $arr_cliente->nombre }}</td>
                                <td>
                                    <a href="{{ route('cliente.show', $arr_cliente) }}" class="btn btn-outline-success btn-sm">
                                        Ver más
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('cliente.edit', $arr_cliente) }}" class="btn btn-outline-primary btn-sm">
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
                                            <form method="post" action="{{ route('cliente.destroy', $arr_cliente) }}">
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