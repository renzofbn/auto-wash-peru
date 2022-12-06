<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Venta;
use App\Models\Auto;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Empleado;
use Carbon\Carbon;



class VentaController extends Controller
{
    public function index() {
        $venta = Venta::orderBy('id_servicio', 'asc')->paginate();
        return view('venta.index', compact('venta'));
    }

    public function show($id) {

        return view("venta.show", [
            "venta" => venta::findOrFail($id)
        ]);
    }

    public function create() {

        $servicio = Servicio::orderBy('nombre_servicio', 'asc')->get();
        $auto = Auto::orderBy('marca', 'asc')->get();
        $cliente = Cliente::orderBy('nombre', 'asc')->get();
        $e_supervisor = Empleado::where('cargo', 'supervisor')->get();
        $e_operario1 = Empleado::whereNotIn('cargo',['supervisor'])->orderby('cargo','asc')->get();
        $e_operario2 = Empleado::whereNotIn('cargo',['supervisor'])->orderby('cargo','asc')->get();
        $e_operario3 = Empleado::whereNotIn('cargo',['supervisor'])->orderby('cargo','asc')->get();
    
        $venta = null;
        if (is_null($venta)) {
            $venta = Venta::make([
                'fecha_ingreso' => Carbon::now(),
            ]);
        }

        return view('venta.create', compact('servicio', 'auto', 'cliente','e_supervisor','e_operario1','e_operario2','e_operario3','venta'), [ 'venta' => New Venta()]); 

    }
    public function store() {
        /* dd(request()->all()); */
        // Validar los campos
        $arr_campo = request()->validate([
            "id_servicio" => "required",
            "id_cliente" => "required",
            "id_e_supervisor" => "required",
            "id_e_operario1" => "required",
            "id_e_operario2" => "required",
            "id_e_operario3" => "required",
            "id_auto" => "required|min:1",
            "tipo_auto" => "required",
            "finalizado" => "required|numeric|min:0|max:1",
            "domicilio" => "required|numeric|min:0|max:1",
            "subtotal" => "required",
            "igv" => "required",
            "total" => "required",
            "fecha_entrega" => "required",
        ]);

        /* error_log('fecha_ingreso: ' . $arr_campo['fecha_ingreso']); */
        Venta::create($arr_campo);
        

        return redirect()->route("venta.index");
    }

    public function edit(Venta $venta) {

        $servicio = Servicio::orderBy('nombre_servicio', 'asc')->get();
        $auto = Auto::orderBy('marca', 'asc')->get();
        $cliente = Cliente::orderBy('nombre', 'asc')->get();
        $e_supervisor = Empleado::orderBy('nombre', 'asc')->get();
        $e_operario1 = Empleado::orderBy('nombre', 'asc')->get();
        $e_operario2 = Empleado::orderBy('nombre', 'asc')->get();
        $e_operario3 = Empleado::orderBy('nombre', 'asc')->get();

      
        return view('venta.edit',compact('servicio', 'auto', 'cliente','e_supervisor','e_operario1','e_operario2','e_operario3'), [
            "venta" => $venta
        ]); 
    }

    public function update(Venta $venta) {

        // Validar los campos
        $arr_campo = request()->validate([
            "id_servicio" => "required",
            "id_cliente" => "required",
            "id_e_supervisor" => "required",
            "id_e_operario1" => "required",
            "id_e_operario2" => "required",
            "id_e_operario3" => "required",
            "id_auto" => "required|min:0",
            "tipo_auto" => "required",
            "finalizado" => "required|numeric|min:0|max:1",
            "domicilio" => "required|numeric|min:0|max:1",
            "subtotal" => "required",
            "igv" => "required",
            "total" => "required",
            "fecha_entrega" => "required",
        ]);

        $venta->update([
            "id_servicio" => request("id_servicio"),
            "id_cliente" => request("id_cliente"),
            "id_e_supervisor" => request("id_e_supervisor"),
            "id_e_operario1" => request("id_e_operario1"),
            "id_e_operario2" => request("id_e_operario2"),
            "id_e_operario3" => request("id_e_operario3"),
            "id_auto" => request("id_auto"),
            "tipo_auto" => request("tipo_auto"),
            "finalizado" => request("finalizado"),
            "domicilio" => request("domicilio"),
            "subtotal" => request("subtotal"),
            "igv" => request("igv"),
            "total" => request("total"),
            "fecha_entrega" => request("fecha_entrega"),

        ]);

        return redirect()->route("venta.index");
    }

    public function destroy(Venta $venta) {

        $venta->delete();

        return redirect()->route("venta.index");
    }
}
