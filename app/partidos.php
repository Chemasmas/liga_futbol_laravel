<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $Torneo_id
 * @property int $Local
 * @property int $Visitante
 * @property int $marcadorLocal
 * @property int $marcadorVisitante
 * @property string $horaDeJuego
 * @property string $notas
 * @property string $campo
 * @property Equipo $equipo
 * @property Equipo $equipo
 * @property Torneo $torneo
 */
class partidos extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['marcadorLocal', 'marcadorVisitante', 'horaDeJuego', 'notas', 'campo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo('App\Equipo', 'Local');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo('App\Equipo', 'Visitante');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function torneo()
    {
        return $this->belongsTo('App\Torneo', 'Torneo_id');
    }
}
