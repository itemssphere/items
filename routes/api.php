<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\AdvertisementController;
use App\Http\Controllers\Api\SocialsController;
use App\Http\Controllers\HashtagController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Edit Cors middleware (allow only spacified Ip's later...)
 */
Route::middleware('cors')->group(function(){

    // /** Auth Routes */
    // Route::middleware('auth:sanctum')->group(function(){
    //     /** Users Routes */
    //     Route::resource('users', UsersController::class)->only(['index', 'show'])->middleware( 'permission:view users|manage users' );
    //     Route::resource('users', UsersController::class)->only(['store', 'update', 'destroy'])->middleware( 'permission:manage users' );
    //     /** News Routes */
    //     Route::resource('news', NewsController::class)->only('index', 'show')->middleware( 'permission:view news|manage news' );
    //     Route::resource('news', NewsController::class)->only('store', 'update', 'destroy')->middleware( 'permission:manage news' );
    //     /** Categoris Routes */
    //     Route::resource('categories', CategoriesController::class)->only('index', 'show')->middleware( 'permission:view categories|manage categories' );
    //     Route::resource('categories', CategoriesController::class)->only('store', 'update', 'destroy')->middleware( 'permission:manage categories' );
    // });




    /** Authentication */
    Route::post('/auth/register', [ AuthController::class, 'createUser' ]);
    Route::post('/auth/login', [ AuthController::class, 'loginUser' ]);

    /**
     * CRUDS
     */
    /** Users Routes */
    Route::resource('users', UsersController::class)->only(['index', 'show']);//->middleware( 'permission:view users|manage users' );
    Route::resource('users', UsersController::class)->only(['store', 'update', 'destroy']);//->middleware( 'permission:manage users' );
    /** News Routes */
    Route::resource('news', NewsController::class)->only('index', 'show');//->middleware( 'permission:view news|manage news' );
    Route::resource('news', NewsController::class)->only('store', 'update', 'destroy');//->middleware( 'permission:manage news' );
    /** Categoris Routes */
    Route::resource('categories', CategoriesController::class)->only('index', 'show');//->middleware( 'permission:view categories|manage categories' );
    Route::resource('categories', CategoriesController::class)->only('store', 'update', 'destroy');//->middleware( 'permission:manage categories' );
    /** Products Routes */
    Route::resource('products', ProductsController::class)->only('index', 'show');//->middleware( 'permission:view products|manage products' );
    Route::resource('products', ProductsController::class)->only('store', 'update', 'destroy');//->middleware( 'permission:manage products' );
    /** Avertisements */
    Route::resource('advertisements', AdvertisementController::class)->only('index', 'show');//->middleware( 'permission:view advertisements|manage advertisements' );
    Route::resource('advertisements', AdvertisementController::class)->only('store', 'update', 'destroy');//->middleware( 'permission:view advertisements|manage advertisements' );
    /** Socials */
    Route::resource('socials', SocialsController::class)->only('index', 'show');//->middleware( 'permission:view socials|manage socials' );
    Route::resource('socials', SocialsController::class)->only('store', 'update', 'destroy');//->middleware( 'permission:view socials|manage socials' );
    /** Hashtags */
    Route::resource('hashtags', HashtagController::class)->only('index', 'show');//->middleware( 'permission:view hashtags|manage hashtags' );
    Route::resource('hashtags', HashtagController::class)->only('store', 'update', 'destroy');//->middleware( 'permission:view hashtags|manage hashtags' );


});
