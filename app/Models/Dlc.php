<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dlc extends Model
{
    protected $table = "dlc";
    protected $primaryKey = "id_dlc";
    public $timestamps = false;
    protected $fillable = ["titulo", "etiqueta","descripcion","link_dlc"];
}
