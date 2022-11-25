@extends("layout.plantilla")

@section("css")
<link href="css/index.css" rel="stylesheet">
<link href="css/custom_bootstrap.css" rel="stylesheet">
@endsection

@section("titulo", "Servicios - Auto Wash Perú")

@section("contenido")
<div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">Servicios en Auto Wash Perú</h1>
            <p class="lead">
               Vista de los servicios que ofrecemos en Auto Wash Perú
            </p>

        </div>
        <!-- End Site Title
        ================================================== -->

        <!-- Begin Featured
        ================================================== -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Servicios | </span></h2>
            </div>
            <div class="card-columns listfeaturedtag">
                
            @if ($servicio)
                @foreach ( $servicio as $arr_servicio)
                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="{{ route('servicio.show', $arr_servicio) }}">
                                <div class="thumbnail" style="background-image:url(/gradientes/{{ rand(1, 10) }}.jpg)">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="{{ route('servicio.show', $arr_servicio) }}">{{ $arr_servicio->nombre_servicio }}</a></h2>
                                <h4 class="card-text">{{ $arr_servicio->descripcion_servicio }}</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                            <span class="meta-footer-thumb">
                            <a href="#"><img class="author-thumb" src="assets/default_profile.png" alt="Autor"></a>
                            </span>
                            <span class="author-meta">
                            <span class="post-name"><a href="#">Autor</a></span><br/>
                            <span class="post-date">{{ $arr_servicio->created_at }}</span>
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
