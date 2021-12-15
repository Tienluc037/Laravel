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
Route::get('/dictionary', function (){
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request){
    switch ($request->name){
        case "cat":
            echo "mèo";
            break;
        case "chicken";
            echo "Thịt gà";
            break;
        case "book":
            echo "sách";
            break;
        default:
            echo 'Chịu thôi:))';
    }
});
