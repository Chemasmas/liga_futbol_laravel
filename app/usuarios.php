<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $createdAt
 * @property boolean $active
 * @property int $level
 * @property Administradore[] $administradores
 * @property Arbitro[] $arbitros
 * @property Jugadore[] $jugadores
 * @property Programadore[] $programadores
 */
class usuarios extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{

    public $timestamps  = false;

    use Authenticatable, Authorizable, CanResetPassword;
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['username', 'password', 'createdAt', 'active', 'level', 'remember_token', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administradores()
    {
        return $this->hasMany('App\administradores', 'idUsr');
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
