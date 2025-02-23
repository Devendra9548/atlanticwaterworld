<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WebSafty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->pass == 129) {
            session()->put('userid', 129);
        }

        if (session()->get('userid') == 129) {
            return $next($request);
        }

        if ($request->pass == 'admin@9548') {
            session()->put('userid', 'admin@9548');
        }

        if (session()->get('userid') == 'admin@9548') {
            return redirect('/dev');
        }

        // Redirect to the /safty route if no conditions are met
        return redirect('/safty');
    }
}
