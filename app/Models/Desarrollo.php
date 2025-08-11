<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desarrollo extends Model
{
    protected $table="desarrollo";
    protected $primaryKey="idDesarrollo";
    public $timestamps=false;
    protected $fillable=["titulo","historia","PES_idPES"];      
}
