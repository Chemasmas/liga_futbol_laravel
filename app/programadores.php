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
 * @property Institucione $institucione
 * @property Usuario $usuario
 */
class programadores extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'correo', 'telefono'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institucione()
    {
        return $this->belongsTo('App\Institucione', 'idInst');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idUsr');
    }
}
