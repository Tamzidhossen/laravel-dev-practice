<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Json;
use Symfony\Component\HttpFoundation\JsonResponse;

class DemoController extends Controller
{
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


}
