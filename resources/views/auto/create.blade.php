@extends("layout.plantilla")

@section("titulo", "Auto Wash Perú | Nuevo Vehiículo")

@section("contenido")
<div class="container mt-3">
    <section>
        <article>
            <a href="{{ route('auto.index') }}" class="btn btn-outline-success">
                Regresar
            </a>
            <!-- Formulario para registrar categorías -->
            <div class="card mt-3">
                <h5 class="card-header">Registrar Auto</h5>
                <div class="card-body">
                    <form method="post" action="{{ route('auto.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="marca" id="marca">
                                <option value="" selected>Seleccione la marca</option>
                                <option value="Abarth" {{ old('marca') == 'Abarth' ? 'selected' : '' }}>Abarth</option>
                                <option value="Alfa Romeo" {{ old('marca') == 'Alfa Romeo' ? 'selected' : '' }}>Alfa Romeo</option>
                                <option value="Aston Martin" {{ old('marca') == 'Aston Martin' ? 'selected' : '' }}>Aston Martin</option>
                                <option value="Audi" {{ old('marca') == 'Audi' ? 'selected' : '' }}>Audi</option>
                                <option value="Bentley" {{ old('marca') == 'Bentley' ? 'selected' : '' }}>Bentley</option>
                                <option value="BMW" {{ old('marca') == 'BMW' ? 'selected' : '' }}>BMW</option>
                                <option value="Bugatti" {{ old('marca') == 'Bugatti' ? 'selected' : '' }}>Bugatti</option>
                                <option value="Cadillac" {{ old('marca') == 'Cadillac' ? 'selected' : '' }}>Cadillac</option>
                                <option value="Chevrolet" {{ old('marca') == 'Chevrolet' ? 'selected' : '' }}>Chevrolet</option>
                                <option value="Chrysler" {{ old('marca') == 'Chrysler' ? 'selected' : '' }}>Chrysler</option>
                                <option value="Citroën" {{ old('marca') == 'Citroën' ? 'selected' : '' }}>Citroën</option>
                                <option value="Dacia" {{ old('marca') == 'Dacia' ? 'selected' : '' }}>Dacia</option>
                                <option value="Daewoo" {{ old('marca') == 'Daewoo' ? 'selected' : '' }}>Daewoo</option>
                                <option value="Daihatsu" {{ old('marca') == 'Daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                                <option value="Dodge" {{ old('marca') == 'Dodge' ? 'selected' : '' }}>Dodge</option>
                                <option value="Ferrari" {{ old('marca') == 'Ferrari' ? 'selected' : '' }}>Ferrari</option>
                                <option value="Fiat" {{ old('marca') == 'Fiat' ? 'selected' : '' }}>Fiat</option>
                                <option value="Ford" {{ old('marca') == 'Ford' ? 'selected' : '' }}>Ford</option>
                                <option value="Honda" {{ old('marca') == 'Honda' ? 'selected' : '' }}>Honda</option>
                                <option value="Hummer" {{ old('marca') == 'Hummer' ? 'selected' : '' }}>Hummer</option>
                                <option value="Hyundai" {{ old('marca') == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
                                <option value="Infiniti" {{ old('marca') == 'Infiniti' ? 'selected' : '' }}>Infiniti</option>
                                <option value="Isuzu" {{ old('marca') == 'Isuzu' ? 'selected' : '' }}>Isuzu</option>
                                <option value="Jaguar" {{ old('marca') == 'Jaguar' ? 'selected' : '' }}>Jaguar</option>
                                <option value="Jeep" {{ old('marca') == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                                <option value="Kia" {{ old('marca') == 'Kia' ? 'selected' : '' }}>Kia</option>
                                <option value="Lamborghini" {{ old('marca') == 'Lamborghini' ? 'selected' : '' }}>Lamborghini</option>
                                <option value="Lancia" {{ old('marca') == 'Lancia' ? 'selected' : '' }}>Lancia</option>
                                <option value="Land Rover" {{ old('marca') == 'Land Rover' ? 'selected' : '' }}>Land Rover</option>
                                <option value="Lexus" {{ old('marca') == 'Lexus' ? 'selected' : '' }}>Lexus</option>
                                <option value="Lotus" {{ old('marca') == 'Lotus' ? 'selected' : '' }}>Lotus</option>
                                <option value="Maserati" {{ old('marca') == 'Maserati' ? 'selected' : '' }}>Maserati</option>
                                <option value="Maybach" {{ old('marca') == 'Maybach' ? 'selected' : '' }}>Maybach</option>
                                <option value="Mazda" {{ old('marca') == 'Mazda' ? 'selected' : '' }}>Mazda</option>
                                <option value="McLaren" {{ old('marca') == 'McLaren' ? 'selected' : '' }}>McLaren</option>
                                <option value="Mercedes-Benz" {{ old('marca') == 'Mercedes-Benz' ? 'selected' : '' }}>Mercedes-Benz</option>
                                <option value="MG" {{ old('marca') == 'MG' ? 'selected' : '' }}>MG</option>
                                <option value="Mini" {{ old('marca') == 'Mini' ? 'selected' : '' }}>Mini</option>
                                <option value="Mitsubishi" {{ old('marca') == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                                <option value="Nissan" {{ old('marca') == 'Nissan' ? 'selected' : '' }}>Nissan</option>
                                <option value="Opel" {{ old('marca') == 'Opel' ? 'selected' : '' }}>Opel</option>
                                <option value="Peugeot" {{ old('marca') == 'Peugeot' ? 'selected' : '' }}>Peugeot</option>
                                <option value="Porsche" {{ old('marca') == 'Porsche' ? 'selected' : '' }}>Porsche</option>
                                <option value="Renault" {{ old('marca') == 'Renault' ? 'selected' : '' }}>Renault</option>
                                <option value="Rolls-Royce" {{ old('marca') == 'Rolls-Royce' ? 'selected' : '' }}>Rolls-Royce</option>
                                <option value="Rover" {{ old('marca') == 'Rover' ? 'selected' : '' }}>Rover</option>
                                <option value="Saab" {{ old('marca') == 'Saab' ? 'selected' : '' }}>Saab</option>
                                <option value="Seat" {{ old('marca') == 'Seat' ? 'selected' : '' }}>Seat</option>
                                <option value="Skoda" {{ old('marca') == 'Skoda' ? 'selected' : '' }}>Skoda</option>
                                <option value="Smart" {{ old('marca') == 'Smart' ? 'selected' : '' }}>Smart</option>
                                <option value="SsangYong" {{ old('marca') == 'SsangYong' ? 'selected' : '' }}>SsangYong</option>
                                <option value="Subaru" {{ old('marca') == 'Subaru' ? 'selected' : '' }}>Subaru</option>
                                <option value="Suzuki" {{ old('marca') == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                <option value="Tesla" {{ old('marca') == 'Tesla' ? 'selected' : '' }}>Tesla</option>
                                <option value="Toyota" {{ old('marca') == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                                <option value="Volkswagen" {{ old('marca') == 'Volkswagen' ? 'selected' : '' }}>Volkswagen</option>
                                <option value="Volvo" {{ old('marca') == 'Volvo' ? 'selected' : '' }}>Volvo</option>
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
                        <button type="submit" class="btn btn-outline-primary">Registrar Auto</button>
                    </form>
                </div>
            </div>
        </article>
    </section>
</div>
@endsection
