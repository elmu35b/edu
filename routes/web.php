<?php

use App\Http\Controllers\HomeController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

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

Route::get('/x', function () {


    Service::create([
        'name' => 'Service',
        'content' => 'content',
        'thumbnail' => 'thumbnail',
    ]);

    return Service::all();
})->name('welcome');




Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
