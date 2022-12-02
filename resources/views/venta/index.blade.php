@extends("layout.plantilla")

@section("titulo", "Venta - Auto Wash Perú")

@section('links')
    <link href="css/custom_bootstrap.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
@endsection

@section("contenido")
<div class="container">
    <div class="mainheading">
        <h1 class="sitetitle">Ventas en Auto Wash Perú</h1>
        <p class="lead">
           Vista de las Ventas realizadas
        </p>
    </div>
    <!-- End Site Title
    ================================================== -->

    <!-- Begin Featured
    ================================================== -->
    <section class="featured-posts">
        <div class="section-title">
            <h2><span>Ventas | </span></h2>
        </div>
        <div class="card-columns listfeaturedtag">
            
        @if ($venta)
            @foreach ( $venta as $arr_venta)
            <!-- begin post -->
            <div class="card">
                <div class="row">
                    <div class="col-md-5 wrapthumbnail">
                        <a href="{{ route('venta.show', $arr_venta) }}">
                            <div class="thumbnail" style="background-image:url(/gradientes/{{ rand(1, 10) }}.jpg)">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="card-block">
                            <h2 class="card-title"><a href="{{ route('venta.show', $arr_venta) }}">{{ $arr_venta->servicio->nombre_servicio }}</a></h2>
                            <h4 class="card-text">Finalizado: {{ $arr_venta->estadofinalizado() }} </h4>
                            <h4 class="card-text">A Domicilio: {{ $arr_venta->esntregaDomicilio() }} </h4>
                            <div class="metafooter">
                                <div class="wrapfooter">
                                    <span class="meta-footer-thumb">
                                    <a href="#"><img class="author-thumb" src="assets/venta.png" alt="Autor"></a>
                                    </span>
                                    <span class="author-meta">
                                    <span class="post-name"><a href="#">VENTA Nº {{ $arr_venta->id }}</a></span><br/>
                                    <span class="post-date">{{ $arr_venta->fecha_entrega }}</span>
                                    </span>
                                    <span class="btn-eliminar">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_venta->id }}">
                                            <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#mc{{ $arr_venta->id }}"></i>
                                        </button>
                                        <div class="modal fade" id="mc{{ $arr_venta->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                        <form method="post" action="{{ route('venta.destroy', $arr_venta) }}">
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