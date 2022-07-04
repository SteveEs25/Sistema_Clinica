<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre_producto
 * @property $observacion
 * @property $nombre_comercial
 * @property $tipoProducto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Inventario[] $inventarios
 * @property TipoProducto $tipoProducto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre_producto' => 'required',
		'observacion' => 'required',
		'nombre_comercial' => 'required',
		'tipoProducto_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_producto','observacion','nombre_comercial','tipoProducto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoProducto()
    {
        return $this->hasOne('App\Models\TipoProducto', 'id', 'tipoProducto_id');
    }
    

}
