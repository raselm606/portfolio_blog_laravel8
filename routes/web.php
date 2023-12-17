<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\AddtoCartController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CheckoutController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\FrontendBlog;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [FrontendController::class, 'Home'])->name('home');
Route::post('contact', [FrontendController::class, 'contactStore'])->name('contact');
Route::get('blogs', [FrontendBlog::class, 'index'])->name('blog');
Route::get('blog-details/{slug}', [FrontendBlog::class, 'blogdetails'])->name('blog.details');

Auth::routes();
Route::get('register',[RegisterController::class])->name('register');

Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');

    Route::group(['prefix'=> 'work-experience'], function(){
        Route::get('/',[SliderController::class,'index'])->name('admin.all.slider');
        Route::post('store',[SliderController::class,'store'])->name('admin.slider.store');
        Route::put('update/{id}',[SliderController::class,'update'])->name('admin.slider.update');
        Route::post('delete/{id}',[SliderController::class,'destroy'])->name('admin.slider.destroy');
    });

    Route::group(['prefix'=> 'about-me'], function(){
        Route::get('/',[AboutController::class,'index'])->name('admin.about');
        Route::post('/',[AboutController::class,'aboutUpdate'])->name('admin.about');
        //education
        Route::get('education',[AboutController::class,'education'])->name('admin.education');
        Route::post('education',[AboutController::class,'eduStore'])->name('admin.education');
        Route::put('education-update/{id}',[AboutController::class,'eduUpdate'])->name('admin.education.update');
        Route::post('education-delete/{id}',[AboutController::class,'eduDelete'])->name('admin.education.delete');
        //internship
        Route::get('intern',[AboutController::class,'intern'])->name('admin.intern');
        Route::post('intern',[AboutController::class,'internStoore'])->name('admin.intern');
        Route::put('intern-update/{id}',[AboutController::class,'internnUpdate'])->name('admin.intern.update');
        Route::post('intern-delete/{id}',[AboutController::class,'internDelete'])->name('admin.intern.delete');
        //workshop
        Route::get('workshop',[AboutController::class,'workshop'])->name('admin.workshop');
        Route::post('workshop',[AboutController::class,'workshopStore'])->name('admin.workshop');
        Route::put('workshop-update/{id}',[AboutController::class,'workshopUpdate'])->name('admin.workshop.update');
        Route::post('workshop-delete/{id}',[AboutController::class,'workshopDelete'])->name('admin.workshop.delete');
        //publication
        Route::get('publication',[AboutController::class,'publication'])->name('admin.publication');
        Route::post('publication',[AboutController::class,'publicationStore'])->name('admin.publication');
        Route::put('publication-update/{id}',[AboutController::class,'publicationUpdate'])->name('admin.publication.update');
        Route::post('publication-delete/{id}',[AboutController::class,'publicationDelete'])->name('admin.publication.delete');
    });

    Route::group(['prefix'=> 'category'], function(){
        Route::get('/',[CategoryController::class,'Index'])->name('admin.category');
        Route::post('store',[CategoryController::class,'store'])->name('admin.category.store');
        Route::put('update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::post('delete/{id}',[CategoryController::class,'destroy'])->name('admin.category.destroy');
    });

        Route::group(['prefix'=> 'blogs'], function(){
        Route::get('/',[BlogController::class,'index'])->name('admin.all.blogs');
        Route::get('create',[BlogController::class,'create'])->name('admin.blogs.store');
        Route::post('create',[BlogController::class,'store'])->name('admin.blogs.store');
        Route::get('edit/{id}',[BlogController::class,'edit'])->name('admin.blogs.edit');
        Route::put('update/{id}',[BlogController::class,'update'])->name('admin.blogs.update');
        Route::post('delete/{id}',[BlogController::class,'destroy'])->name('admin.blogs.destroy');
    });

    Route::group(['prefix'=> 'contact'], function(){
        Route::get('/',[ContactController::class,'index'])->name('admin.all.contact');
        Route::post('/',[ContactController::class,'status'])->name('admin.all.msg.status');
        Route::post('destroy/{id}',[ContactController::class,'destroy'])->name('admin.all.msg.destroy');
    });

    Route::group(['prefix'=> 'setting'], function(){
        Route::get('/',[SettingController::class,'index'])->name('admin.setting');
        Route::post('/',[SettingController::class,'updateSetting'])->name('admin.update.setting');

        Route::get('profile',[SettingController::class,'profile'])->name('admin.profile');
        Route::post('profile',[SettingController::class,'updateProfile'])->name('admin.profile');
        Route::post('forget',[SettingController::class,'updatePassword'])->name('admin.forget');

        Route::get('socials',[SettingController::class,'socials'])->name('admin.socials');
        Route::post('socials',[SettingController::class,'updateSocials'])->name('admin.socials');
    });



//    Route::group(['prefix'=> 'product'], function(){
//        Route::get('/',[ProductController::class,'index'])->name('admin.all.product');
//        Route::get('create',[ProductController::class,'create'])->name('admin.product.store');
//        Route::post('create',[ProductController::class,'store'])->name('admin.product.store');
//        Route::get('edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
//        Route::put('update/{id}',[ProductController::class,'update'])->name('admin.product.update');
//        Route::post('delete/{id}',[ProductController::class,'destroy'])->name('admin.product.destroy');
//    });
//
//    Route::group(['prefix'=> 'orders'], function(){
//        Route::get('/',[OrderController::class,'index'])->name('admin.all.order');
//        Route::get('view-orders/{id}',[OrderController::class,'viewOrder'])->name('admin.view.order');
//        Route::post('update-orders/{id}',[OrderController::class,'updateOrder'])->name('admin.update.order');
//        Route::get('history-orders',[OrderController::class,'historyOrder'])->name('admin.history.order');
//    });
});

//user auth
//Route::middleware(['auth'])->group(function(){
//    Route::get('cart',[AddtoCartController::class,'viewCart'])->name('cart');
//    Route::post('delete-cart',[AddtoCartController::class,'deleteCart'])->name('delete.cart');
//    Route::post('update-cart',[AddtoCartController::class,'updateCart'])->name('update.cart');
//
//    Route::get('checkout-order',[CheckoutController::class,'checkOut'])->name('cart.checkout');
//    Route::post('checkout-order',[CheckoutController::class,'checkoutConfirm'])->name('checkout.confirm');
//    //my order
//    Route::get('my-order',[UserController::class,'index'])->name('my.order');
//    Route::get('view-order/{id}',[UserController::class,'viewOrder'])->name('view.order');
//});
