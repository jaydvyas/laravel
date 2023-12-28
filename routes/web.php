<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("msg",function(){
   return "Hello, Laravel!";
});

Route::get("form",function(){
    return view("addBooks");
});

Route::get("download{file}",[BooksController::class,"download"])->name("download");

Route::get("/view/{id}",function($id){
    return view("view",["file"=>$id]);
})->name("view");
