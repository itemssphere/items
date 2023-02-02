<?php

namespace App\Http\Resources\Api\Products;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\Categories\CategoriesResource;

class ProductsResource extends JsonResource
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
            'name' => $this->getTranslation('name', app()->getLocale()),
            'category_id' => $this->category_id,
            'category' => CategoriesResource::make($this->whenLoaded('category')),
            'new' => true,
            'img' => [
                'cover' => $this->getFirstMediaUrl('images', 'thumb'),
                'images' => array_map(function($img){ return $img['original_url']; }, $this->getMedia('images')->toArray()),
            ],
            'currency' => 'GEL',
            'discount' => 0.1,
            'proce_old' => 1430.30,
            'price' => 1239.39,
            'reviews_average' => round($this->averageRating()),
            'reviews_count' => $this->reviews()->count(),
        ];
    }
}
