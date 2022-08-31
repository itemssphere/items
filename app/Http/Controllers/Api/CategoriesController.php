<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use App\Services\CategoriesService;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Categories\CategoriesResource;
use App\Http\Requests\Api\Categories\CategoriesStoreRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $categories = Category::where('parent_id', null)->with('children')->get();
        return response()->json(CategoriesResource::collection($categories), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesStoreRequest $request)
    {
        $category = Category::create($request->validated());
        return response()->json(new CategoriesResource($category));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category): JsonResponse
    {
        return response()->json(new CategoriesResource($category), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesStoreRequest $request, Category $category)
    {
    //    return $request->validated();
        $category->update($request->validated());
        return response()->json(new CategoriesResource($category), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        return $category->delete();
    }

}