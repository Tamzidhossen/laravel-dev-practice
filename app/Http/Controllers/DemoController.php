<?php

namespace App\Http\Controllers;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DemoController extends Controller
{
    public function __construct()
    {
        echo "Constructor Executed". PHP_EOL;
    }

    public function Demo1(): JsonResponse
    {
        return response()->json(['Message' => 'Demo1 Executed'], 201);
    }

    public function Demo2(): JsonResponse
    {
        return response()->json(['Message' => 'Demo2 Executed'], 201);
    }
    public function Demo3(): JsonResponse
    {
        return response()->json(['Message' => 'Demo3 Executed'], 201);
    }

    public function Demo4(Request $request): Array
    {
        return $request->headers->all();
    }


}
