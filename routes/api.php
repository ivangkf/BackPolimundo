<?php
use App\Http\Controllers\EmployedController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/personas/empleado',[EmployedController::class,'getEmpleados']);
Route::get('/personas/empleado/{id}',[EmployedController::class,'getEmpleadoFilter']);

Route::get('/personas/usuario',[UserController::class,'getUsuarios']);
Route::get('/personas/usuario/{id}',[UserController::class,'getUsuariosFilter']);
