<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CareerController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

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


//require __DIR__.'/auth.php';

/*---backend route list--*/
Route::post('login', [AuthenticatedSessionController::class, 'store'])
->name("login");
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
Route::get('admin', [LoginController::class,'index'])->middleware("guest");
Route::get('login', [LoginController::class,'index'])->middleware("guest");

Route::group(['middleware'=>'auth','prefix' => 'admin','as'=>'admin.'],function(){

    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');

     /*---Product--*/

    Route::resource('product', AdminProductController::class);
});

/*---front route list--*/
Route::name('front.')->group(function () {
    
    Route::get('/', [HomepageController::class,'index'])->name('home');
    Route::get('about', [AboutController::class,'index'])->name('about');
    Route::get('blog', [BlogController::class,'index'])->name('blog');
    Route::get('career', [CareerController::class,'index'])->name('career');
    Route::post('career', [CareerController::class,'store'])->name('career.store');
    Route::get('contact', [ContactController::class,'index'])->name('contact');
    Route::post('contact', [ContactController::class,'store'])->name('contact.store');
    Route::get('gallery', [GalleryController::class,'index'])->name('gallery');
    Route::get('product', [ProductController::class,'index'])->name('product');
    Route::get('product/{product}', [ProductController::class,'productDetail'])->name('product.detail');
    
   

});