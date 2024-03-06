<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

// use app\Http\Controller\formController;

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
// Route::get('first', function () {
//     return view('first');
// });

Route::get('register', [formController::class, 'create']);
Route::post('register', [formController::class, 'store']);