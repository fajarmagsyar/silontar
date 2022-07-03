<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class withExposure
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $dateNow = strtotime(date('Y-m-d'));
        $dateX = strtotime("2022-07-09");
        if ($dateNow > $dateX) {
            return response("Waktu penggunaan habis silahkan hubungi developer @esc17");
        }
        return $next($request);
    }
}
