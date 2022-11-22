<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-3">
        <section>
            <article>
                <a href="{{ route('cliente.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <!-- Formulario para registrar Cliente -->
                <div class="card mt-3">
                    <h5 class="card-header">Registrar Cliente</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('cliente.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                    value="{{ old('nombre', $cliente->nombre) }}" />
                                @if ($errors->first("nombre"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("nombre") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="ap_paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="ap_paterno" id="ap_paterno"
                                    value="{{ old('ap_paterno', $cliente->ap_paterno) }}" />
                                @if ($errors->first("ap_paterno"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("ap_paterno") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="ap_materno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="ap_materno" id="ap_materno"
                                    value="{{ old('ap_materno', $cliente->ap_materno) }}" />
                                @if ($errors->first("ap_materno"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("ap_materno") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="number" class="form-control" name="telefono" id="telefono"
                                    value="{{ old('telefono', $cliente->telefono) }}" />
                                @if ($errors->first("telefono"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("telefono") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="number" class="form-control" name="dni" id="dni"
                                    value="{{ old('dni', $cliente->dni) }}" />
                                @if ($errors->first("dni"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("dni") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="ruc" class="form-label">RUC</label>
                                <input type="number" class="form-control" name="ruc" id="ruc"
                                    value="{{ old('ruc', $cliente->ruc) }}" />
                                @if ($errors->first("ruc"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("ruc") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email', $cliente->email) }}" />
                                @if ($errors->first("email"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("email") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="direccion" id="direccion"
                                    value="{{ old('direccion', $cliente->direccion) }}" />
                                @if ($errors->first("direccion"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("direccion") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Registrar Cliente</button>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </div>
</body>

</html>