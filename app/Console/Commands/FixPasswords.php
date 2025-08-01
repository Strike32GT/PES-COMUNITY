<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class FixPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fix-passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $usuarios=Usuario::all();
        $contador=0;
        foreach ($usuarios as $usuario){
            $password = $usuario->Password;
            if(!str_starts_with($password, '$2y$')) {
                $usuario->Password = Hash::make($password);
                $usuario->save();
                $contador++;
                $this->info("Contraseña del usuario {$usuario->Email} actualizada.");
            }
        }
        $this->info("Total de contraseñas actualizadas: {$contador}");
    }
}
