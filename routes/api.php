<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VolcanoController;  //viene de VolcanoController.php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });






// Route::get("/volcanos",function (Request $request) {
//     $message = ['mensaje' => "Volcanes Read"];
//     return response()->json($message);
// });//retorna mensaje

Route::get("/saludo",function (Request $request) {
    $message = ['mensaje' => "Hola Mundo !!!"];
    return response()->json($message);
});

//API Volcanes************************************************

Route::get("/volcanos", [VolcanoController::class,'read']);

Route::post("/volcano",[VolcanoController::class,'create']); //ojo con el singular q viene d

Route::put("/volcano",[VolcanoController::class,'update']);

Route::delete("/volcano",[VolcanoController::class,'delete']);