<?php

use App\Http\Controllers\PhotoController;
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










Route::get('/busca-usuario/{name}/{lastname?}',function($name,$lastname = "doe"){

    return  "User: ".$name. "" .$lastname;

}) ->whereAlpha(["name","lastname"]);





Route::get('/{operacion}/{num1}/{num2}',function($operacion,$num1,$num2)
{
    if($operacion === "suma" ) {

        return "<h1>" . $num1 + $num2 . "</h1>";
        
    };

    if($operacion === "resta" ) {

        return "<h1>" . $num1 - $num2 . "</h1>";
        
    };

    if($operacion === "multiplicacion" ) {

        return "<h1>" . $num1 * $num2 . "</h1>";
        
    };

    if($operacion === "division" ) {

        return "<h1>" . $num1 / $num2 . "</h1>";
        
    };




    

    


     

}) ->where(['num1' => '[0-9]+', 'num2' => '[0-9]+'])
    ->whereAlpha("operacion");


    Route::get('/prueba/{name}', function ($name) {
        return view('prueba',["name"=> $name]);
    })->whereAlpha("name");



    Route::get('/control/{name}',[PhotoController::class,'index']);


