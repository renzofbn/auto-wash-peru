<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Venta extends Model
{
    use HasFactory;

    protected $table = "tb_venta";

    protected $fillable =['servicio','auto','cliente','e_supervisor','e_operario1','e_operario2','e_operario3','tipo_auto','finalizado','domicilio','subtotal','igv','total','fecha_ingreso','fecha_entrega'];
    
    public function servicio(){
        return $this->belongsTo('App\Models\Servicio','id_servicio');
    }
    public function auto(){
        return $this->belongsTo('App\Models\Auto','id_auto');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
    public function e_supervisor(){
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
    public function e_operario1(){
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
    public function e_operario2(){
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
    public function e_operario3(){
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
    
    
    protected $date_ingreso = ['fecha_ingreso'];

    protected $date_entrega = ['fecha_entrega'];

    public function estadoFinalizado(){
        return $this->finalizado == 1 ? 'Si' : 'No';
    }

    public function esntregaDomicilio(){
        return $this->domicilio == 1 ? 'Si' : 'No';
    }

    
}

