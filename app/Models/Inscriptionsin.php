<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscriptionsin
 *
 * @property $id
 * @property $fecha
 * @property $tipo_pag
 * @property $doc_pago
 * @property $total
 * @property $id_juego
 * @property $id_participante
 * @property $created_at
 * @property $updated_at
 *
 * @property Game $game
 * @property Participant $participant
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscriptionsin extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'tipo_pag' => 'required',
		'doc_pago' => 'required',
		'total' => 'required',
		'id_juego' => 'required',
		'id_participante' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','tipo_pag','doc_pago','total','id_juego','id_participante'];


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
    public function participant()
    {
        return $this->hasOne('App\Models\Participant', 'id', 'id_participante');
    }
    

}
