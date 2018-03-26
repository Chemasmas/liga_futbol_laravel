<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property int $tipo_torneo
 * @property boolean $activo
 * @property string $genero
 * @property boolean $es_liga
 * @property boolean $generado
 * @property int $jornada
 * @property boolean $programable
 * @property participantes_torneo[] $participantesTorneos
 * @property partidos[] $partidos
 */
class torneos extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'torneo';

    public $timestamps  = false;

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'tipo_torneo', 'activo', 'genero', 'es_liga','generado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participantesTorneos()
    {
        return $this->hasMany('App\participantes_torneo', 'Torneo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidos()
    {
        return $this->hasMany('App\partidos', 'Torneo_id');
    }
}
