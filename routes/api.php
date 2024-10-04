<?php

use App\Http\Controllers\EmployeeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Get all employees
Route::get('employees',[EmployeeController::class,'getEmployee']);

//Get specific employee

Route::get('employee/{id}',[EmployeeController::class,'getEmployeeById']);

//Add Employee

Route::post('addEmployee',[EmployeeController::class,'addEmployee']);

//update Employee
Route::put('updateEmployee/{id}',[EmployeeController::class,'updateEmployee']);

Route::delete('deleteEmployee/{id}',[EmployeeController::class,'deleteEmployee']);