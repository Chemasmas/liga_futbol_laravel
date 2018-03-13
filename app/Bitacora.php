<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idJ
 * @property int $idE
 * @property int $idP
 * @property int $idT
 * @property int $goles
 * @property int $amarillas
 * @property int $rojas
 * @property jugadores $jugadore
 * @property equipos $equipo
 * @property partidos $partido
 * @property torneos $torneo
 */
class Bitacora extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bitacora';

    /**
     * @var array
     */
    protected $fillable = ['idJ', 'idE', 'idP', 'idT', 'goles', 'amarillas', 'rojas'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jugadore()
    {
        return $this->belongsTo('App\jugadores', 'idJ');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo('App\equipos', 'idE');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partido()
    {
        return $this->belongsTo('App\partidos', 'idP');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function torneo()
    {
        return $this->belongsTo('App\torneos', 'idT');
    }
}
