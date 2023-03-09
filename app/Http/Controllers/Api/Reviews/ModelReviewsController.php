<?php

namespace App\Http\Controllers\Api\Reviews;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Reviews\ReviewsResource;
use App\Http\Requests\Api\Reviews\ReviewRequestContract;

class ModelReviewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(ReviewRequestContract $request)
    {
        dd($request);
        // return ($request->isMethod('post'))
            // ? $this->store($request, $model) // Crete Review
            // : $this->index($model); // Show Reviews
    }



    /**
     * Show Reviews of Model
     *
     * @param  $model
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($model): JsonResponse
    {
        return response()->success(ReviewsResource::collection($model->reviews));
    }

    /**
     * Store Review of Model.
     *
     * @param  $request
     * @param  $model
     * @return \Illuminate\Http\JsonResponse
     */
    public function store($request, $model): JsonResponse
    {
        $model->review(
            $request->validated()['message'],
            User::find(1), // fake user
            $request->validated()['rating'], // $model->latestReview()->rating
            "products" // Review collection $model->latestReview()->title
        );

        return response()->success(ReviewsResource::make($model));
    }
}
