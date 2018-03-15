<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property string $dir
 * @property string $mapa
 * @property string $escudo
 * @property boolean $activo
 * @property equipos[] $equipos
 * @property jugadores[] $jugadores
 * @property programadores[] $programadores
 */
class instituciones extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'dir', 'mapa', 'escudo','activo'];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipos()
    {
        return $this->hasMany('App\Equipo', 'idIst');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jugadores()
    {
        return $this->hasMany('App\jugadores', 'idInst');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programadores()
    {
        return $this->hasMany('App\Programadore', 'idInst');
    }
}
