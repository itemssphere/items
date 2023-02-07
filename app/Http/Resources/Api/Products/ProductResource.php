<?php

namespace App\Http\Resources\Api\Products;

use App\Models\User;
use App\Models\Social;
use App\Models\Product;
use App\Http\Resources\Api\Users\UsersResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\Socials\SocialsResource;
use App\Http\Resources\Api\Products\ProductsResource;
use App\Http\Resources\Api\Categories\CategoriesResource;
use App\Http\Resources\Api\Reviews\ReviewsResource;

class ProductResource extends JsonResource
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
            'stock' => rand(1,255),
            'currency' => 'GEL',
            'discount' => 0.1,
            'proce_old' => 1430.30,
            'price' => 1239.39,
            'reviews_average' => rand(1,5),// round($this->averageRating()),
            'reviews_count' => $this->reviews()->count(),
            'likes_count' => rand(1,5000),
            'shares_count' => rand(1,5000),
            'reviews' => ReviewsResource::collection($this->reviews),
            'img' => [
                'cover' => $this->getFirstMediaUrl('images', 'thumb'),
                'images' => array_map(function($img){ return $img['original_url']; }, $this->getMedia('images')->toArray()),
            ],
            'description' => fake()->sentence(50, false), // Get Translations of descrition Field
            'seller' => UsersResource::make(User::role('shop')->inRandomOrder()->first()), // after $this->user
            'donation' => SocialsResource::make(Social::inRandomOrder()->first()), // after $this->social
            'symilar' => ProductsResource::collection(Product::inRandomOrder()->take(5)->get()) // Add Some Logic to it
        ];
    }
}
