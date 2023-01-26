<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        /** Hooks for created users */
        return $this->afterCreating(function (Product $product) {
            /** Add Avatar */
            $product->addMediaFromUrl("https://source.unsplash.com/random/300x300")->toMediaCollection("images");
            /** Add Wallpaper */
            $product->addMediaFromUrl("https://source.unsplash.com/random/600x600")->toMediaCollection("images");
        });
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => [
                'ge' => fake('ka_GE')->sentence(3, false),
                'en' => fake()->sentence(3, false)
            ],
            'category_id' => Arr::random(Category::where('type', 'product')->pluck('id')->toArray())
        ];
    }
}
