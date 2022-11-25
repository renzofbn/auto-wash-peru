@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | $servicio->nombre_servicio")

@section("css")
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/profile.css" rel="stylesheet">
    <link href="/css/custom_bootstrap.css" rel="stylesheet">
@endsection



@section("contenido")

    <!-- Begin Top Author Page
================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <br>
                <div class="profile-pic">
                    <label class="-label" for="file">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span>Cambiar imagen</span>
                    </label>
                    <form action="/save/profilePicture" method="post" enctype="multipart/form-data">
                        <input id="file" type="file" name="pfp" accept="image/*" onchange="loadFile(event)"/>
                        <input class="Ecambios d-none" id="uploadProfile" type="submit" value="subir"/>
                    </form>

                    <img src="/gradientes/1.jpg" id="output" width="200"  alt="{{ $servicio->nombre_servicio }}"/>
                </div>


            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <div class="row post-top-meta authorpage">

                        <div class="col-md-10">
                            <form method="post" action="{{ route('servicio.update', $servicio) }}">
                                <br/>
                                <div class="mb-3">
                                    <input style='font-size:26px' type="text" class="form-control" name="nombre_servicio" id="nombre_servicio" value="{{ old('nombre_servicio', $servicio->nombre_servicio) }}" />
                                    @if ($errors->first("nombre_servicio"))
                                    <br />
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first("nombre_servicio") }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="mb-3">
                                    <textarea class="form-control" name="descripcion_servicio" id="descripcion_servicio" rows="4" cols="">{{ old('descripcion_servicio', $servicio->descripcion_servicio) }}</textarea>
                                    @if ($errors->first("descripcion_servicio"))
                                    <br />
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first("descripcion_servicio") }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <br><h5 style='font-size:26px'>Precio</h5><hr>
                                    <input type="number"min="1" max="99999999" class="form-control" name="precio_base" id="precio_base" value="{{ old('precio_base', $servicio->precio_base) }}" />
                                    @if ($errors->first("precio_base"))
                                    <br />
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first("precio_base") }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-8 offset-md-10">
                                    <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Author Meta
    ================================================== -->
@endsection

@section("scripts")
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="/js/changeProfile.js"></script>
@endsection