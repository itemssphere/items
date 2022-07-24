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
    Route::get('/', function () {
        return Inertia::render('Home');
    })->name('home');
    Route::get('/market', function(){
        return Inertia::render('Market');
    })->name('market');
    Route::get('/shop', function(){
        return Inertia::render('Shop');
    })->name('shop');
    Route::get('/charity', function(){
        return Inertia::render('Charity');
    })->name('charity');
    Route::get('/social', function(){
        return Inertia::render('Social');
    })->name('social');
    Route::get('/news', function(){
        return Inertia::render('News');
    })->name('news');
    Route::get('/about', function(){
        return Inertia::render('About');
    })->name('about');
    Route::get('/contact', function(){
        return Inertia::render('Contact');
    })->name('contact');
    Route::get('/cart', function(){
        return Inertia::render('Cart');
    })->name('cart');
    Route::get('/notification', function(){
        return Inertia::render('Notification');
    })->name('notification');
    Route::get('/message', function(){
        return Inertia::render('Message');
    })->name('message');
    Route::get('/profile', function(){
        return Inertia::render('Profile');
    })->name('profile');
    Route::get('/policy', function(){
        return Inertia::render('Policy');
    })->name('policy');
    
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    require __DIR__.'/auth.php';
});




