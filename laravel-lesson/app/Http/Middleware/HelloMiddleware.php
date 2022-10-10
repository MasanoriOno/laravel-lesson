<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        $data = [
            ['name' => 'taro1', 'mail' => 'taro@yamada1'],
            ['name' => 'taro2', 'mail' => 'taro@yamada2'],
            ['name' => 'taro3', 'mail' => 'taro@yamada3'],
        ];
        $request->merge(['data' => $data]);
        return $next($request);
    }
}
