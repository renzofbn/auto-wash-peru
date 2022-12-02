@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | Venta N° $venta->id")

@section('links')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@endsection

@section("contenido")
<div class="container mt-3">
    <section>
        <article>
            <a href="{{ route('venta.index') }}" class="btn btn-outline-success">
                Regresar
            </a>
            <!-- Formulario para editar categorías -->
            <div class="card mt-3 row">
                <h5 class="card-header">Editar Venta</h5>
                <div class="card-body">
                    <form method="post" action="{{ route('venta.update', $venta) }}">
                        @csrf
                        @method("put")
                        {{-- listar cliente --}}
                        <div class="row">
                        <div class="col-sm-12 mb-3">
                            <label for="id_cliente" class="form-label">Cliente</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="id_cliente" id="id_cliente">
                                <option value="">Seleccione un cliente</option>
                                @foreach ($cliente as $cliente)
                                <option value="{{ $cliente->id }}" {{ old('id_cliente', $venta->id_cliente)==$cliente->id ? 'selected' : ''
                                    }}>{{ $cliente->nombre }} {{ $cliente->ap_paterno }} {{ $cliente->ap_materno }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->first("id_cliente"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("id_cliente") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <hr class="dropdown-divider">
                        <div class="col-sm-4 mb-3">
                            <label for="id_servicio" class="form-label">Servicio</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="id_servicio" id="id_servicio">
                                <option value=""{{ old('id_servicio', $venta->id_servicio)}}>Seleccione un servicio</option>
                                @foreach ($servicio as $servicio)
                                <option value="{{ $servicio->id }}" {{ old('id_servicio', $venta->id_servicio)==$servicio->id ? 'selected' :
                                    '' }}>{{ $servicio->nombre_servicio}}_{{ $servicio->precio_base }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first("id_servicio"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("id_servicio") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        {{-- listar vehiculo --}}
                        <div class="col-sm-4 mb-3">
                            <label for="id_auto" class="form-label">Auto</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="id_auto" id="id_auto">
                                <option selected>Seleccione un Auto</option>
                                @foreach ($auto as $auto)
                                <option value="{{ $auto->id }}" {{ old('id_auto', $venta->id_auto)==$auto->id ? 'selected' : '' }}>{{
                                    $auto->marca}} {{ $auto->modelo }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first("id_auto"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("id_auto") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="tipo_auto" class="form-label">Tipo de vehiculo</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="tipo_auto" id="tipo_auto">
                                    <option  {{ old('tipo_auto', $venta->tipo_auto) }} selected>Seleccione el tipo de vehiculo</option>
                                    <option value="0" {{ old('tipo_auto', $venta->tipo_auto)== 0 ? 'selected' : '' }}>Auto</option>
                                    <option value="1" {{ old('tipo_auto', $venta->tipo_auto)== 1 ? 'selected' : '' }}>Camioneta
                                    </option>
                                    <option value="2" {{ old('tipo_auto', $venta->tipo_auto)== 2 ? 'selected' : '' }}>Minivan
                                    </option>
                                    <option value="3" {{ old('tipo_auto', $venta->tipo_auto)== 3 ? 'selected' : '' }}>Van</option>
                            </select>
                            @if ($errors->first("tipo_auto"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("tipo_auto") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        {{-- listar empleado --}}
                        <div class="mb-3">
                            <label for="id_e_supervisor" class="form-label">Supervisor</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="id_e_supervisor" id="id_e_supervisor">
                                <option value="" selected>Seleccione un supervisor</option>
                                @foreach ($e_supervisor as $e_supervisor)
                                <option value="{{ $e_supervisor->id }}" {{ old('id_e_supervisor', $venta->id_e_supervisor)==$e_supervisor->id ?
                                    'selected' : '' }}>{{ $e_supervisor->nombre }} {{ $e_supervisor->ap_paterno}} | {{
                                    $e_supervisor->cargo }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first("id_e_supervisor"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("id_e_supervisor") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        {{-- listar empleado --}}
                        <div class="col-sm-4 mb-3">
                            <label for="id_e_operario1" class="form-label">Operario</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="id_e_operario1" id="id_e_operario1">
                                <option value="" selected>Seleccione un operario</option>
                                @foreach ($e_operario1 as $e_operario1)
                                <option value="{{ $e_operario1->id }}" {{ old('id_e_operario1', $venta->id_e_operario1)==$e_operario1->id ?
                                    'selected' : '' }}>{{ $e_operario1->nombre }} {{ $e_operario1->ap_paterno }} | {{
                                    $e_operario1->cargo }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first("id_e_operario1"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("id_e_operario1") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        {{-- listar empleado --}}
                        <div class="col-sm-4 mb-3">
                            <label for="id_e_operario2" class="form-label">Operario</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="id_e_operario2" id="id_e_operario2">
                                <option value="" selected>Seleccione un operario</option>
                                @foreach ($e_operario2 as $e_operario2)
                                <option value="{{ $e_operario2->id }}" {{ old('id_e_operario2', $venta->id_e_operario2)==$e_operario2->id ?
                                    'selected' : '' }}>{{ $e_operario2['nombre'] }} {{ $e_operario2['ap_paterno'] }} |
                                    {{ $e_operario2['cargo'] }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first("id_e_operario2"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("id_e_operario2") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        {{-- listar empleado --}}
                        <div class="col-sm-4 mb-3">
                            <label for="id_e_operario3" class="form-label">Operario</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                name="id_e_operario3" id="id_e_operario3">
                                <option value="" selected>Seleccione un operario</option>
                                @foreach ($e_operario3 as $e_operario3)
                                <option value="{{ $e_operario3->id }}" {{ old('id_e_operario3', $venta->id_e_operario3)==$e_operario3->id ?
                                    'selected' : '' }}>{{ $e_operario3['nombre'] }} {{ $e_operario3['ap_paterno'] }} |
                                    {{ $e_operario3['cargo'] }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first("id_e_operario3"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("id_e_operario3") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
                            <input type="datetime-local" name="fecha_entrega" id="fecha_entrega" class="form-control"
                                value="{{ old('fecha_entrega', $venta->fecha_entrega) }}">
                            @if ($errors->first("fecha_entrega"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("fecha_entrega") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label for="">Servicio Finalizado:</label>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="finalizado" id="finalizado1" value="1" {{ old('finalizado',$venta->finalizado) == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="finalizado1">Si</label>
                            </div>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="finalizado" id="finalizado2" value="0" {{ old('finalizado',$venta->finalizado) == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="finalizado2">No</label>
                            </div>
                            @if ($errors->first("finalizado"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("finalizado") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label for="">Entrega a domicilio:</label>
                            <div class="form-check form-check" >
                                <input class="form-check-input" type="radio" name="domicilio" id="domicilio1" value="1" {{ old('domicilio',$venta->domicilio) == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="domicilio1">Si</label>
                            </div>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="radio" name="domicilio" id="domicilio2" value="0" {{ old('domicilio',$venta->domicilio) == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="domicilio2">No</label>
                            </div>
                            @if ($errors->first("domicilio"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("domicilio") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="subtotal" class="form-label">Subtotal</label>
                            <input type="number" class="form-control" readonly="readonly" name="subtotal" id="subtotal"
                                value="{{ old('subtotal', $venta->subtotal) }}" />
                            @if ($errors->first("subtotal"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("subtotal") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="igv" class="form-label">IGV</label>
                            <input type="number" class="form-control" readonly="readonly" name="igv" id="igv"
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
                        <div class="col-sm-4 mb-3">
                            <label for="total" class="form-label">Total</label>
                            <input type="number" class="form-control" readonly="readonly" name="total" id="total"
                                value="{{ old('total', $venta->total) }}" />
                            @if ($errors->first("total"))
                            <br />
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first("total") }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <input type="hidden" name="total_venta" id="total_venta">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </article>
    </section>
</div>
<script src="{{asset('js/venta.js') }}"></script>
@endsection
