<?php

namespace App\Http\Controllers;

use App\Models\Hashtag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Hashtags\HashtagStoreRequest;
use App\Http\Resources\Api\Hashtags\HashtagsResource;
use Illuminate\Http\JsonResponse;

class HashtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->success(HashtagsResource::collection(HashTag::with('media')->customPaginate()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\Hashtags\HashtagStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(HashtagStoreRequest $request): JsonResponse
    {
        $hashtag = HashTag::create($request->validated());

        return response()->success(new HashtagsResource($hashtag));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hashtag  $hashtag
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Hashtag $hashtag): JsonResponse
    {
        return response()->success(new HashtagsResource($hashtag));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\Hashtags\HashtagStoreRequest  $request
     * @param  \App\Models\Hashtag  $hashtag
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(HashtagStoreRequest $request, Hashtag $hashtag): JsonResponse
    {
        $hashtag->update($request->validated());

        return response()->success(new HashtagsResource($hashtag));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hashtag  $hashtag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hashtag $hashtag): JsonResponse
    {
        return response()->json([
            'success' => ($hashtag->delete()) ? true : false,
            'message' => 'Hashtag id: ' . $hashtag->id . ' has been deleted from database',
        ], 200);
    }
}
