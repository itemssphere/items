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
<<<<<<< HEAD
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
            'reviews_average' => rand(1,5),
            'reviews_count' => rand(1,50),
=======
            'name' => $this->getTranslations('name'),
            'category' => CategoriesResource::make($this->category),
            'img' => [
                'cover' => 'https://picsum.photos/200/400',
                'slider' => [
                    'https://picsum.photos/200',
                    'https://picsum.photos/200',
                ],
            ],
            'discount' => 0.1,
            'new' => true,
            'proce_old' => [
                'currency' => 'GEL',
                'amount' => 1430.30,
            ],
            'price' => [
                'currency' => 'GEL',
                'amount' => 1239.39,
            ],
            'reviews_average' => 4,
            'reviews_count' => 132,
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
        ];
    }
}
