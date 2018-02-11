<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $createdAt
 * @property boolean $active
 * @property int $level
 * @property string $remember_token
 * @property string $updated_at
 * @property Administradore[] $administradores
 * @property Arbitro[] $arbitros
 * @property Jugadore[] $jugadores
 * @property Programadore[] $programadores
 */
class usuarios extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['username', 'password', 'createdAt', 'active', 'level', 'remember_token', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administradores()
    {
        return $this->hasMany('App\Administradore', 'idUsr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function arbitros()
    {
        return $this->hasMany('App\Arbitro', 'idUsr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jugadores()
    {
        return $this->hasMany('App\Jugadore', 'idUsr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programadores()
    {
        return $this->hasMany('App\Programadore', 'idUsr');
    }
}
