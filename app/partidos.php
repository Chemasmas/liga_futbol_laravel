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
 * @property int $jornada
 * @property Equipo $equipol
 * @property Equipo $equipov
 * @property Torneo $torneo
 */
class partidos extends Model
{

    public $timestamps  = false;

    /**
     * @var array
     */
    protected $fillable = ['Local','Visitante','Torneo_id','marcadorLocal', 'marcadorVisitante', 'horaDeJuego', 'notas', 'campo','jornada'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipol()
    {
        return $this->belongsTo('App\equipos', 'Local');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipov()
    {
        return $this->belongsTo('App\equipos', 'Visitante');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function torneo()
    {
        return $this->belongsTo('App\torneos', 'Torneo_id');
    }
}
