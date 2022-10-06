<?php

use Illuminate\Support\Facades\Artisan;
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

// Route::get('/domain/{add}', function () {

//     Artisan::call('domain:add'); // command
//     //dd("Done!!!");
// });

Route::get('/domain/{domain}', function ($domain) {
    $exitCode = Artisan::call('domain:add', [
        'domain' => $domain
    ]);

    return "Domain Added successfully";

});
