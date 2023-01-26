<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
<<<<<<< HEAD
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
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
<<<<<<< HEAD
        return response()->success(ProductsResource::collection(Product::customPaginate()));
=======
        return response()->json([
            'success' => true,
            'data' => ProductsResource::collection(Product::with('category')->get())
        ], 200);

>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
