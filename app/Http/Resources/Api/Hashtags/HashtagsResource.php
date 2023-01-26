<?php

namespace App\Http\Resources\Api\Hashtags;

use Illuminate\Http\Resources\Json\JsonResource;

class HashtagsResource extends JsonResource
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
            'cover' => $this->getFirstMediaUrl('cover','thumb'),
            'url' => $this->url,
        ];
    }
}
