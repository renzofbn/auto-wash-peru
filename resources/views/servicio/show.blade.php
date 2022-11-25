@extends("layout.plantilla")

@section('css')
    <link href="/css/index.css" rel="stylesheet">
@endsection

@section("titulo", "Auto Wash Perú | $servicio->nombre_servicio")

@section("contenido")

    <!-- Begin Top Author Page
    ================================================== -->
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <img  id="big-thumb" class="img-fluid" src="/gradientes/{{ rand(1, 10) }}.jpg" alt="{{ $servicio->nombre_servicio }}">
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">

                    <div class="row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            <h1>{{ $servicio->nombre_servicio }}</h1>
                            <span class="author-description">{{ $servicio->descripcion_servicio }}</span><br><br>
                            <br><h5 style='font-size:26px'>Precio</h5><hr>
                            <span style='font-size:20px' class="pull-right">S/ {{ $servicio->precio_base }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-md-8">
                <a href="{{ route('servicio.index') }}" class="btn btn-outline-primary">
                    Regresar
                </a>
                <a href="{{ route('servicio.edit', $servicio) }}" class="btn btn-outline-secondary">
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








