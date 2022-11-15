<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::controller(FrontendController::class)->group(function (){
    Route::get('/', 'Index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/login', 'Index')->name('login');
    Route::get('/register', 'Index')->name('register');
    Route::get('/terms_of_service', 'terms')->name('user.terms');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/page/{id}', 'Index');
    // Route::get('/contact', 'Index')->name('contact-submit');
    // Route::get('/contact', 'ContactPage')->name('contact');
    // Route::post('/contact/Store', 'ContactStore')->name('contact.store');
    Route::get('faqs', 'Faq')->name('faqs');
});

Route::controller(ContactController::class)->group(function (){
    Route::get('/contact', 'ContactPage')->name('contact');
    Route::post('/contact/Store', 'ContactStore')->name('contact.store');
});


Route::controller(AdminController::class)->group(function (){
    Route::get('/admin/dashboard', 'admin_dashboard')->name('admin.dashboard');
    // Route::post('/contact/Store', 'ContactStore')->name('contact.store');
});




Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(UsersController::class)->group(function (){
        Route::get('/dashboard', 'Dashboard')->name('dashboard');
    });
    
});





require __DIR__.'/auth.php';
