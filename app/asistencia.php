<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $partidos_id
 * @property int $jugadores_id
 * @property partidos $partido
 * @property jugadores $jugadore
 */
class asistencia extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'asistencia';

    public $timestamps  = false;

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partido()
    {
        return $this->belongsTo('App\partidos', 'partidos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jugadore()
    {
        return $this->belongsTo('App\jugadores', 'jugadores_id');
    }
}
