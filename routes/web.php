<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Service2Controller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;

;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{


// Route::get('/', function () {
//     return 69;
// })->name('maysara');

Route::prefix('admin')->name('admin.')->middleware('auth','check_user')->group(function(){

    Route::get('/',[AdminController::class,'index'])->name('index');

        Route::resource('service',ServiceController::class);
        Route::resource('project',ProjectController::class);

        Route::resource('setting',SettingsController::class);
        Route::resource('service2',Service2Controller::class);
        Route::resource('about',AboutController::class);
});





    Route::get('/',[MainController::class,'home'])->name('site.index');
    Route::get('/project/{id}',[MainController::class,'project'])->name('site.project');
    Route::get('/projects',[MainController::class,'projects'])->name('site.projects');
    Route::get('/about',[MainController::class,'about'])->name('site.about');
    Route::get('services',[MainController::class,'services'])->name('site.services');
    Route::get('contact',[MainController::class,'contact'])->name('site.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
