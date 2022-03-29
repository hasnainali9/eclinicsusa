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



Route::get('/s/{id}', function($id){
    $id=base64_decode($id);
        if(is_numeric($id)){
            if(Service::where('id',$id)->first() && Service::where('id',$id)->first()->status){
                return view('services.service',['data'=>Service::where('id',$id)->first()]);
            }else{abort(404);}
        }else{abort(404);}
})->name('service.show');

Route::get('/contact-us', function () {
    return view('contact.contact');
});

Route::post('/contact-us/send', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Auth::routes(['register'=>false]);

//admin COntrolls
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/app/sliders', [App\Http\Controllers\SliderController::class, 'index'])->name('home.sliders');
Route::post('/app/sliders/store', [App\Http\Controllers\SliderController::class, 'store'])->name('home.sliders.store');
Route::post('/app/sliders/update', [App\Http\Controllers\SliderController::class, 'update'])->name('home.sliders.update');
Route::get('/app/sliders/delete/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('home.sliders.delete');
Route::get('/app/sliders/status/{status}/{id}', [App\Http\Controllers\SliderController::class, 'updateStatus'])->name('home.sliders.status.update');


Route::get('/app/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('home.services');
Route::get('/app/services/featured', [App\Http\Controllers\ServiceController::class, 'FeatureIndex'])->name('home.services.show.featured');
Route::post('/app/services/store', [App\Http\Controllers\ServiceController::class, 'store'])->name('home.services.store');
Route::post('/app/services/update', [App\Http\Controllers\ServiceController::class, 'update'])->name('home.services.update');
Route::get('/app/services/delete/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('home.services.delete');
Route::get('/app/services/status/{status}/{id}', [App\Http\Controllers\ServiceController::class, 'updateStatus'])->name('home.services.status.update');
Route::get('/app/services/status/featured/{status}/{id}', [App\Http\Controllers\ServiceController::class, 'updateFeaturedStatus'])->name('home.services.featured.status.update');


Route::get('/app/sub-services', [App\Http\Controllers\SubServicesController::class, 'index'])->name('home.SubServices');
Route::post('/app/sub-services/store', [App\Http\Controllers\SubServicesController::class, 'store'])->name('home.SubServices.store');
Route::post('/app/sub-services/update', [App\Http\Controllers\SubServicesController::class, 'update'])->name('home.SubServices.update');
Route::get('/app/sub-services/delete/{id}', [App\Http\Controllers\SubServicesController::class, 'destroy'])->name('home.SubServices.delete');
Route::get('/app/sub-services/status/{status}/{id}', [App\Http\Controllers\SubServicesController::class, 'updateStatus'])->name('home.SubServices.status.update');


Route::get('/app/testimonial', [App\Http\Controllers\TestimonialController::class, 'index'])->name('home.testimonial');
Route::post('/app/testimonial/store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('home.testimonial.store');
Route::post('/app/testimonial/update', [App\Http\Controllers\TestimonialController::class, 'update'])->name('home.testimonial.update');
Route::get('/app/testimonial/delete/{id}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('home.testimonial.delete');
Route::get('/app/testimonial/status/{status}/{id}', [App\Http\Controllers\TestimonialController::class, 'updateStatus'])->name('home.testimonial.status.update');


Route::get('/app/social-links', [App\Http\Controllers\SocialLinksController::class, 'index'])->name('home.social');
Route::post('/app/social-links/store', [App\Http\Controllers\SocialLinksController::class, 'store'])->name('home.social.store');
Route::post('/app/social-links/update', [App\Http\Controllers\SocialLinksController::class, 'update'])->name('home.social.update');
Route::get('/app/social-links/delete/{id}', [App\Http\Controllers\SocialLinksController::class, 'destroy'])->name('home.social.delete');
Route::get('/app/social-links/status/{status}/{id}', [App\Http\Controllers\SocialLinksController::class, 'updateStatus'])->name('home.social.status.update');


Route::get('/app/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('home.categories');
Route::post('/app/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('home.categories.store');
Route::post('/app/categories/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('home.categories.update');
Route::get('/app/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('home.categories.delete');
Route::get('/app/categories/status/{status}/{id}', [App\Http\Controllers\CategoryController::class, 'updateStatus'])->name('home.categories.status.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
