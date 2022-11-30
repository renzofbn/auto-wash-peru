@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | $cliente->nombre $cliente->ap_paterno")
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
                    <img  id="big-thumb" class="img-fluid" src="/gradientes/{{ rand(1, 10) }}.jpg" alt="{{ $cliente->marca }}">
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">

                    <div class="row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            <h1>{{ $cliente->nombre }} {{ $cliente->ap_paterno}} {{ $cliente->ap_materno}}</h1>
                            <h5 style='font-size:20px'>Email</h5>
                            <span style='font-size:16px' class="pull-right"> {{ $cliente->email }}</span>
                            <h5 style='font-size:20px'>DNI</h5>
                            <span style='font-size:16px' class="pull-right"> {{ $cliente->dni }}</span>
                            <h5 style='font-size:20px'>RUC</h5>
                            <span style='font-size:16px' class="pull-right"> {{ $cliente->ruc}}</span>
                            <h5 style='font-size:20px'>Telefono</h5>
                            <span style='font-size:16px' class="pull-right"> {{ $cliente->telefono }}</span>
                            <h5 style='font-size:20px'>Direccion</h5>
                            <span style='font-size:16px' class="pull-right"> {{ $cliente->direccion }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('cliente.index') }}" class="btn btn-outline-primary me-3">
                    Regresar
                </a>
                <a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-outline-secondary">
                    Editar
                </a>
            </div>
        </div>
    </div>
    <!-- End Top Author Meta
    ================================================== -->
@endsection

@section("scripts")
@endsection
