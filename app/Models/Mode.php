<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mode
 *
 * @property $id
 * @property $tipo
 * @property $id_juego
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mode extends Model
{
    
    static $rules = [
		'tipo' => 'required',
		'id_juego' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo','id_juego'];



}
