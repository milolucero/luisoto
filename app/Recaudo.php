<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recaudo extends Model {
    
    protected $fillable = [
        'id_fuentes', 'id', 'tipo', 'cuenta', 'documento', 'valor_neto_1', 'fecha_max_recaudo_1', 'valor_neto_2', 'fecha_max_recaudo_2', 'valor_neto_3', 'fecha_max_recaudo_3', 'nombre', 'direccion_inmueble', 'ciudad_inmueble', 'mes_a_pagar', 'año_mes_a_pagar', 'valor_canon_mensual', 'valor_iva_canon', 'valor_administracion', 'valor_servicios', 'gastos_bancarios', 'valor_retefuente', 'valor_retencion_iva', 'valor_retencion_ica', 'valor_retencion_cree', 'email', 'notification', 
    ];
}
