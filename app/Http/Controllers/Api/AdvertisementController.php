<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Advertisements\AdvertisementStoreRequest;
use App\Http\Resources\Api\Advertisements\AdvertisementResource;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = (request()->has(config('request.advertisement_type')))
            ? Advertisement::where('type', request()[config('request.advertisement_type')])->customPaginate()
            : Advertisement::customPaginate();
        return response()->success(AdvertisementResource::collection($data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\Advertisements\AdvertisementStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AdvertisementStoreRequest $request): JsonResponse
    {
        $advertisement = Advertisement::create($request->validated());

        return response()->success(new AdvertisementResource($advertisement));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Advertisement $advertisement): JsonResponse
    {
        return response()->success(new AdvertisementResource($advertisement));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\Advertisements\AdvertisementStoreRequest  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AdvertisementStoreRequest $request, Advertisement $advertisement): JsonResponse
    {
        $advertisement->update($request->validated());

        return response()->success(new AdvertisementResource($advertisement));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Advertisement $advertisement): JsonResponse
    {
        return response()->json([
            'success' => ($advertisement->delete()) ? true : false,
            'message' => 'Advertisement id: ' . $advertisement->id . ' has been deleted from database',
        ], 200);
    }
}
