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
    {{-- iconos --}}
    <script src="https://kit.fontawesome.com/24b090fe9f.js" crossorigin="anonymous"></script>

    <title>@yield('titulo','Auto Wash Perú')</title>
</head>

<body>
    {{-- Menú --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto gap-2">
                    <li class="nav-item rounded">
                        <a class="nav-link active" aria-current="page" href="{{'/'}}"><i class="fa-solid fa-house pe-2"></i>Inicio</a>
                    </li>
                    {{-- SERVICIOS --}}
                    <li class="nav-item dropdown rounded">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-screwdriver-wrench pe-2"></i>Servicios</a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('servicio.index')}}">Servicio</a></li>
                            <li><a class="dropdown-item" href="{{route ('servicio.create')}}">Crear Servicio</a></li>
                        </ul>
                    </li>
                    {{-- AUTOS --}}
                    <li class="nav-item dropdown rounded">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-car pe-2"></i>Autos</a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('auto.index')}}">Auto</a></li>
                            <li><a class="dropdown-item" href="{{route ('auto.create')}}">Crear Auto</a></li>
                        </ul>
                    </li>
                    {{-- Clientes --}}
                    <li class="nav-item dropdown rounded">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-person pe-2"></i>Clientes</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('cliente.index')}}">Cliente</a></li>
                            <li><a class="dropdown-item" href="{{route ('cliente.create')}}">Crear Cliente</a></li>
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
    <div class="bg-dark text-white">
        <p class="text-center p-4 m-0">Footer Content</p>
    </div>
    {{-- Fin del footer --}}
</body>

</html>