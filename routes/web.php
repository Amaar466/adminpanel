<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
  // Route::get('/hello', function () {
  //     return view('crud.hello');
  // });
//  Route::get('/show', function () {
//      return view('crud.showemployee');
//  });
 Route::get('/adddata', [EmployeeController::class,'adddata']);
 Route::post('/savedata', [EmployeeController::class,'savedata']);
 Route::get('/showdata', [EmployeeController::class,'showdata']);
 Route::get('/editpage/{id}', [EmployeeController::class,'editpage']);
 Route::post('updatestudent/{id}', [EmployeeController::class, 'update']);
 Route::get('deletepage/{id}' , [employeecontroller::class,'deletepage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
