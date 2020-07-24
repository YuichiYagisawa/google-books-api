<?php

use App\Http\Controllers\testController;
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
    return view('input', 'testController@input');
});

Route::get('/', 'testController@input');

// Route::get('/input', function () {
//     return view('input');
// });

Route::get('result', 'testController@result');

Route::get('detail', 'testController@detail');

Route::get('detail/{id}', 'testController@book_detail');

Route::post('store', 'testController@store');
