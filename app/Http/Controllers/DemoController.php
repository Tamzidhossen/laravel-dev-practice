<?php

namespace App\Http\Controllers;

use App\Traits\demoTrait;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DemoController extends Controller
{
    use demoTrait;
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
        return $this->success(201, 'Demo3 Executed');
    }

    public function Demo4(Request $request): Array
    {
        return $request->headers->all();
    }


}
