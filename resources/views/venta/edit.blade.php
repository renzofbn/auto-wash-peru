@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | ")

@section("contenido")
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('venta.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <!-- Formulario para editar venta -->
                <div class="card mt-3">
                    <h5 class="card-header">Registrar Venta</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('venta.store') }}">
                            @csrf
                            {{-- listar servicio --}}
                            <div class="mb-3">
                                <label for="servicio" class="form-label">Servicio</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_servicio" id="id_servicio">
                                    <option value="" selected>Seleccione un servicio</option>
                                    @foreach ($servicio as $servicio)
                                    <option value="{{ $servicio['id'] }}" {{ old('servicio') == $servicio['id'] ? 'selected' : '' }}>{{ $servicio['nombre_servicio'] }} | precio: {{ $servicio['precio_base'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->first("servicio"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("servicio") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            {{-- listar cliente --}}
                            <div class="mb-3">
                                <label for="cliente" class="form-label">Cliente</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_cliente" id="id_cliente">
                                    <option value="" selected>Seleccione un cliente</option>
                                    @foreach ($cliente as $cliente)
                                    <option value="{{ $cliente['id'] }}" {{ old('cliente') == $cliente['id'] ? 'selected' : '' }}>{{ $cliente['nombre'] }} {{ $cliente['ap_paterno'] }} {{ $cliente['ap_materno'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->first("cliente"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("cliente") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            {{-- listar vehiculo --}}
                            <div class="mb-3">
                                <label for="auto" class="form-label">Auto</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_auto" id="id_auto">
                                    <option value="" selected>Seleccione un Auto</option>
                                    @foreach ($auto as $auto)
                                    <option value="{{ $auto['id'] }}" {{ old('auto') == $auto['id'] ? 'selected' : '' }}>{{ $auto['marca'] }} {{ $auto['modelo'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->first("auto"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("auto") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                
                                <label for="tipo" class="form-label">Tipo de vehiculo</label>
                                <select   class="form-select form-select-sm" aria-label=".form-select-sm example" name="tipo_autpo" id="tipo_auto">
                                    <option value="" selected>Seleccione el tipo de vehiculo</option>
                                    <option value="Auto"{{ old('tipo') == 'Auto' ? 'selected' : '' }}>Auto</option>
                                    <option value="Camioneta + S./30.00"{{ old('tipo') == 'Camioneta + S./30.00' ? 'selected' : '' }}>Camioneta + S./30.00</option>
                                    <option value="Minivan + S./70.00"{{ old('tipo') == 'Minivan + S./70.00' ? 'selected' : '' }}>Minivan + S./70.00</option>
                                    <option value="Van + S./110.00"{{ old('tipo') == 'Van + S./110.00' ? 'selected' : '' }}>Van + S./110.00</option>
                                </select>
                            </div>
                            {{-- listar empleado --}}
                            <div class="mb-3">
                                <label for="e_supervisor" class="form-label">Supervisor</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_e_supervisor" id="id_e_supervisor">
                                    <option value="" selected>Seleccione un supervisor</option>
                                    @foreach ($e_supervisor as $e_supervisor)
                                    <option value="{{ $e_supervisor['id'] }}" {{ $venta['id_e_supervisor'] == $e_supervisor['id'] ? 'selected' : '' }}>{{ $e_supervisor['nombre'] }}  {{  $venta['id_e_supervisor'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->first("e_supervisor"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("e_supervisor") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            {{-- listar empleado --}}
                            <div class="mb-3">
                                <label for="e_operario1" class="form-label">Operario 1</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_e_operario1" id="id_e_operario1">
                                    <option value="" selected>Seleccione un operario</option>
                                    @foreach ($e_operario1 as $e_operario1)
                                    <option value="{{ $e_operario1['id'] }}" {{ old('e_operario2') == $e_operario1['id'] ? 'selected' : '' }}>{{ $e_operario1['nombre'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->first("e_operario2"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("e_operario2") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            {{-- listar empleado --}}
                            <div class="mb-3">
                                <label for="e_operario2" class="form-label">Operario 2</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_e_operario2" id="id_e_operario2">
                                    <option value="" selected>Seleccione un operario</option>
                                    @foreach ($e_operario2 as $e_operario2)
                                    <option value="{{ $e_operario2['id'] }}" {{ old('e_operario2') == $e_operario2['id'] ? 'selected' : '' }}>{{ $e_operario2['nombre'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->first("e_operario2"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("e_operario2") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            {{-- listar empleado --}}
                            <div class="mb-3">
                                <label for="e_operario3" class="form-label">Operario 3</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_e_operario3" id="id_e_operario3">
                                    <option value="" selected>Seleccione un operario</option>
                                    @foreach ($e_operario3 as $e_operario3)
                                    <option value="{{ $e_operario3['id'] }}" {{ old('e_operario3') == $e_operario3['id'] ? 'selected' : '' }}>{{ $cliente['nombre'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->first("e_operario3"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("e_operario3") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="col-sm-4">
                                <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                                <input type="datetime-local" name="fecha_ingreso" id="fecha_ingreso" class="form-control" readonly value="{{ old('fecha_ingreso', $venta->fecha_ingreso) }}">
                            </div>
                            <div class="col-sm-4">
                                <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
                                <input type="datetime-local" name="fecha_entrega" id="fecha_entrega" class="form-control" value="{{ old('fecha_entrega', $venta->fecha_entrega) }}">
                            </div>     
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input type="checkbox" name="finalizado" id="finalizado" class="form-check-input" value="1" @checked(old('finalizado', $venta->finalizado))>
                                    <label for="InputFinalizada" class="form-check-label">Finalizado</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="domicilio" id="domicilio" class="form-check-input" value="1" @checked(old('domicilio', $venta->domicilio))>
                                    <label for="InputFinalizada" class="form-check-label">Entrega a Domicilio</label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="subtotal" class="form-label">Subtotal</label>
                                <input type="number" class="form-control" name="subtotal" id="subtotal" 
                                    value="{{ old('subtotal', $venta->subtotal) }}"/>
                                @if ($errors->first("subtotal"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("subtotal") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="igv" class="form-label">IGV</label>
                                <input type="number" class="form-control" name="igv" id="igv" 
                                    value="{{ old('igv', $venta->igv) }}" />
                                @if ($errors->first("igv"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("igv") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label">Total</label>
                                <input type="number" class="form-control" name="total" id="total" 
                                    value="{{ old('total', $venta->total) }}" />
                                @if ($errors->first("total"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("total") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Registrar venta</button>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection