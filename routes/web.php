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

Route::view('/test','test');

Route::get('/map',[IndexController::class,'map']);
Route::get('/blog',[IndexController::class,'blog'])->name('blog');
Route::get('/over-ons',[IndexController::class,'about'])->name('about');
route::get('/registreren',[IndexController::class,'register'])->name('register');

Route::get('/contact',[IndexController::class,'contact'])->name('contact');
Route::get('/details/{company}',[IndexController::class,'details'])->name('details');

Route::get('/{slug}',[IndexController::class,'provincie']);
Route::get('/{regio_slug}/{city}', [IndexController::class, 'percity'])->name('percity');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
