<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HttpsProtocol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->secure() && App::environment('production')) {
<<<<<<< HEAD
            return redirect()->secure($request->getRequestUri());
=======
            return redirect()->secure($request->getRequestUri(), 301);
>>>>>>> c723b4f43ea133d61d45f521564aab6872471760
        }
        return $next($request);
    }
}
