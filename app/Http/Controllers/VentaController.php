<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Auto;
use App\Models\Cliente;
use App\Models\Servicio;
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
        $e_supervisor = Cliente::orderBy('nombre', 'asc')->get();
        $e_operario1 = Cliente::orderBy('nombre', 'asc')->get();
        $e_operario2 = Cliente::orderBy('nombre', 'asc')->get();
        $e_operario3 = Cliente::orderBy('nombre', 'asc')->get();

        $venta = null;
        if (is_null($venta)) {
            $venta = Venta::make([
                'fecha_ingreso' => Carbon::now(),
                'fecha_entrega' => Carbon::now(),
            ]);
        }

        return view('venta.create', compact('servicio', 'auto', 'cliente','e_supervisor','e_operario1','e_operario2','e_operario3','venta'), [ 'venta' => New Venta()]); 


                /* $now = Carbon::now();
        $fecha_actual = $now->format('Y-m-d\H:i'); */
        /* return view("venta.create", [
            "venta" => new Venta
        ]); */
    }
    public function store() {
        // Validar los campos
        error_log(print_r(request()->all(), true));
        $arr_campo = request()->validate([
            "id_servicio" => "required|min:2",
            "id_cliente" => "required|min:2",
            "id_e_supervisor" => "required|min:2",
            "id_e_operario1" => "required|min:2",
            "id_e_operario2" => "nullable|min:2",
            "id_e_operario3" => "nullable|min:2",
            "id_auto" => "required|min:2",
            "tipo_auto" => "required|min:2",
            "finalizado" => "required",
            "domicilio" => "required",
            "subtotal" => "required|min:2",
            "igv" => "required|min:2",
            "total" => "required|min:2",
            "fecha_ingreso" => "required||date_format:Y-m-d\TH:i",
            "fecha_entrega" => "required||date_format:Y-m-d\TH:i",
        ]);

        error_log('fecha_ingreso: ' . $arr_campo['fecha_ingreso']);
        Venta::create($arr_campo);

        return redirect()->route("venta.index");
    }

    public function edit(Venta $venta) {

        return view("venta.edit", [
            "venta" => $venta
        ]);
    }

    public function update(Venta $venta) {
        // Validar los campos
        $arr_campo = request()->validate([
            "id_servicio" => "required|min:2",
            "id_cliente" => "required|min:2",
            "id_e_supervisor" => "required|min:2",
            "id_e_operario1" => "required|min:2",
            "id_e_operario2" => "nullable|min:2",
            "id_e_operario3" => "nullable|min:2",
            "id_auto" => "required|min:2",
            "tipo_auto" => "required|min:2",
            "finalizado" => "required",
            "domicilio" => "required",
            "subtotal" => "required|min:2",
            "igv" => "required|min:2",
            "total" => "required|min:2",
            "fecha_ingreso" => "required||date_format:Y-m-d\TH:i",
            "fecha_entrega" => "required||date_format:Y-m-d\TH:i",
        ]);

        $venta->update([
            "servicio" => request("servicio"),
            "cliente" => request("cliente"),
            "e_supervisor" => request("e_supervisor"),
            "e_operario1" => request("e_operario1"),
            "e_operario2" => request("e_operario2"),
            "e_operario3" => request("e_operario3"),
            "auto" => request("auto"),
            "tipo_auto" => request("tipo_auto"),
            "finalizado" => request("finalizado"),
            "domicilio" => request("domicilio"),
            "subtotal" => request("subtotal"),
            "igv" => request("igv"),
            "total" => request("total"),
            "fecha_ingreso" => request("fecha_ingreso"),
            "fecha_entrega" => request("fecha_entrega"),
            
            
        ]);

        return redirect()->route("venta.index");
    }

    public function destroy(Venta $venta) {

        $venta->delete();

        return redirect()->route("venta.index");
    }
}
