<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;


Route::get('/test', function () {
    return response()->json([
        'message' => 'Laravel API OK',
    ]);
});


Route::apiResource('products', ProductController::class);