<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Profile extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [ 'name', 'contact_name', 'contact_phone' ];

    protected $guarded = [];

    public $translatable = [ 'name', 'about', 'city', 'address' ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
