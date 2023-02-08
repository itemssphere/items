<?php

namespace App\Http\Resources\Api\News;

use App\Http\Resources\Api\Users\UsersResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\Categories\CategoriesResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->getTranslation('title', app()->getLocale()),
            'body' => $this->getTranslation('body', app()->getLocale()),
            'category_id' => $this->category_id,
            'category_name' => $this->category->getTranslation('name', app()->getLocale()),
            // 'category' => CategoriesResource::make($this->whenLoaded('category')),
            'author' => new UsersResource($this->user),
            'created_at' => $this->created_at->shiftTimezone(config('app.timezone'))->toRfc7231String('Europe/Stockholm'),
            'created_at_diff' => $this->created_at->diffForHumans(),
            'cover' => $this->getFirstMediaUrl('cover', 'thumb'),
            'status' => $this->status,
            'likes_count' => rand(1,1500),
            'shares_count' => rand(1,750),
        ];
    }
}
