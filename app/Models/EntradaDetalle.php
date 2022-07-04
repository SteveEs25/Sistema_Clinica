<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EntradaDetalle
 *
 * @property $id
 * @property $entradaCabecera_id
 * @property $producto_id
 * @property $cantidad_pedido
 * @property $cantidad_entregada
 * @property $precio_unitario
 * @property $precio_total
 * @property $monto_totalPedido
 * @property $monto_totalEntregado
 * @property $fecha_vencimiento
 * @property $lote
 * @property $created_at
 * @property $updated_at
 *
 * @property EntradaCabecera $entradaCabecera
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EntradaDetalle extends Model
{
    
    static $rules = [
		'entradaCabecera_id' => 'required',
		'producto_id' => 'required',
		'cantidad_pedido' => 'required',
		'cantidad_entregada' => 'required',
		'precio_unitario' => 'required',
		'precio_total' => 'required',
		'monto_totalPedido' => 'required',
		'monto_totalEntregado' => 'required',
		'fecha_vencimiento' => 'required',
		'lote' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entradaCabecera_id','producto_id','cantidad_pedido','cantidad_entregada','precio_unitario','precio_total','monto_totalPedido','monto_totalEntregado','fecha_vencimiento','lote'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entradaCabecera()
    {
        return $this->hasOne('App\Models\EntradaCabecera', 'id', 'entradaCabecera_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    

}
