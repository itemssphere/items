<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advertisement>
 */
class AdvertisementFactory extends Factory
{
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        /** Hooks for created users */
        return $this->afterCreating(function (Advertisement $advertisement) {
            /** Add default cover photo */
            $advertisement->addMediaFromUrl("https://source.unsplash.com/random/1024x1024")->toMediaCollection("cover");
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
            'url' => fake()->url(),
            'title' => [
                'ge' => fake('ka_GE')->sentence( 3, false),
                'en' => fake()->sentence( 3, false )
            ],
            'type' => Arr::random(Advertisement::STATIC_TYPES),
            'description' => [
                'ge' => fake('ka_GE')->sentence( 350, false),
                'en' => fake()->sentence( 250, false )
            ],
        ];
    }
}
