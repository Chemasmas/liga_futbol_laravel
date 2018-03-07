<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idIst
 * @property string $nombre
 * @property string $nombreCoach
 * @property string $nombreCoachAsistente
 * @property string $genero
 * @property Institucione $institucione
 * @property Jugadore[] $jugadores
 * @property ParticipantesTorneo[] $participantesTorneos
 * @property Partido[] $partidos
 * @property boolean $activo

 */
class equipos extends Model
{

    public $timestamps  = false;
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'nombreCoach', 'nombreCoachAsistente', 'genero', 'activo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institucione()
    {
        return $this->belongsTo('App\instituciones', 'idIst');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jugadores()
    {
        return $this->hasMany('App\Jugadore', 'equipos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participantesTorneos()
    {
        return $this->hasMany('App\ParticipantesTorneo', 'Equipos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidos()
    {
        return $this->hasMany('App\Partido', 'Local');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
}
