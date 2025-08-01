<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soundtrack extends Model
{
    protected $table="soundtrack";
    protected $primaryKey="idSoundtrack";
    public $timestamps=false;
    protected $fillable=["Titulo","Artista","Link_del_audio","PES_idPES"];

    public function pes()
    {
        return $this->belongsTo(PES::class, 'PES_idPES', 'idPES');
    }

}
