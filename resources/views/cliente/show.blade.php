<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Cliente</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
        <header></header>
        <section>
            <article>
                <a href="{{ route('cliente.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <div class="card mt-3">
                    <h5 class="card-header">{{ $cliente->ap_paterno }}</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Ruc</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Dirección</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->ap_paterno }}</td>
                                    <td>{{ $cliente->ap_materno }}</td>
                                    <td>{{ $cliente->dni }}</td>
                                    <td>{{ $cliente->ruc }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->email}}</td>
                                    <td>{{ $cliente->direccion }}</td>
                                </tr>
                            </tbody>
                          </table>
                        
                    </div>
                </div>
            </article>
        </section>
    </div>
</body>
</html>