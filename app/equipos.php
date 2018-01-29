<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idIst
 * @property string $nombre
 * @property string $foto
 * @property int $idDivt
 * @property string $nombreCoach
 * @property string $nombreCoachAsistente
 * @property Institucione $institucione
 * @property Division $division
 * @property ParticipantesTorneo[] $participantesTorneos
 * @property Partido[] $partidosL
 * @property Partido[] $partidosV
 */
class equipos extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'foto', 'nombreCoach', 'nombreCoachAsistente'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institucione()
    {
        return $this->belongsTo('App\Institucione', 'idIst');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo('App\Division', 'idDivt');
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
    public function partidosL()
    {
        return $this->hasMany('App\Partido', 'Local');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidosV()
    {
        return $this->hasMany('App\Partido', 'Visitante');
    }
}
