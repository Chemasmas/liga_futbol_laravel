<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idJugador
 * @property int $goles
 * @property int $t_rojas
 * @property int $t_amarillas
 * @property Jugadore $jugadore
 */
class estadisticas_jugador extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'estadisticas_jugador';

    /**
     * @var array
     */
    protected $fillable = ['goles', 't_rojas', 't_amarillas'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jugadore()
    {
        return $this->belongsTo('App\Jugadore', 'idJugador');
    }
}
