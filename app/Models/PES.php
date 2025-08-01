<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PES extends Model
{
    protected $table="pes";
    protected $primaryKey="idpes";
    public $timestamps=false;
    protected $fillable = ["nombre", "fecha_lanzamiento", "peso", "descripcion", "valoracion", "link_descarga"];

    public function soundtracks()
    {
        return $this->hasMany(Soundtrack::class, 'pes_idpes', 'idpes');
    }
}
