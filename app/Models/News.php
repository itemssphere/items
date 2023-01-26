<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Spatie\MediaLibrary\HasMedia;
use Spatie\ModelStatus\HasStatuses;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasStatuses, HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'category_id',
    ];

    protected $translatable = [ 'title', 'body' ];
    /**
     * Get the author of News
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Set initial status upon registration
     * depending on their role
     */
    public function defineInitialStatus(){
        /** Config */
        $status = 'pending';
        $reason = 'Initial Status';

        /** Set Initial status to user */
        $this->setStatus( $status, $reason );
    }

     /**
     * relation for category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
