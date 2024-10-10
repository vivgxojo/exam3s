<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/',  function () {
    return view('index');
});

Route::get('/submit', function () {
    $name = request("nom");
    $password = request("password");
    $commentaire = request("commentaire");
    return view('index',[
        "name" => $name ,
        "password" => $password ,
        "commentaire" => $commentaire
    ]);
});
