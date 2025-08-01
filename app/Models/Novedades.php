<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novedades extends Model
{
    protected $table="novedades";
    protected $primarykey="idNovedades";
    public $timestamps=false;
    protected $fillable=["Novedades","Usuario_idUsuario"];
}
