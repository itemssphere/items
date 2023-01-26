<?php

namespace App\Models;

use App\Models\Category;
<<<<<<< HEAD
use Spatie\Tags\HasTags;
use Spatie\MediaLibrary\HasMedia;
=======
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia, HasTags;

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
