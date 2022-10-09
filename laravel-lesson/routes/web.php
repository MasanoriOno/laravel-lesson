<?php

use App\Http\Controllers\HelloController;
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

// Route::get('hello', function () {
//     return "<html><body><h1>Hello</h1><p>This is sumple page .</p></body></html>";
// });

// Route::get('hello/{msg}', function ($msg) {
//     return "<p>$msg</p>";
// });

// Route::get('hello/{msg?}', function ($msg = 'no message.') {
//     return "<p>$msg</p>";
// });

// Route::get('hello/{msg1}/{msg2}', function ($msg1, $msg2) {
//     return "<p>$msg1</p><br><p>$msg2</p>";
// });

// Route::get('hello', [HelloController::class, 'index']);

Route::get('hello', HelloController::class);

// Route::get('hello/{id?}/{pass?}', [HelloController::class, 'index']);

// Route::get('hello/other', [HelloController::class, 'other']);
