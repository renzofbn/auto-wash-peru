<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



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
            "dni" => "required|unique:tb_empleado|min:8|max:8",
            "ruc" => "nullable|unique:tb_empleado|min:11|max:11",
            "telefono" => "required|min:9|max:9",
            "email" => "required|email|unique:tb_empleado",
            "direccion" => "required|min:10",
            "cargo" => "required",
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
            "dni" => ["required","min:8","max:8",Rule::unique('tb_empleado')->ignore($empleado->id)],
            "ruc" => "nullable|unique:empleado|min:11",
            "telefono" => "required|min:9",
            "email" => ["required","email",Rule::unique('tb_empleado')->ignore($empleado->id)],
            "direccion" => "required|min:10",
            "cargo" => "required",

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
        ]);

        return redirect()->route("empleado.index");
    }

    public function destroy(Empleado $empleado) {

        $clliente->delete();

        return redirect()->route("empleado.index");
    }
}
