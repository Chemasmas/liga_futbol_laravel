<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $equipos_id
 * @property int $idUsr
 * @property int $idInst
 * @property string $nombre
 * @property string $fechaNac
 * @property string $documento_identidad
 * @property int $numero
 * @property string $foto
 * @property Institucione $institucione
 * @property Usuario $usuario
 * @property Equipo $equipo
 * @property EstadisticasJugador[] $estadisticasJugadors
 */
class jugadores extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['equipos_id', 'nombre', 'fechaNac', 'documento_identidad', 'numero', 'foto'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institucione()
    {
        return $this->belongsTo('App\instituciones', 'idInst');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\usuarios', 'idUsr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo('App\equipos', 'equipos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estadisticasJugadors()
    {
        return $this->hasMany('App\EstadisticasJugador', 'idJugador');
    }
}
