<?php

namespace App\Http\Controllers\Api;

use id;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\News\NewsResource;
use App\Http\Requests\Api\News\NewsStoreRequest;
use App\Http\Requests\Api\News\NewsUpdateRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'News Resource',
            'data' => NewsResource::collection(News::all())
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Api\News\NewsStoreRequest  $request
     * @return Illuminate\Http\JsonResponse
     */
    public function store(NewsStoreRequest $request): JsonResponse
    {
        /** Create news */
        $news = $request->user()->news()->create($request->validated());
        /** First status pending */
        $news->defineInitialStatus();
        /** Add cover */
        $news->addMediaFromUrl("https://source.unsplash.com/random/1024x1024")->toMediaCollection("cover");
        /** Return success response */
        return response()->json([
            'success' => true,
            'message' => 'News id: ' . $news->id . ' has been succesfully created',
            'data' => new NewsResource($news)
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\News  $news
     * @return Illuminate\Http\JsonResponse
     */
    public function show(News $news): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'News id: ' . $news->id,
            'data' => new NewsResource($news)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Api\News\NewsUpdateRequest  $request
     * @param  App\Models\News  $news
     * @return Illuminate\Http\JsonResponse
     */
    public function update(NewsUpdateRequest $request, News $news): JsonResponse
    {
        /** Update news */
        $news->update($request->validated());
        /** Update status */
        $news->setStatus($request->status, 'updated manually');
        /** Return success response */
        return response()->json([
            'success' => true,
            'message' => 'News id: ' . $news->id . ' has been successfully updated',
            'data' => new NewsResource($news)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\News  $news
     * @return Illuminate\Http\JsonResponse
     */
    public function destroy(News $news): JsonResponse
    {
        return response()->json([
            'success' => ($news->delete()) ? true : false,
            'message' => 'News id: ' . $news->id . ' has been deleted from database',
        ], 200);
    }
}
