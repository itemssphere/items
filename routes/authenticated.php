<?php

use Illuminate\Support\Facades\Route;

/** Authenticated Routes */
Route::redirect('account','account.information');
Route::group(['prefix' => 'account', 'as' => 'account.'], function(){

    Route::inertia('information', 'Account/Information')->name('information');
    Route::inertia('socials', 'Account/Socials')->name('socials');
    Route::inertia('products', 'Account/Products')->name('products');
    Route::inertia('sold', 'Account/Sold')->name('sold');
    Route::inertia('orders', 'Account/Orders')->name('orders');
    Route::inertia('addresses', 'Account/Addresses')->name('addresses');
    Route::inertia('messages', 'Account/Messages')->name('messages');
    Route::inertia('password', 'Account/Password')->name('password');

});