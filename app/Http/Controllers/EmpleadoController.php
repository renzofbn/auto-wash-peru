<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index() {
        $empleado= Empleado::orderBy('ap_paterno', 'asc')->paginate();

        return view('empleado.index', compact('empleado'));
    }

    public function show($id) {

        return view("empleado.show", [
            "empleado" => Empleado::findOrFail($id)
        ]);
    }

    public function create() {

        return view("empleado.create", [
            "empleado" => new Empleado
        ]);
    }

    public function store() {
        // Validar los campos
        $arr_campo = request()->validate([
            "nombre" => "required|min:2",
            "ap_paterno" => "required|min:3",
            "ap_materno" => "required|min:3",
            "dni" => "required|unique:empleado|min:8",
            "ruc" => "nullable|unique:empleado|min:11",
            "telefono" => "required|min:9",
            "email" => "required|email|unique:empleado",
            "direccion" => "required|min:10",
            "cargo" => "required",
            "esta_trabajando" => "required",
        ], [
            "nombre.required" => "Escriba su nombre",
            "ap_paterno.required" => "Escriba su apellido paterno",
            "ap_materno.required" => "Escriba su apellido materno",
            "dni.required" => "Escriba su DNI",
            "ruc.nullable" => "Escriba su RUC",
            "telefono.required" => "Escriba su telefono",
            "email.required" => "Escriba su email",
            "direccion.required" => "Escriba su direccion",
            "cargo.required" => "Escriba su cargo",
            "esta_trabajando.required" => "Escriba el estado del trabajador"
        ]);

        Empleado::create($arr_campo);

        return redirect()->route("empleado.index");
    }

    public function edit(Empleado $empleado) {

        return view("empleado.edit", [
            "empleado" => $empleado
        ]);
    }

    public function update(Empleado $empleado) {
        // Validar los campos
        $arr_campo = request()->validate([
            "nombre" => "required|min:2",
            "ap_paterno" => "required|min:3",
            "ap_materno" => "required|min:3",
            "dni" => "required|unique:empleado|min:8",
            "ruc" => "nullable|unique:empleado|min:11",
            "telefono" => "required|min:9",
            "email" => "required|email|unique:empleado",
            "direccion" => "required|min:10",
            "cargo" => "required",
            "esta_trabajando" => "required",

        ], [
            "nombre.required" => "Escriba su nombre",
            "ap_paterno.required" => "Escriba su apellido paterno",
            "ap_materno.required" => "Escriba su apellido materno",
            "dni.required" => "Escriba su DNI",
            "ruc.nullable" => "Escriba su RUC",
            "telefono.required" => "Escriba su telefono",
            "email.required" => "Escriba su email",
            "direccion.required" => "Escriba su direccion",
            "cargo.required" => "Escriba su cargo",
            "esta_trabajando.required" => "Escriba el estado del trabajador"
        ]);

        $empleado->update([
            "nombre" => request("nombre"),
            "ap_paterno" => request("ap_paterno"),
            "ap_materno" => request("ap_materno"),
            "dni" => request("dni"),
            "ruc" => request("ruc"),
            "telefono" => request("telefono"),
            "email" => request("email"),
            "direccion" => request("direccion"),
            "cargo" => request("cargo"),
            "esta_trabajando" => request("esta_trabajando"),
        ]);

        return redirect()->route("empleado.index");
    }

    public function destroy(Empleado $empleado) {

        $clliente->delete();

        return redirect()->route("empleado.index");
    }
}
