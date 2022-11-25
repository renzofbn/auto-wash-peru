<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;


class AutoController extends Controller
{
    public function index() {
        $auto = Auto::orderBy('marca', 'asc')->paginate();

        return view('auto.index', compact('auto'));
    }

    public function show($id) {

        return view("auto.show", [
            "auto" => Auto::findOrFail($id)
        ]);
    }

    public function create() {

        return view("auto.create", [
            "auto" => new Auto
        ]);
    }

    public function store() {
        // Validar los campos


        $arr_campo = request()->validate([
            "marca" => "required|min:2",
            "modelo" => "required|min:8"
        ], [
            "marca.required" => "Seleccione una marca.",
            "modelo.required" => "Escriba el modelo del auto."
        ]);

        Auto::create($arr_campo);

        return redirect()->route("auto.index");
    }

    public function edit(Auto $auto) {

        return view("auto.edit", [
            "auto" => $auto
        ]);
    }

    public function update(Auto $auto) {
        // Validar los campos
        $arr_campo = request()->validate([
            "marca" => "required|min:2",
            "modelo" => "required|min:8"
        ]);

        $auto->update([
            "marca" => request("marca"),
            "modelo" => request("modelo")
        ]);

        return redirect()->route("auto.index");
    }

    public function destroy(Auto $auto) {

        $auto->delete();

        return redirect()->route("auto.index");
    }
}
