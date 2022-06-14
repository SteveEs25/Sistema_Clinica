<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre_proveedor
 * @property $direccion
 * @property $telefono
 * @property $ciudad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @property EntradaCabecera[] $entradaCabeceras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre_proveedor' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'ciudad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_proveedor','direccion','telefono','ciudad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'ciudad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entradaCabeceras()
    {
        return $this->hasMany('App\Models\EntradaCabecera', 'proveedor_id', 'id');
    }
    

}
