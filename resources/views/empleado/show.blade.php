@extends("layout.plantilla")


@section("titulo", "empleado Wash Perú | $empleado->nombre $empleado->ap_paterno")
@section('links')
    <link href="/css/profile.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
@endsection
@section("contenido")

    <!-- Begin Top Author Page
    ================================================== -->
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img id="big-thumb" class="img-fluid" src="/gradientes/{{ rand(1, 10) }}.jpg" alt="{{ $empleado->nombre }}  ">
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <div class="row post-top-meta authorpage">
                        <div class="row post-top-meta authorpage">
                            <div class="col-md-10 col-xs-12">
                                <h1>{{ $empleado->nombre }} {{ $empleado->ap_paterno}} {{ $empleado->ap_materno}}</h1>
                                <h5 style='font-size:20px'>Email</h5>
                                <span style='font-size:16px' class="pull-right"> {{ $empleado->email }}</span>
                                <h5 style='font-size:20px'>DNI</h5>
                                <span style='font-size:16px' class="pull-right"> {{ $empleado->dni }}</span>
                                <h5 style='font-size:20px'>RUC</h5>
                                <span style='font-size:16px' class="pull-right"> {{ $empleado->ruc}}</span>
                                <h5 style='font-size:20px'>Telefono</h5>
                                <span style='font-size:16px' class="pull-right"> {{ $empleado->telefono }}</span>
                                <h5 style='font-size:20px'>Direccion</h5>
                                <span style='font-size:16px' class="pull-right"> {{ $empleado->direccion }}</span>
                                <h5 style='font-size:20px'>Cargo</h5>
                                    <span style='font-size:16px' class="pull-right"> {{ $empleado->cargo }}</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 d-flex justify-content-end">
                    <a href="{{ route('empleado.index') }}" class="btn btn-outline-primary me-3">
                        Regresar
                    </a>
                    <a href="{{ route('empleado.edit', $empleado) }}" class="btn btn-outline-secondary">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Author Meta
    ================================================== -->
@endsection

@section("scripts")
@endsection
