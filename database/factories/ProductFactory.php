<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
=======
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
<<<<<<< HEAD
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
=======
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => [
<<<<<<< HEAD
                'ge' => fake('ka_GE')->sentence(3, false),
                'en' => fake()->sentence(3, false)
            ],
            'category_id' => Arr::random(Category::where('type', 'product')->pluck('id')->toArray())
=======
                'ge' => fake()->sentence(3, false),
                'en' => fake()->sentence(3, false)
            ],
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
        ];
    }
}
