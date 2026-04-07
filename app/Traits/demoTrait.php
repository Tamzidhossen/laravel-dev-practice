<?php
    
namespace App\Traits;

use Symfony\Component\HttpFoundation\JsonResponse;

trait demoTrait
{
   // Your trait methods go here
   public function success($code = 201, $message = null, $data = []): JsonResponse
   {
      return response()->json([
         'success' => (bool) true,
         'code' => $code,
         'message' => $message,
         'data' => $data,
         'timestamp' => now()->toIso8601String() . ' GMT' . now()->format('P'),
      ], $code);
   }

   public function error($code = 500, $message = null, $error = []): JsonResponse
   {
      return response()->json([
         'status' => (bool) false,
         'code' => $code,
         'message' => $message,
         'error' => $error,
         'timestamp' => now()->toIso8601String() . ' GMT' . now()->format('P'),
      ], $code);
   }
}
