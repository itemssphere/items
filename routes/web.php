<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Pages\ShopsController;

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

/**
 * Redirect to Active Locale 
 */
Route::redirect('/', '/' . App::getLocale());
/**
 * Translatable Routes
 */
Route::group(['prefix' => '{language}'], function(){

    /** Landing Pages */
    require __DIR__.'/landing.php';
    
    /** Authenticated Pages */
    Route::middleware(['auth', 'verified'])->group(function(){    
        require __DIR__.'/authenticated.php';
    });
      
    /** Authorization Routes */
    require __DIR__.'/auth.php';

});