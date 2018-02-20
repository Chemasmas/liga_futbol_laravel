<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $Torneo_id
 * @property int $Equipos_id
 * @property int $PartidosJugados
 * @property int $PartidosGanados
 * @property int $PartidosEmpatados
 * @property int $GolesFavor
 * @property int $GolesContra
 * @property int $DiferenciaGoles
 * @property int $Puntos
 * @property Equipo $equipo
 * @property Torneo $torneo
 */
class participantes_torneo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'participantes_torneo';

    /**
     * @var array
     */
    protected $fillable = ['PartidosJugados', 'PartidosGanados', 'PartidosEmpatados', 'GolesFavor', 'GolesContra', 'DiferenciaGoles', 'Puntos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo('App\equipos', 'Equipos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function torneo()
    {
        return $this->belongsTo('App\Torneo', 'Torneo_id');
    }
}
