<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 #auditorias controller
 Route::controller(UsuariosController::class)->group(function () {
    $endpoint='/usuarios';
    Route::get($endpoint, 'index');
   
});
