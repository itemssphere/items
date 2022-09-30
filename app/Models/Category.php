<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * Constants
     */
    const TYPES = ['product', 'social'];

    protected $guarded = [];
    /**
     * This Relationship is for children
     */
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    /**
     * This Relationship is for parent
     */
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
}
