<?php

namespace App\Http\Middleware;

use Closure;

class supervisorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $tipo)
    {   
        
        if ($request->user()->id_tipo_usuario == $tipo) {
                abort(403, "¡acceso denegado");
        }
        return $next($request);

    }
}
