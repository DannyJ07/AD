<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Inscriptionsgr[] $inscriptionsgrs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsgrs()
    {
        return $this->hasMany('App\Models\Inscriptionsgr', 'id_equipo', 'id');
    }
    

}
