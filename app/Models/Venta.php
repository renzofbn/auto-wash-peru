<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Venta extends Model
{
    use HasFactory;

    protected $table = "tb_venta";

    protected $fillable =['id_servicio',
        'id_auto','id_cliente',
        'id_e_supervisor',
        'id_e_operario1',
        'id_e_operario2',
        'id_e_operario3',
        'tipo_auto',
        'finalizado',
        'domicilio',
        'subtotal',
        'igv',
        'total',
        'fecha_ingreso',
        'fecha_entrega'];
    
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
        return $this->belongsTo('App\Models\Empleado','id_e_supervisor');
    }
    public function e_operario1(){
        return $this->belongsTo('App\Models\Empleado','id_e_operario1');
    }
    public function e_operario2(){
        return $this->belongsTo('App\Models\Empleado','id_e_operario2');
    }
    public function e_operario3(){
        return $this->belongsTo('App\Models\Empleado','id_e_operario3');
    }
    
    
    protected $date_ingreso = ['fecha_ingreso'];

    protected $date_entrega = ['fecha_entrega'];

    public function mostrar_tipo_auto(){
        if($this->tipo_auto == 1){
            return 'Auto';
        }elseif($this->tipo_auto == 2){
            return 'Camioneta';
        }elseif($this->tipo_auto == 3){
            return 'Minivan';
        }elseif($this->tipo_auto == 4){
            return 'Van';
        }
    }

    public function estadoFinalizado(){
        return $this->finalizado == 1 ? 'Si' : 'No';
    }

    public function esntregaDomicilio(){
        return $this->domicilio == 1 ? 'Si' : 'No';
    }

    
}

