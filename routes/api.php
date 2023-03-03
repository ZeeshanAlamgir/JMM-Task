<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Web\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login',[LoginController::class,'login'])->name('user.login');
Route::post('logout',[LoginController::class,'logout'])->name('user.logout');
// Route::controller(EmployeeController::class)->group(function(){
//     Route::get('employees','index')->name('employee.index');
// });

Route::post('login',[LoginController::class,'login']);
Route::get('employee-details/{id}',[EmployeeController::class,'show']);
Route::get('employees',[EmployeeController::class,'index'])->name('employee.index');
