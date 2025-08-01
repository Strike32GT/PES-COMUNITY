<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{   
    use Notifiable;
    protected $table="usuario";
    protected $primaryKey="idusuario";
    public $timestamps=false;
    protected $fillable = ["nombre", "apellido", "email", "password", "rol", "fecha_creacion"];
    protected $hidden=["password","remember_token",];
    
    public function getAuthPassword()
    {
        return $this->password;
    }

}
