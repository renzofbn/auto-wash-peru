<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio-Auto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('auto.create') }}" class="btn btn-outline-success">
                    Nuevo auto
                </a>
                <div class="card mt-3">
                    @if ($auto)
                    <h5 class="card-header">Autos</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Marca</th>
                                <th colspan="3">Acción</th>
                            </tr>
                            @foreach ($auto as $arr_auto)
                            <tr>
                                <td>{{ $arr_auto->marca }}</td>
                                <td>
                                    <a href="{{ route('auto.show', $arr_auto) }}" class="btn btn-outline-success btn-sm">
                                        Ver más
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('auto.edit', $arr_auto) }}" class="btn btn-outline-primary btn-sm">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_auto->id }}">
                                        Borrar
                                    </button>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="mc{{ $arr_auto->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                            <form method="post" action="{{ route('auto.destroy', $arr_auto) }}">
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
</body>
</html>