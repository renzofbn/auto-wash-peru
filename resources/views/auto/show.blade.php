@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | $auto->marca $auto->modelo")

@section("contenido")

    <!-- Begin Top Author Page
    ================================================== -->
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <img  id="big-thumb" class="img-fluid" src="/gradientes/{{ rand(1, 10) }}.jpg" alt="{{ $auto->marca }}">
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">

                    <div class="row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            <h1>{{ $auto->marca }}<<br><h5 style='font-size:20px'>Modelo: </h5>
                            
                            <span class="pull-right">{{ $auto->modelo }}</span><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-md-8">
                <a href="{{ route('auto.index') }}" class="btn btn-outline-primary">
                    Regresar
                </a>
                <a href="{{ route('auto.edit', $auto) }}" class="btn btn-outline-secondary">
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