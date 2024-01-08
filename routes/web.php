<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('guest.index');
});

Route::get('/map',[IndexController::class,'map']);
Route::view('/test','test');
Route::view('/blog','guest.blog');
Route::view('/about','guest.about');

Route::view('/contact','guest.contact');
Route::get('/details/{company}',[IndexController::class,'details']);

Route::get('/{slug}',[IndexController::class,'provincie']);
Route::get('/{regio_slug}/{city}', [IndexController::class, 'percity']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
