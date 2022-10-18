<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\ModelStatus\HasStatuses;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Types\Boolean;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, InteractsWithMedia, HasStatuses;

    const SUPER_ADMIN = 'super_admin';
    const ADMINISTRATOR = 'administrator';
    const STATIC_ROLES = [ 
        'admin' => [ 
            self::SUPER_ADMIN,
            self::ADMINISTRATOR
        ], 
        'user' => [ 'standard', 'shop', 'charity' ]
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        $bool = false;
        foreach(Auth::user()->roles as $role){
            $bool = in_array($role->name, self::STATIC_ROLES['admin']) ? true : $bool;
        }
        return $bool;
    }

    public function isSuperAdmin()
    {   
        $bool = false;
        foreach(Auth::user()->roles as $role){
            $bool = ($role->name == self::SUPER_ADMIN) ? true : $bool;
        }
        return $bool;
    }

    /**
     * Set initial status upon registration
     * depending on their role
     */
    public function defineInitialStatus(){
        /** Config */
        $status = 'pending';
        $reason = 'Initial Status';

        /** Get Constants and Current Value */
        $role = $this->getRoleNames()[0];
        $admins = self::STATIC_ROLES['admin'];
        $users = self::STATIC_ROLES['user'];
        
        /** Set initial status for users */
        if(in_array($role, $users)){
            switch($role){
                case 'standard':
                    $status = 'active';
                    break;
                case 'shop':
                    $status = 'active';
                    break;
                case 'charity':
                    $status = 'pending';
                    break;
                default:
                    $status = 'pending';
                    break;
            }
        }
        
        /** Set initial status for admins */
        $status = in_array( $role, $admins ) ? 'pending' : $status;
        /** Set Active Status for super admin */
        $status = ( $role === 'super_admin' ) ? 'active' : $status;
        /** Set Initial status to user */
        $this->setStatus( $status, $reason );
    }

    public function news(){
        return $this->hasMany(News::class);
    }

}
