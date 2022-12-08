<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $cedula
 * @property $correo
 * @property $telefono
 * @property $id_equipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Inscriptionsin[] $inscriptionsins
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Participant extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'cedula' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
		'id_equipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','cedula','correo','telefono','id_equipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsins()
    {
        return $this->hasMany('App\Models\Inscriptionsin', 'id_participante', 'id');
    }
    

}
