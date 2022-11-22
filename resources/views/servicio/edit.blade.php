<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <a href="{{ route('servicio.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <!-- Formulario para editar categorías -->
                <div class="card mt-3">
                    <h5 class="card-header">Editar Servicio</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('servicio.update', $servicio) }}">
                            @csrf
                            @method("put")
                            <div class="mb-3">
                                <label for="nombre_servicio" class="form-label">Nombre del Servicio</label>
                                <input type="text" class="form-control" name="nombre_servicio" id="nombre_servicio" value="{{ old('nombre_servicio', $servicio->nombre_servicio) }}" />
                                @if ($errors->first("nombre_servicio"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("nombre_servicio") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="descripcion_servicio" class="form-label">Descripcion del Servicio</label>
                                <textarea class="form-control" name="descripcion_servicio" id="descripcion_servicio" rows="4" cols="">{{ old('descripcion_servicio', $servicio->descripcion_servicio) }}</textarea>
                                @if ($errors->first("descripcion_servicio"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("descripcion_servicio") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="precio_base" class="form-label">Precio Base</label>
                                <input type="text" class="form-control" name="precio_base" id="precio_base" value="{{ old('precio_base', $servicio->precio_base) }}" />
                                @if ($errors->first("precio_base"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("precio_base") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </div>
</body>
</html>