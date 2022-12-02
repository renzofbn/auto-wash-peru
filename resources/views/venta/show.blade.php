@extends("layout.plantilla")

@section("titulo", "Detalle Venta - Auto Wash Perú")

@section('links')
    <link href="/css/profile.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
@endsection

@section("contenido")
 <!-- Begin Top Author Page
    ================================================== -->
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <img  id="big-thumb" class="img-fluid" src="/gradientes/{{ rand(1, 10) }}.jpg" alt="{{ $venta->servicio->nombre_servicio }}">
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <div class="row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            <h1>{{ $venta->servicio->nombre_servicio }}</h1>
                            <hr>
                            <h5 style='font-size:22px'>Cliente</h5>
                            <span class="author-description">{{ $venta->cliente->nombre }} {{ $venta->cliente->ap_paterno }} {{ $venta->cliente->ap_materno }}</span>
                            <br><br>
                            <h5 style='font-size:22px'>Vehículo</h5>
                            <span class="author-description"><strong>Marca: </strong>{{ $venta->auto->marca }} | <strong>Modelo: </strong>{{ $venta->auto->modelo }} | <strong>Tipo: </strong>{{ $venta->mostrar_tipo_auto() }}</span>
                            <br><br>
                            <h5 style='font-size:22px'>Equipo de trabajo</h5>
                            <span class="author-description"> <strong>Cargo: {{ $venta->e_supervisor->cargo }}</strong> | {{ $venta->e_supervisor->nombre }} {{ $venta->e_supervisor->ap_paterno }} {{ $venta->e_supervisor->ap_materno }} </span><br>
                            <span class="author-description"> <strong>Cargo: {{ $venta->e_operario1->cargo }}</strong> | {{ $venta->e_operario1->nombre }} {{ $venta->e_operario1->ap_paterno }} {{ $venta->e_operario1->ap_materno }} </span><br>
                            <span class="author-description"><strong>Cargo: {{ $venta->e_operario2->cargo }}</strong> | {{ $venta->e_operario2->nombre }} {{ $venta->e_operario2->ap_paterno }} {{ $venta->e_operario2->ap_materno }} </span><br>
                            <span class="author-description"><strong>Cargo: {{ $venta->e_operario3->cargo }}</strong> | {{ $venta->e_operario3->nombre }} {{ $venta->e_operario3->ap_paterno }} {{ $venta->e_operario3->ap_materno }} </span>
                            <br><br>
                            <h5 style='font-size:22px'>Fecha</h5>
                            <span class="author-description"> <strong>Ingreso: </strong>{{ $venta->created_at }} | <strong>Entrega: </strong>{{ $venta->fecha_entrega }}</span>
                            <br><br>
                            <h5 style='font-size:20px'>Servicio Finalizado: {{ $venta->estadofinalizado() }}</h5>
                            <h5 style='font-size:20px'>Entrega a domicilio: {{ $venta->esntregaDomicilio() }}</h5>
                            <br>
                            <hr>
                            <br>
                            <label><strong>SUBTOTAL: </strong>S./{{ $venta->subtotal }} | <strong>IGV: </strong>S./{{ $venta->igv }} | <strong>TOTAL: </strong>S./{{ $venta->total }} </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 d-flex justify-content-end " >
                <a href="{{ route('venta.index') }}" class="btn btn-outline-primary me-3">
                    Regresar
                </a>
                <a href="{{ route('venta.edit', $venta) }}" class="btn btn-outline-secondary">
                    Editar
                </a>
            </div>
        </div>
        <br><br>
    </div>
    <!-- End Top Author Meta
    ================================================== -->
@endsection