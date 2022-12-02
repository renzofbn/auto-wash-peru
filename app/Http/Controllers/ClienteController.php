<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule; //valida que el campo sea unico

class ClienteController extends Controller
{
    public function index() {
        $cliente = Cliente::orderBy('ap_paterno', 'asc')->paginate();

        return view('cliente.index', compact('cliente'));
    }

    public function show($id) {

        return view("cliente.show", [
            "cliente" => Cliente::findOrFail($id)
        ]);
    }

    public function create() {

        return view("cliente.create", [
            "cliente" => new Cliente
        ]);
    }

    public function store() {
        // Validar los campos
        $arr_campo = request()->validate([
            "nombre" => "required|min:2",
            "ap_paterno" => "required|min:3",
            "ap_materno" => "required|min:3",
            "dni" => "required|unique:tb_cliente|min:8|max:8",
            "telefono" => "required|min:9|max:9",
            "direccion" => "required|min:10",
            "email" => "required|email|unique:tb_cliente",
            "ruc" => "nullable|unique:tb_cliente|min:11|max:11"
        ]);

        Cliente::create($arr_campo);

        return redirect()->route("cliente.index");
    }

    public function edit(Cliente $cliente) {

        return view("cliente.edit", [
            "cliente" => $cliente
        ]);
    }

    public function update(Cliente $cliente) {
        // Validar los campos
        $arr_campo = request()->validate([
            "nombre" => "required|min:2",
            "ap_paterno" => "required|min:3",
            "ap_materno" => "required|min:3",
            "dni" => ["required","min:8","max:8",Rule::unique('tb_cliente')->ignore($cliente->id)],
            "telefono" => "required|min:9| max:9",
            "direccion" => "required|min:10",
            "email" => ["required","email",Rule::unique('tb_cliente')->ignore($cliente->id)],
            "ruc" => ["nullable","min:11","max:11",Rule::unique('tb_cliente')->ignore($cliente->id)]
        ]);

        $cliente->update([
            "nombre" => request("nombre"),
            "ap_paterno" => request("ap_paterno"),
            "ap_materno" => request("ap_materno"),
            "dni" => request("dni"),
            "telefono" => request("telefono"),
            "direccion" => request("direccion"),
            "email" => request("email"),
            "ruc" => request("ruc"),
        ]);

        return redirect()->route("cliente.index");
    }

    public function destroy(Cliente $cliente) {

        $cliente->delete();

        return redirect()->route("cliente.index");
    }
}
