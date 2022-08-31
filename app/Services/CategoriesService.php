<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\Api\CategoryResource;
use App\Http\Resources\Api\Categories\CategoriesResource;
use App\Http\Resources\Api\Categories\CategoriesSelectResource;


/**
 * Categories Service Class
 */
class CategoriesService {

    

    public function __construct(){
        
    }

    /**
     * Get Constant of Category Model
     * 
     * @param String $constant
     * @return JsonResponse
     */
    public function getConstants($constant): JsonResponse
    {
        return response()->json(collect(constant(Category::class . '::' . $constant)), 200);
    }

    /**
     * Get Formated Categories
     * 
     * @param String $format
     * @return JsonResponse
     */
    public function getFormated($format): JsonResponse
    {
        $categories = Category::with('children')->get();
        $result = [];

        switch($format){
            case 'select':
                $result = ['none'];
                break;
            default:
                $result = CategoriesSelectResource::collection($categories);
        }
        return response()->json($result, 200);
    }

}