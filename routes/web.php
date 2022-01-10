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
})->name('welcome');


Route::get('/pricing', function () {
    return view('plans.pricing');
});


Route::get('/p/{slug}', [App\Http\Controllers\PageController::class, 'show'])->name('page.show');



Route::get('/s/{id}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');

Route::get('/contact-us', function () {
    return view('contact.contact');
});

Route::post('/contact-us/send', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Auth::routes(['register'=>false]);

//admin COntrolls
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/app/sliders', [App\Http\Controllers\SliderController::class, 'index'])->name('home.sliders');
Route::post('/app/sliders/store', [App\Http\Controllers\SliderController::class, 'store'])->name('home.sliders.store');
Route::post('/app/sliders/update', [App\Http\Controllers\SliderController::class, 'store'])->name('home.sliders.update');
Route::get('/app/sliders/delete/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('home.sliders.delete');
Route::get('/app/sliders/status/{status}/{id}', [App\Http\Controllers\SliderController::class, 'updateStatus'])->name('home.sliders.status.update');


