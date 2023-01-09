<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Categories\CategoriesResource;
use App\Http\Requests\Api\Categories\CategoriesStoreRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => CategoriesResource::collection(Category::with('children'))
        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\Categories\CategoriesStoreRequest  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoriesStoreRequest $request): jsonResponse
    {
        $category = Category::create($request->validated());

        return response()->json([
            'success' => true,
            'data' => new CategoriesResource($category)
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Category $category): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => new CategoriesResource($category)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\Categories\CategoriesStoreRequest  $request
     * @param  \App\Models\Category  $category
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoriesStoreRequest $request, Category $category): jsonResponse
    {
        $category->update($request->validated());
        return response()->json([
            'success' => true,
            'data' => new CategoriesResource($category)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        return response()->json([
            'success' => ($category->delete()) ? true : false,
            'message' => 'Category id: ' . $category->id . ' has been deleted from database',
        ], 200);
    }

}
