<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- {{-- iconos --}} -->
    <script src="https://kit.fontawesome.com/24b090fe9f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="{{asset('css/styles.css')}}">
    
    
    <link rel="stylesheet"  href="{{asset('css/carrousel.css')}}">
    <script src="{{asset('js/carrousel.js') }}"></script>
    
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    
    @yield('links')

    <title>@yield('titulo','Auto Wash Perú | Inicio')</title>
</head>

<body>
    <!-- {{-- Menú --}} -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto gap-2">
                    <li class="nav-item rounded">
                        <a class="{{ resaltar_enlace_nav_link('index') }}" aria-current="page" href="{{ route('index') }}"><i class="fa-solid fa-house pe-2"></i>Inicio</a>
                    </li>
                    <!-- {{-- SERVICIOS --}} -->
                    <li class="nav-item dropdown rounded">
                        <a class="{{ resaltar_enlace_dropdown('servicio.*') }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-screwdriver-wrench pe-2"></i>Servicios</a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('servicio.index')}}">Listar</a></li>
                            <li><a class="dropdown-item" href="{{route ('servicio.create')}}">Agregar</a></li>
                        </ul>
                    </li>
                    <!-- {{-- AUTOS --}} -->
                    <li class="nav-item dropdown rounded">
                        <a class="{{ resaltar_enlace_dropdown('auto.*') }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-car pe-2"></i>Autos</a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('auto.index')}}">Listar</a></a></li>
                            <li><a class="dropdown-item" href="{{route ('auto.create')}}">Agregar</a></li>
                        </ul>
                    </li>
                    <!-- {{-- Clientes --}} -->
                    <li class="nav-item dropdown rounded">
                        <a class="{{ resaltar_enlace_dropdown('cliente.*') }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-person pe-2"></i>Clientes</a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('cliente.index')}}">Listar</a></li>
                            <li><a class="dropdown-item" href="{{route ('cliente.create')}}">Agregar</a></li>
                        </ul>
                    </li>
                    <!-- {{-- Empleados --}} -->
                    <li class="nav-item dropdown rounded">
                        <a class="{{ resaltar_enlace_dropdown('empleado.*') }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user pe-2"></i>Empleados</a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('empleado.index')}}">Listar</a></li>
                            <li><a class="dropdown-item" href="{{route ('empleado.create')}}">Agregar</a></li>
                        </ul>
                    </li>
                    <!-- {{-- Venta --}} -->
                    <li class="nav-item dropdown rounded">
                        <a class="{{ resaltar_enlace_dropdown('venta.*') }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-person pe-2"></i>Venta</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('venta.index')}}">Listar</a></li>
                            <li><a class="dropdown-item" href="{{route ('venta.create')}}">Agregar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Fin del menú --}}
    {{-- Contenido --}}
    @yield('contenido')
    {{-- Fin del contenido --}}

    {{-- Footer --}}
    <br/>
    <!-- <div class="container">
    <div class="footer">
            <p class="pull-left">
                Copyright &copy; 2022 Auto Wash Perú
            </p>
            <div class="clearfix">
            </div>
        </div> 
    </div> -->
    <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <a href="#"><img src="https://i.ibb.co/QDy827D/ak-logo.png" alt="logo"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                        <div class="hr"></div>
                        <h6>1120 Lorem ipsum dolor sit amet, KC 179050, Chandigarh.</h6>
                        <h6>+01 2345 6789 12<span>|</span>+01 2345 6789 12</h6>
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-github"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-behance"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== 1.9 Contact Area End ====================-->
    <!-- =============== 1.9 Footer Area Start ====================-->
    <footer>
        <p>Copyright &copy; 2019 <img src="https://i.ibb.co/QDy827D/ak-logo.png" alt="logo"> All Rights Reserved.</p>
    </footer>
    {{-- Fin del footer --}}
</body>
@yield('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></scrip>

</html>