<?php

namespace App\Http\Controllers\Api;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Api\Users\UsersResource;
use App\Http\Requests\Api\Users\UsersStoreRequest;
use App\Http\Requests\Api\Users\UsersUpdateRequest;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $data = ($request->has('role')) 
            ? Search::new()->add(User::class, 'roles.name')->search($request->role)
            : User::all();

        return response()->json([ 
            'data' => UsersResource::collection($data)
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\Users\UsersStoreRequest $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(UsersStoreRequest $request): jsonResponse
    {
        try {
            /** Create user */
            $user = User::create($request->validated());
            /** Hash Password */
            $user->password = Hash::make($request->password);
            // $user->save();
            /** Manually add administrator */
            $user->assignRole('administrator');
            /** First status pending */
            $user->defineInitialStatus();
            /** Add Avatar and Wallpaper */
            $user->addMediaFromUrl("https://source.unsplash.com/random/300x300")->toMediaCollection("avatar");
            $user->addMediaFromUrl("https://source.unsplash.com/random/1024x1024")->toMediaCollection("wallpaper");
            /** Return success response */
            $response = $this->jsonResponse($user, 200);
        } catch (Throwable $th) {
            $response = response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(User $user): jsonResponse
    {
        return $this->jsonResponse($user, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\Users\UsersUpdateRequest $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, User $user): jsonResponse
    {
        /** Update User */
        $user->update($request->validated());
        /** Update Status */
        $user->setStatus($request->status, 'updated manually');
        
        return response()->json([
            'success' => true,
            'current_status' => $user->status,
            'message' => 'user status succesfully updated',
            'data' => new UsersResource($user)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user){
        return $user->delete();
    }

    /**
     * Preformatted Json Responses
     */
    public function jsonResponse($user = false, $code){
        $response = [
            'success' => false,
            'message' => 'Unknown Error',
        ];
        switch($code){
            case 200:
                $response['success'] = true;
                $response['message'] = ['Success'];
                $response['data'] = new UsersResource($user);
            case 401:
                $response['message'] = ['This action is unauthorized.'];
                break;
            case 403:
                $response['message'] = ['This action is unauthorized.'];
                break;
        }
        return response()->json($response,$code);
    }
}
