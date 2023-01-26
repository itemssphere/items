<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\ModelStatus\HasStatuses;
use Spatie\Translatable\HasTranslations;

class Social extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia, HasStatuses;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'user_id',
    ];

    protected $translatable = [ 'title', 'description' ];

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
