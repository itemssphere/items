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
        ];
    }
}
