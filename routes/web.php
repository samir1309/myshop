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
// Route::namespace('Admin')->prefix('admin')->group(function () {

//     Route::get('/', 'ContentController@getAdmin');
    
//     });
Route::get("/admin", function(){
    return View::make("admin.index");
 });

Route::get('/', function () {
    return view('welcome');
});
