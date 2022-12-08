<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscriptionsgr
 *
 * @property $id
 * @property $fecha
 * @property $tipo_pag
 * @property $doc_pago
 * @property $total
 * @property $id_juego
 * @property $id_equipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Game $game
 * @property Team $team
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscriptionsgr extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'tipo_pag' => 'required',
		'doc_pago' => 'required',
		'total' => 'required',
		'id_juego' => 'required',
		'id_equipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','tipo_pag','doc_pago','total','id_juego','id_equipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function game()
    {
        return $this->hasOne('App\Models\Game', 'id', 'id_juego');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'id_equipo');
    }
    

}
