<?php

namespace App\Http\Controllers\Api;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Socials\SocialStoreRequest;
use App\Http\Resources\Api\Socials\SocialsResource;
use Illuminate\Http\JsonResponse;

class SocialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->success(SocialsResource::collection(Social::customPaginate()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\Socials\SocialStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SocialStoreRequest $request): JsonResponse
    {
        $social = Social::create($request->validated());

        return response()->success(new SocialsResource($social));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Social $social): JsonResponse
    {
        return response()->success(new SocialsResource($social));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\Socials\SocialStoreRequest  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SocialStoreRequest $request, $social): JsonResponse
    {
        $social->update($request->validated());

        return response()->success(new SocialsResource($social));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($social): JsonResponse
    {
        return response()->json([
            'success' => ($social->delete()) ? true : false,
            'message' => 'Social id: ' . $social->id . ' has been deleted from database',
        ], 200);
    }
}
