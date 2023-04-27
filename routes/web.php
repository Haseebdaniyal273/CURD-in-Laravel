<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});





Route::get('/insertform',function()
{
    return view('/insertform');
});





Route::get('/viewform', [App\Http\Controllers\Examplecontroller::class, 'examplefunction']);



Route::get('/delete',[App\Http\Controllers\Examplecontroller::class, 'deletedata']);



Route::post('/insertDatatoDB',[App\Http\Controllers\Examplecontroller::class,'insertDatatoDB']);

