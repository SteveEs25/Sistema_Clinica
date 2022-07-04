<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoProducto
 *
 * @property $id
 * @property $nombre_tipoProducto
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoProducto extends Model
{
    
    static $rules = [
		'nombre_tipoProducto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_tipoProducto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'tipoProducto_id', 'id');
    }
    

}
