<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property string $genero
 * @property int $orden
 * @property Equipo[] $equipos
 * @property Torneo[] $torneos
 */
class division extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'division';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'genero', 'orden'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipos()
    {
        return $this->hasMany('App\Equipo', 'idDivt');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function torneos()
    {
        return $this->hasMany('App\Torneo', 'id_division');
    }
}
