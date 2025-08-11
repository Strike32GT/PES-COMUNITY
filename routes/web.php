<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SoundtrackController;
use App\Http\Controllers\DesarrolloController;
use App\Http\Controllers\NovedadesController;
use App\Http\Controllers\PESController;
use App\Http\Controllers\ValoracionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',function (){
    return redirect()->route('dashboard');
});





Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest') 
        ->name('login');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
        ->name('logout');


Route::resource('usuarios',UsuarioController::class);
Route::resource('soundtracks',SoundtrackController::class);
Route::resource('desarrollos',DesarrolloController::class);
Route::resource('novedades',NovedadesController::class);
Route::resource('sagas',PESController::class);
Route::resource('valoraciones',ValoracionController::class);

Route::get('/sagas/{id}/soundtracks', [PESController::class, 'verSoundtracks'])
    ->name('sagas.soundtracks');

Route::get('/admin/usuarios',[UsuarioController::class,'indexAdmin'])->name('usuarios.list');    


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [PESController::class, 'mostrarJuegos'])->name('dashboard');
});
