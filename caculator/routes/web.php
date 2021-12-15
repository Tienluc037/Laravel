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
Route::get('/product', function () {
    return view('Product');
});

Route::post('/product', function (Illuminate\Http\Request $request) {
    if (!empty($request->price && $request->precent)) {
        $result = $request->price* $request->precent*0.1;
        return view ('result',compact('result'));
    }
});
