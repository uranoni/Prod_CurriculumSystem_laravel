<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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


Route::get('welcome', function (Request $request) {
    $locale = Str::of($request->server('HTTP_ACCEPT_LANGUAGE'))->explode(',')->first();
    App::setLocale($locale);
    return view('welcome');

});
