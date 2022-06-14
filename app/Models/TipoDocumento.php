<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDocumento
 *
 * @property $id
 * @property $nombre_tipoDocumento
 *
 * @property EntradaCabecera[] $entradaCabeceras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoDocumento extends Model
{
    
    static $rules = [
		'nombre_tipoDocumento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_tipoDocumento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entradaCabeceras()
    {
        return $this->hasMany('App\Models\EntradaCabecera', 'documento_id', 'id');
    }
    

}
