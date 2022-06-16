<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $id
 * @property $nombre_estado
 *
 * @property EntradaCabecera[] $entradaCabeceras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Estado extends Model
{
    static $rules = [
		'nombre_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entradaCabeceras()
    {
        return $this->hasMany('App\Models\EntradaCabecera', 'estado_id', 'id');
    }
}
