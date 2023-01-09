<?php

namespace App\Http\Resources\Api\News;

use App\Http\Resources\Api\Users\UsersResource;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'title' => $this->getTranslations('title'),
            'body' => $this->getTranslations('body'),
            'author' => new UsersResource($this->user),
            'published_at' => $this->created_at->format('d.m.Y'),
            'cover' => $this->getFirstMediaUrl('cover', 'thumb'),
            'status' => $this->status
        ];
    }
}
