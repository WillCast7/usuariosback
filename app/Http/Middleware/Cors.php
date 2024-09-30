<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors{
    public function handle(Request $request, Closure $next): Response{
        return $next($request)
        ->header("Access-Control-Allow-Origin", "*") // Cambia "*" por el dominio específico si es necesario
        ->header("Access-Control-Allow-Methods", "GET, POST, PATCH, PUT, DELETE, OPTIONS") // Agrega PATCH aquí
        ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization");
    }
}
