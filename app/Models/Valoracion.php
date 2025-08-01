<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    protected $table="valoraciones";
    protected $primarykey="idValoraciones";
    public $timestamps=false;
    protected $fillable=["Estrellas","Comentario","Fecha_Publicada","PES_idPES","Usuario_idUsuario"];
}
