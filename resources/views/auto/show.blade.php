@extends("layout.plantilla")

@section("titulo", "Detalle Auto - Auto Wash Perú")

@section("contenido")
    <div class="container mt-3">
        <header></header>
        <section>
            <article>
                <a href="{{ route('auto.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <div class="card mt-3">
                    <h5 class="card-header">{{ $auto->marca }}</h5>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $auto->modelo }}
                        </p>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection