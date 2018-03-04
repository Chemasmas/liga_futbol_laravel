<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idUsr
 * @property int $idInst
 * @property string $nombre
 * @property string $correo
 * @property string $telefono
 * @property instituciones $institucione
 * @property usuarios $usuario
 */
class programadores extends Model
{
    public $timestamps  = false;

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'correo', 'telefono'];

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
}
