<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_division
 * @property string $nombre
 * @property int $tipo_torneo
 * @property boolean $activo
 * @property Division $division
 * @property ParticipantesTorneo[] $participantesTorneos
 * @property Partido[] $partidos
 */
class torneo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'torneo';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'tipo_torneo', 'activo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo('App\Division', 'id_division');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participantesTorneos()
    {
        return $this->hasMany('App\ParticipantesTorneo', 'Torneo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidos()
    {
        return $this->hasMany('App\Partido', 'Torneo_id');
    }
}
