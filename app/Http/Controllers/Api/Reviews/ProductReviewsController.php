<?php

namespace App\Http\Controllers\Api\Reviews;

use App\Models\Product;
use App\Http\Requests\Api\Reviews\ReviewRequestContract;
// use App\Http\Controllers\Api\Reviews\ModelReviewsController;

class ProductReviewsController extends ModelReviewsController
{
    /**
     * Handle the incoming request.
     *
     * @param  $request
     * @param  \App\Models\Product  $product
     *
     */
    public function __invoke(ReviewRequestContract $request)
    {
        // return ($request->isMethod('post'))
        //     ? $this->store($request, $product) // Crete Review
        //     : $this->index($product); // Show Reviews
        if ($request->routeIs('products.*')) {
            dd(explode('.', $request->route()->getName()));
        }



    }
}
