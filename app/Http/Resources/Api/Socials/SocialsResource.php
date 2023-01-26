<?php

namespace App\Http\Resources\Api\Socials;

use Illuminate\Support\Arr;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $amount = rand(1000,2500);
        $raised = $amount / Arr::random([2,3,4,5,6,7,8,9]);

        return [
            'id' => $this->id,
            'cover' => $this->getFirstMediaUrl('cover'),
            'title' => $this->getTranslation('title', app()->getLocale()),
            'description' => $this->getTranslation('description', app()->getLocale()),
            'category_id' => $this->category_id,
            'category_name' => $this->category->getTranslation('name', app()->getLocale()),
            // 'category' => CategoriesResource::make($this->whenLoaded('category')),
            'currency' => 'GEL',
            'goal_amount' => $amount,
            'raised_amount' => round($raised,2),
            'raised_diff' => round($raised / $amount * 100) . '%',
            'likes_count' => rand(1,1500),
            'shares_count' => rand(1,750),
        ];
    }
}
