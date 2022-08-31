<?php

use Illuminate\Http\Request;
use App\Services\CategoriesService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriesController;

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

Route::post('/auth/register', [ AuthController::class, 'createUser' ]);
Route::post('/auth/login', [ AuthController::class, 'loginUser' ]);

Route::group(['prefix'=>'categories'], function(){
    Route::get('constants/{constant}', [ CategoriesService::class, 'getConstants' ] );
    Route::get('formated/{format}', [ CategoriesService::class, 'getFormated' ]);
});


/** Auth Routes */
Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::resource('categories', CategoriesController::class);
});


