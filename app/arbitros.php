<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idUsr
 * @property string $nombre
 * @property string $telefono
 * @property string $foto
 * @property Usuario $usuario
 */
class arbitros extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'telefono', 'foto'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Usuarios', 'idUsr');
    }
    public $timestamps  = false;
}
