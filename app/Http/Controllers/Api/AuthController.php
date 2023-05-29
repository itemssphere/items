<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Api\Users\UsersResource;

class AuthController extends Controller
{
    /**
     * Create User
     *
     * @param \App\Http\Requests\Auth\RegisterRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function createUser(RegisterRequest $request): JsonResponse
    {

        $password = Hash::make($request->safe()->password);

        $user = User::create(array_merge(Arr::only($request->validated(),[ 'name', 'email' ]),[ 'password' => $password ]));

        $user->assignRole($request->safe()->role);

        $user->profile()->create(array_merge(
            Arr::except($request->validated(),[ 'email', 'password', 'role', 'agreement' ]),
            [ 'name' => [ app()->getLocale() => $request->safe()->name ]]
        ));

        $user->update(['last_seen' => now()]);

        return response()->json([
            'status' => true,
            'message' => 'User Created Successfully',
            'user' => UsersResource::make($user),
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ]);
    }

    /**
     * Login
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function loginUser(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $user = auth()->user();

        $user->tokens()->delete();

        $user->update(['last_seen' => now()]);

        return response()->json([
            'status' => true,
            'user' => UsersResource::make($user),
            'message' => 'User Logged In Successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken,
        ], 200);
    }

}
