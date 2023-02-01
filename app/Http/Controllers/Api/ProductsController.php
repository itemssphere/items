<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Products\ProductsStoreRequest;
use Illuminate\Http\Request;
use App\Http\Resources\Api\Products\ProductsResource;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->success(ProductsResource::collection(Product::customPaginate()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\Products\ProductsStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductsStoreRequest  $request): JsonResponse
    {
        $product = Product::create($request->validated());
        return response()->success($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Product $product): JsonResponse
    {
        return response()->success(new ProductsResource($product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\Products\ProductsStoreRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProductsStoreRequest $request, $product): JsonResponse
    {
        $product->update($request->validated());

        return response()->success(new ProductsResource($product));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        return response()->json([
            'success' => ($product->delete()) ? true : false,
            'message' => 'Product id: ' . $product->id . ' has been deleted from database',
        ], 200);
    }
}
