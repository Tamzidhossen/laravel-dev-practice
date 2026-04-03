<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*$key = $request->header('secret-key');  //Request Header
        $Body = $request->input('stock');       //Request Body
        $key = $request->key;                   //Request Parameter
        if ($key != 'key' || $Body !== 7) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }*/
        $request->headers->add(['data' => 'new-value']);  //Request Header Add
        //$request->headers->replace(['data' => 'Replace Value']);  //Request Header Replace
        return $next($request);
    }
}
