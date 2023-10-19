<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\RoleCreateController;
use App\Http\Controllers\Admin\AgentCreateController;
use App\Http\Controllers\Product\ProductCategory;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Website\WebsiteController;
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

Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('website.home');
    Route::get('/about-us', 'about')->name('website.about');
    Route::get('/news', 'news')->name('website.news');
    Route::get('/contact-us', 'contact')->name('website.contact');
    Route::get('/solutions', 'services')->name('website.services');
    Route::get('/projects', 'projects')->name('website.projects');
    Route::get('/project', 'project')->name('website.project');
});

Route::get('/home',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');

Route::group(['middleware' =>['admin.auth','auth']], function(){
    Route::group(['prefix'=>'admin'],function(){
        Route::get('/',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');


        Route::get('role',[RoleCreateController::class,'index'])->name('admin.index.role');
        Route::get('role/create',[RoleCreateController::class,'create'])->name('admin.create.role');
        Route::get('role/edit/{id}',[RoleCreateController::class,'edit']);
        Route::post('role/create',[RoleCreateController::class,'store'])->name('admin.create.store');
        Route::post('role/edit/{id}',[RoleCreateController::class,'update'])->name('admin.create.update');

        Route::get('employee',[AgentCreateController::class,'index'])->name('admin.emp.index');
        Route::get('employee/create',[AgentCreateController::class,'create'])->name('admin.emp.create');
        Route::post('agent',[AgentCreateController::class,'store'])->name('admin.imp.store');
        Route::post('agent/status/{id}',[AgentCreateController::class,'status'])->name('admin.imp.status.update');
        Route::get('agentprofile/{id}',[AgentCreateController::class,'show'])->name('admin.agent.show');
        Route::group(['prefix'=>'category'],function(){
            Route::get('index',[ProductCategory::class,'index'])->name('admin.agent.show');
        });


    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
