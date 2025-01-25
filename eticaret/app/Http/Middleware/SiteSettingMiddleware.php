<?php

namespace App\Http\Middleware;

use Closure;

class SiteSettingMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        // Middleware'in kontrol edeceği işlem (örnek)
        if (true) { // Şart kontrolü örneği
            return $next($request);
        }

        // Şart sağlanmazsa geri dönecek cevap (örnek)
        return redirect('/');
    }
}
