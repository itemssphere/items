<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

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

Route::redirect('/', '/' . App::getLocale());
Route::group(['prefix' => '{language}'], function(){

    /** Guest Pages */
//    Route::middleware(['guest'])->group(function(){
        /** Inertia: Directly Rendered Vue */
        Route::inertia('/', 'Home')->name('home');
        Route::inertia('/market','Market')->name('market');
        Route::inertia('/shop','Shop')->name('shop');
        Route::inertia('/charity','Charity')->name('charity');
        Route::inertia('/social','Social')->name('social');
        Route::inertia('/news','News')->name('news');
        Route::inertia('/about','About')->name('about');
        Route::inertia('/contact','Contact')->name('contact');
        Route::inertia('/cart','Cart')->name('cart');
        Route::inertia('/notification','Notification')->name('notification');
        Route::inertia('/message','Message')->name('message');
        Route::inertia('/profile','Profile')->name('profile');
        Route::inertia('/policy', 'Policy')->name('policy');
        Route::inertia('/agreement', 'Agreement')->name('agreement');
//    });

    /** Authorized Pages **/
    Route::middleware(['auth', 'verified'])->group(function(){
        Route::redirect('account','account.information');
        Route::prefix('account')->group(function(){
            Route::name('account.')->group(function(){
                Route::inertia('information', 'Account/Information')->name('information');
                Route::inertia('socials', 'Account/Socials')->name('socials');
                Route::inertia('products', 'Account/Products')->name('products');
                Route::inertia('sold', 'Account/Sold')->name('sold');
                Route::inertia('orders', 'Account/Orders')->name('orders');
                Route::inertia('addresses', 'Account/Addresses')->name('addresses');
                Route::inertia('messages', 'Account/Messages')->name('messages');
                Route::inertia('password', 'Account/Password')->name('password');
            });
        });
    });
    
    /** Authorization Routes **/
    require __DIR__.'/auth.php';

});




