<?php

namespace App\Http\Resources\Api\Reviews;

use App\Http\Resources\Api\Users\UsersResource;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            "id" => $this->id,
            // "title" => $this->title,
            "review" => $this->review,
            "rating" => $this->rating,
            // "model_type" => "App\\Models\\Product",
            // "model_id" => 2,
            "author" => UsersResource::make($this->author),
            // "author_type" => "App\\Models\\User",
            // "author_id" => 1,
            // "author" => UsersResource::make($this->author),
            "created_at" => $this->created_at->shiftTimezone(config('app.timezone'))->toRfc7231String(),
            "updated_at" => $this->updated_at->shiftTimezone(config('app.timezone'))->toRfc7231String(),
            // "deleted_at" => $this->updated_at->shiftTimezone(config('app.timezone'))->toRfc7231String(),
        ];
    }
}
