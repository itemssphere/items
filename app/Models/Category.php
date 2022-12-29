<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasTranslations;

    /**
     * Constants
     */
    const TYPES = ['product', 'social'];

    protected $guarded = [];

    public $translatable = ['name'];
    /**
     * This Relationship is for children
     */
    public function children()
    {
        return $this->hasMany($this);
    }

    /**
     * This Relationship is for parent
     */
    public function parent()
    {
        return $this->belongsTo($this);
    }
}
