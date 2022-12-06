@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | Empleados")
@section('links')
    <link href="css/custom_bootstrap.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
@endsection
@section("contenido")
<div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">Empleados </h1>
            <p class="lead">
               Lista de Empleados de la empresa Auto Wash Perú
            </p>
        </div>
        <!-- End Site Title
        ================================================== -->

        <!-- Begin Featured
        ================================================== -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Empleados | </span></h2>
            </div>
            <div class="card-columns listfeaturedtag">
                
            @if ($empleado)
                @foreach ( $empleado as $arr_empleado)
                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="{{ route('empleado.show', $arr_empleado) }}">
                                <div class="thumbnail" style="background-image:url(/gradientes/{{ rand(1, 10) }}.jpg)">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="{{ route('empleado.show', $arr_empleado) }}">{{ $arr_empleado->nombre }}</a></h2>
                                <h4 class="card-text">{{ $arr_empleado->ap_paterno }} {{ $arr_empleado->ap_materno }}</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                        <a href="#"><img class="author-thumb" src="assets/empleado.png" alt="Autor"></a>
                                        </span>
                                        <span class="author-meta">
                                        <span class="post-name"><a href="#">Empleado Nº {{ $arr_empleado->id }}</a></span><br/>
                                        <span class="post-date">{{ $arr_empleado->email }}</span>
                                        </span>
                                        <span class="btn-eliminar">
                                            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_empleado->id }}">
                                                <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_empleado->id }}"></i>
                                            </button>
                                            <div class="modal fade" id="mc{{ $arr_empleado->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Borrar registro</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ¿Seguro de borrar el registro?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <form method="post" action="{{ route('empleado.destroy', $arr_empleado) }}">
                                                                @csrf
                                                                @method("delete")
                                                                <button type="submit" class="btn btn-outline-danger">Borrar</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
                @endforeach
            @else
            <div class="alert alert-danger" role="alert">
                No hay registros
            </div>
            @endif  
            </div>
        </section>
        <!-- End Featured
        ================================================== -->

    </div>
    @endsection
@section("scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
@endsection
