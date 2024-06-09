<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $country = [
            'UK',
            'US',
            'CN',
            'JP',
            'KR',
            'TW',
            'SG',
            'MY',
            'PS',
        ];
        // if (!in_array($request->country, $country) && !request()->is('unavailable')){
        // if (!in_array($request->country, $country)){
        //     // return redirect()->route('unavailable');
        //     return response()->json([
        //         'message' => 'Country not supported',
        //         ], 403);
        //     }
        return $next($request);
    }
}
