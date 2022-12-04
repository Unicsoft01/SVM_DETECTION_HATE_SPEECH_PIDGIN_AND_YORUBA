<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\UsersController;

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
    Route::get('/Pidgin English Text based Hate detecton model/model/yoruba', 'yoruba')->name('yoruba');
    Route::get('/Pidgin English Text based Hate detecton model/model/yoruba/Recent/Hate', 'recent_hate')->name('recent_hate');
    
    Route::get('/Pidgin English Text based Hate detecton model/model/pidgin-english', 'pidgin')->name('pidgin');

    Route::post('pidgin-english', 'pidgin_process')->name('pidgin.submit_docker');

    Route::post('yoruba', 'yoruba_process')->name('yoruba.submit_docker');
    
});



// recent_hate


require __DIR__.'/auth.php';
