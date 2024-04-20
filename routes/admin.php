<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrouseCategoryController;
use App\Http\Controllers\CrouseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\OptimizeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UserController ;

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



function getRoleName($routeName)
{
    $routesData = RoleRoute::where('route_name', $routeName)->get();
    $result = [];
    foreach ($routesData as $routeData) {
        array_push($result, $routeData->role_name);
    }
    return $result;
}



Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'),  'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/role/add', [RoleController::class, 'index'])->name('role.add');
    Route::post('/role/new', [RoleController::class, 'create'])->name('role.new');
    Route::get('/role/manage', [RoleController::class, 'manage'])->name('role.manage');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

    Route::get('/user/add', [UserController::class, 'index', ])->name('user.add');
    Route::post('/user/new', [UserController::class, 'create'])->name('user.new');
    Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/optimize', [OptimizeController::class, 'index'])->name('optimize.index');
    Route::get('/cache/clear', [OptimizeController::class, 'cacheClear'])->name('cache.clear');
    Route::get('/migration', [OptimizeController::class, 'migration'])->name('migration');

    Route::resource('/teachers',TeacherController::class);
    Route::resource('/crouseCategory',CrouseCategoryController::class);
    Route::resource('/crouses',CrouseController::class );
    Route::resource('/blogs_cats',BlogCategoryController::class );
    Route::resource('/blogs',BlogController::class );
    Route::resource('/abouts',AboutController::class );
    Route::resource('/events',EventController::class );
    Route::resource('/testimonials',TestimonialController::class );
    Route::resource('/headers',HeaderController::class );
    Route::resource('/contacts',ContactController::class );
    Route::resource('/settings',SettingController::class );
    Route::resource('/terms',TermsController::class );

});

Route::resource('/newsletters',NewsletterController::class );