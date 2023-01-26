<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\ModelStatus\HasStatuses;

class Advertisement extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations, HasStatuses;

    protected $fillable = [ 'url', 'title', 'description' ];

    public $translatable = ['title', 'description'];

    const STATIC_TYPES = ['slider', 'banner'];

}
