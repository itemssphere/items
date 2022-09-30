<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialsController;
use App\Http\Controllers\ProductsController;

/** Landing Pages */
Route::inertia('/', 'Home')->name('home');

Route::inertia('market','Market')->name('market');
Route::get('market/products/create', [ ProductsController::class, 'create' ] )->name('products.create');
Route::get('market/{product}', [ ProductsController::class, 'show' ])->name('products.show');

Route::inertia('charity','Charity')->name('charity');

Route::inertia('social','Social')->name('social');
Route::get('socials/create', [ SocialsController::class, 'create' ])->name('socials.create');
Route::get('socials/{social}', [ SocialsController::class, 'show' ])->name('socials.show');

Route::inertia('news','News')->name('news');
Route::inertia('about','About')->name('about');
Route::inertia('contact','Contact')->name('contact');
Route::inertia('cart','Cart')->name('cart');
Route::inertia('notification','Notification')->name('notification');
Route::inertia('message','Message')->name('message');
Route::inertia('profile','Profile')->name('profile');
Route::inertia('policy', 'Policy')->name('policy');
Route::inertia('agreement', 'Agreement')->name('agreement');
Route::inertia('test', 'Test')->name('test');
Route::inertia('shop', 'Shop')->name('shop');
