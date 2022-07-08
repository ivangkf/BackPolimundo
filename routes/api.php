<?php
use App\Http\Controllers\EmployedController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/personas/empleado',[EmployedController::class,'getEmpleados']);
Route::get('/personas/empleado/{id}',[EmployedController::class,'getEmpleadoFilter']);

Route::get('/personas/usuario',[UserController::class,'getUsuarios']);
Route::get('/personas/usuario/{id}',[UserController::class,'getUsuariosFilter']);
