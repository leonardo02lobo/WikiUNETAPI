<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/status', function() {
    return response()->json(['status' => 'API funcionando correctamente']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('/me', [AuthController::class, 'me']);

    Route::get('/profile', function (Request $request) {
        return response()->json([
            'message' => 'Acceso permitido',
            'user' => $request->user(),
        ]);
    });
});
