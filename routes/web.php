<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

require __DIR__.'/admin.php';


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/teacher', [HomeController::class, 'teachers'])->name('teachers');
Route::get('/teacher/details', [HomeController::class, 'teachersDetails'])->name('teachers.details');
Route::get('/crouse', [HomeController::class, 'crouse'])->name('crouse');
Route::get('/crouse/details', [HomeController::class, 'crouseDetails'])->name('crouse.details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/details', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');