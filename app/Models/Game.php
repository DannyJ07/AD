<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 *
 * @property $id
 * @property $nombre
 * @property $reglas
 * @property $aula
 * @property $valor
 * @property $id_categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property Inscriptionsgr[] $inscriptionsgrs
 * @property Inscriptionsin[] $inscriptionsins
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Game extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'reglas' => 'required',
		'aula' => 'required',
		'valor' => 'required',
		'id_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','reglas','aula','valor','id_categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsgrs()
    {
        return $this->hasMany('App\Models\Inscriptionsgr', 'id_juego', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscriptionsins()
    {
        return $this->hasMany('App\Models\Inscriptionsin', 'id_juego', 'id');
    }
    

}
