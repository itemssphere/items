<?php

namespace App\Models;

use App\Models\User;
use Spatie\MediaLibrary\HasMedia;
use Spatie\ModelStatus\HasStatuses;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

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
        'body'
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

}
