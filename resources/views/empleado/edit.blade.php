@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | $empleado->nombre $empleado->ap_paterno")

@section("contenido")
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('empleado.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <!-- Formulario para editar Empleado -->
                <div class="card mt-3">
                    <h5 class="card-header">Editar Empleado</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('empleado.update', $empleado) }}">
                            @csrf
                            @method("put")
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                    value="{{ old('nombre', $empleado->nombre) }}" />
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
                                    value="{{ old('ap_paterno', $empleado->ap_paterno) }}" />
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
                                    value="{{ old('ap_materno', $empleado->ap_materno) }}" />
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
                                    value="{{ old('telefono', $empleado->telefono) }}" />
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
                                    value="{{ old('dni', $empleado->dni) }}" />
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
                                    value="{{ old('ruc', $empleado->ruc) }}" />
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
                                    value="{{ old('email', $empleado->email) }}" />
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
                                    value="{{ old('direccion', $empleado->direccion) }}" />
                                @if ($errors->first("direccion"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("direccion") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="cargo" class="form-label">Cargo</label>
                                <input type="text" class="form-control" name="cargo" id="cargo"
                                    value="{{ old('cargo', $empleado->cargo) }}" />
                                @if ($errors->first("cargo"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("cargo") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
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
@endsection