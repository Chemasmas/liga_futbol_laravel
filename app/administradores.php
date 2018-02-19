<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idUsr
 * @property boolean $isSuper
 * @property string $nombre
 * @property string $correo
 * @property string $telefono
 * @property Usuario $usuario
 */
class administradores extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['isSuper', 'nombre', 'correo', 'telefono'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\usuarios', 'idUsr');
    }
    public $timestamps  = false;
}
