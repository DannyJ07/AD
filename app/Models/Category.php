<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Game[] $games
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'id_categoria', 'id');
    }
    

}
