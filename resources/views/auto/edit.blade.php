@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú |  $auto->marca $auto->modelo")

@section("contenido")
    <div class="container mt-3">
        <header>
        </header>
        <section>
            <article>
                <a href="{{ route('auto.index') }}" class="btn btn-outline-success">
                    Regresar
                </a>
                <!-- Formulario para editar Autos -->
                <div class="card mt-3">
                    <h5 class="card-header">Editar Auto</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('auto.update', $auto) }}">
                            @csrf
                            @method("put")
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="marca" id="marca" >
                                    <option value=""{{ old('marca', $auto->marca)}} selected>Seleccione la marca</option>
                                    <option value="Abarth"{{ old('marca', $auto->marca) == 'Abarth' ? 'selected' : '' }}>Abarth</option>
                                    <option value="Alfa Romeo"{{ old('marca', $auto->marca) == 'Alfa Romeo' ? 'selected' : '' }}>Alfa Romeo</option>
                                    <option value="Aston Martin"{{ old('marca', $auto->marca) == 'Aston Martin' ? 'selected' : '' }}>Aston Martin</option>
                                    <option value="Audi"{{ old('marca', $auto->marca) == 'Audi' ? 'selected' : '' }}>Audi</option>
                                    <option value="Bentley"{{ old('marca', $auto->marca) == 'Bentley' ? 'selected' : '' }}>Bentley</option>
                                    <option value="BMW"{{ old('marca', $auto->marca) == 'BMW' ? 'selected' : '' }}>BMW</option>
                                    <option value="Bugatti"{{ old('marca', $auto->marca) == 'Bugatti' ? 'selected' : '' }}>Bugatti</option>
                                    <option value="Cadillac"{{ old('marca', $auto->marca) == 'Cadillac' ? 'selected' : '' }}>Cadillac</option>
                                    <option value="Chevrolet"{{ old('marca', $auto->marca) == 'Chevrolet' ? 'selected' : '' }}>Chevrolet</option>
                                    <option value="Chrysler"{{ old('marca', $auto->marca) == 'Chrysler' ? 'selected' : '' }}>Chrysler</option>
                                    <option value="Citroën"{{ old('marca', $auto->marca) == 'Citroën' ? 'selected' : '' }}>Citroën</option>
                                    <option value="Dacia"{{ old('marca', $auto->marca) == 'Dacia' ? 'selected' : '' }}>Dacia</option>
                                    <option value="Daewoo"{{ old('marca', $auto->marca) == 'Daewoo' ? 'selected' : '' }}>Daewoo</option>
                                    <option value="Daihatsu"{{ old('marca', $auto->marca) == 'Daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                                    <option value="Dodge"{{ old('marca', $auto->marca) == 'Dodge' ? 'selected' : '' }}>Dodge</option>
                                    <option value="Ferrari"{{ old('marca', $auto->marca) == 'Ferrari' ? 'selected' : '' }}>Ferrari</option>
                                    <option value="Fiat"{{ old('marca', $auto->marca) == 'Fiat' ? 'selected' : '' }}>Fiat</option>
                                    <option value="Ford"{{ old('marca', $auto->marca) == 'Ford' ? 'selected' : '' }}>Ford</option>
                                    <option value="Honda"{{ old('marca', $auto->marca) == 'Honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="Hummer"{{ old('marca', $auto->marca) == 'Hummer' ? 'selected' : '' }}>Hummer</option>
                                    <option value="Hyundai"{{ old('marca', $auto->marca) == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
                                    <option value="Infiniti"{{ old('marca', $auto->marca) == 'Infiniti' ? 'selected' : '' }}>Infiniti</option>
                                    <option value="Isuzu"{{ old('marca', $auto->marca) == 'Isuzu' ? 'selected' : '' }}>Isuzu</option>
                                    <option value="Jaguar"{{ old('marca', $auto->marca) == 'Jaguar' ? 'selected' : '' }}>Jaguar</option>
                                    <option value="Jeep"{{ old('marca', $auto->marca) == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                                    <option value="Kia"{{ old('marca', $auto->marca) == 'Kia' ? 'selected' : '' }}>Kia</option>
                                    <option value="Lamborghini"{{ old('marca', $auto->marca) == 'Lamborghini' ? 'selected' : '' }}>Lamborghini</option>
                                    <option value="Lancia"{{ old('marca', $auto->marca) == 'Lancia' ? 'selected' : '' }}>Lancia</option>
                                    <option value="Land Rover"{{ old('marca', $auto->marca) == 'Land Rover' ? 'selected' : '' }}>Land Rover</option>
                                    <option value="Lexus"{{ old('marca', $auto->marca) == 'Lexus' ? 'selected' : '' }}>Lexus</option>
                                    <option value="Lotus"{{ old('marca', $auto->marca) == 'Lotus' ? 'selected' : '' }}>Lotus</option>
                                    <option value="Maserati"{{ old('marca', $auto->marca) == 'Maserati' ? 'selected' : '' }}>Maserati</option>
                                    <option value="Maybach"{{ old('marca', $auto->marca) == 'Maybach' ? 'selected' : '' }}>Maybach</option>
                                    <option value="Mazda"{{ old('marca', $auto->marca) == 'Mazda' ? 'selected' : '' }}>Mazda</option>
                                    <option value="McLaren"{{ old('marca', $auto->marca) == 'McLaren' ? 'selected' : '' }}>McLaren</option>
                                    <option value="Mercedes-Benz"{{ old('marca', $auto->marca) == 'Mercedes-Benz' ? 'selected' : '' }}>Mercedes-Benz</option>
                                    <option value="MG"{{ old('marca', $auto->marca) == 'MG' ? 'selected' : '' }}>MG</option>
                                    <option value="Mini"{{ old('marca', $auto->marca) == 'Mini' ? 'selected' : '' }}>Mini</option>
                                    <option value="Mitsubishi"{{ old('marca', $auto->marca) == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                                    <option value="Nissan"{{ old('marca', $auto->marca) == 'Nissan' ? 'selected' : '' }}>Nissan</option>
                                    <option value="Opel"{{ old('marca', $auto->marca) == 'Opel' ? 'selected' : '' }}>Opel</option>
                                    <option value="Peugeot"{{ old('marca', $auto->marca) == 'Peugeot' ? 'selected' : '' }}>Peugeot</option>
                                    <option value="Porsche"{{ old('marca', $auto->marca) == 'Porsche' ? 'selected' : '' }}>Porsche</option>
                                    <option value="Renault"{{ old('marca', $auto->marca) == 'Renault' ? 'selected' : '' }}>Renault</option>
                                    <option value="Rolls-Royce"{{ old('marca', $auto->marca) == 'Rolls-Royce' ? 'selected' : '' }}>Rolls-Royce</option>
                                    <option value="Rover"{{ old('marca', $auto->marca) == 'Rover' ? 'selected' : '' }}>Rover</option>
                                    <option value="Saab"{{ old('marca', $auto->marca) == 'Saab' ? 'selected' : '' }}>Saab</option>
                                    <option value="Seat"{{ old('marca', $auto->marca) == 'Seat' ? 'selected' : '' }}>Seat</option>
                                    <option value="Skoda"{{ old('marca', $auto->marca) == 'Skoda' ? 'selected' : '' }}>Skoda</option>
                                    <option value="Smart"{{ old('marca', $auto->marca) == 'Smart' ? 'selected' : '' }}>Smart</option>
                                    <option value="SsangYong"{{ old('marca', $auto->marca) == 'SsangYong' ? 'selected' : '' }}>SsangYong</option>
                                    <option value="Subaru"{{ old('marca', $auto->marca) == 'Subaru' ? 'selected' : '' }}>Subaru</option>
                                    <option value="Suzuki"{{ old('marca', $auto->marca) == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                    <option value="Tesla"{{ old('marca', $auto->marca) == 'Tesla' ? 'selected' : '' }}>Tesla</option>
                                    <option value="Toyota"{{ old('marca', $auto->marca) == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                                    <option value="Volkswagen"{{ old('marca', $auto->marca) == 'Volkswagen' ? 'selected' : '' }}>Volkswagen</option>
                                    <option value="Volvo"{{ old('marca', $auto->marca) == 'Volvo' ? 'selected' : '' }}>Volvo</option>
                                  </select>
                                @if ($errors->first("marca"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("marca") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo del Auto</label>
                                <textarea class="form-control" name="modelo" id="modelo" rows="4" cols="">{{ old('modelo', $auto->modelo) }}</textarea>
                                @if ($errors->first("modelo"))
                                <br />
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first("modelo") }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection