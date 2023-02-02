<?php

namespace App\Models;

use App\Models\Category;
use Digikraaft\ReviewRating\Traits\HasReviewRating;
use Spatie\Tags\HasTags;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia, HasTags, HasReviewRating;

    protected $fillable = [
        'name',
        'category_id',
    ];

    public $translatable = ['name'];

    /**
     * relation for category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
