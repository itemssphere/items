<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, HasTranslations;

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
