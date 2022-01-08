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


Route::get('/pricing', function () {
    return view('plans.pricing');
});
Route::get('/why-us', function () {
    return view('plans.pricing');
});
Route::get('/about-us', function () {
    return view('plans.pricing');
});
Route::get('/contact-us', function () {
    return view('contact.contact');
});

Route::post('/contact-us/send', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Auth::routes(['register'=>false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
