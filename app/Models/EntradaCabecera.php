<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EntradaCabecera
 *
 * @property $id
 * @property $direccion_entrega
 * @property $fecha_pedido
 * @property $fecha_recibido
 * @property $numero_factura
 * @property $proveedor_id
 * @property $documento_id
 * @property $estado_id
 *
 * @property Estado $estado
 * @property Proveedore $proveedore
 * @property TipoDocumento $tipoDocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EntradaCabecera extends Model
{
    
    static $rules = [
		'direccion_entrega' => 'required',
		'fecha_pedido' => 'required',
		'fecha_recibido' => 'required',
		'numero_factura' => 'required',
		'proveedor_id' => 'required',
		'documento_id' => 'required',
		'estado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion_entrega','fecha_pedido','fecha_recibido','numero_factura','proveedor_id','documento_id','estado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoDocumento()
    {
        return $this->hasOne('App\Models\TipoDocumento', 'id', 'documento_id');
    }
    

}
