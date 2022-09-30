<?php

namespace App\Services;

use App\Models\User;
use App\Http\Resources\Api\Users\UsersResource;
use App\Http\Resources\Api\Users\UsersWithRolesResource;

/**
 * Users Service Class
 */
class UsersService {

    public function index(){
        return UsersResource::collection(User::all());
    }

    public function getUsersByRoles(){
        return UsersWithRolesResource::collection(User::with('roles')->get());
    }
    
    public function getUsersByRole($role){
        return UsersResource::collection(User::role($role)->get());
    }

}