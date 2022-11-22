<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index() {
        $servicio = Servicio::orderBy('nombre_servicio', 'asc')->paginate();

        return view('servicio.index', compact("servicio"));
    }
    public function show($id) {

        return view("servicio.show", [
            "servicio" => Servicio::findOrFail($id)
        ]);
    }

    public function create() {

        return view("servicio.create", [
            "servicio" => new Servicio
        ]);
    }

    public function store() {
        // Validar los campos
        $arr_campo = request()->validate([
            "nombre_servicio" => "required|max:100",
            "descripcion_servicio" => "nullable|max:150",
            "precio_base" => "required"


        ], [
            "nombre_servicio.required" => "Escriba el nombre del servicio.",
            "descripcion_servicio.required" => "Escriba un breve descripción.",
            "precio_base.required" => "Escriba un precio base"
        ]);

        Servicio::create($arr_campo);

        return redirect()->route("servicio.index");
    }

    public function edit(Servicio $servicio) {

        return view("servicio.edit", [
            "servicio" => $servicio
        ]);
    }

    public function update(Servicio $servicio) {
        // Validar los campos
        $arr_campo = request()->validate([
            "nombre_servicio" => "required|max:100",
            "descripcion_servicio" => "nullable|max:150",
            "precio_base" => "required"


        ], [
            "nombre_servicio.required" => "Escriba el nombre del servicio.",
            "descripcion_servicio.required" => "Escriba un breve descripción.",
            "precio_base.required" => "Escriba un precio base"
        ]);

        $servicio->update([
            "nombre_servicio" => request("nombre_servicio"),
            "descripcion_servicio" => request("descripcion_servicio"),
            "precio_base" => request("precio_base")
        ]);

        return redirect()->route("servicio.index");
    }

    public function destroy(servicio $servicio) {

        $servicio->delete();

        return redirect()->route("servicio.index");
    }

}
