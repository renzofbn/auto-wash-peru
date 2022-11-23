@extends("layout.plantilla")

@section("titulo", "Detalle Servicio - Auto Wash Perú")

@section("contenido")
    <div class="container mt-3">
        <header></header>
        <section>
            <article>
                <a href="{{ route('servicio.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <div class="card mt-3">
                    <h5 class="card-header">{{ $servicio->servicio }}</h5>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $servicio->descripcion_servicio }}
                        </p>
                        <p class="card-text">
                            {{ $servicio->precio_base}}
                        </p>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection








