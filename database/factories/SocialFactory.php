<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Social;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social>
 */
class SocialFactory extends Factory
{
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        /** Hooks for created users */
        return $this->afterCreating(function (Social $social) {
            /** Add default cover photo */
            $social->addMediaFromUrl("https://source.unsplash.com/random/1024x1024")->toMediaCollection("cover");
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
            'title' => [
                'ge' => fake('ka_GE')->sentence( 3, false),
                'en' => fake()->sentence( 3, false )
            ],
            'description' => [
                'ge' => fake('ka_GE')->sentence( 350, false),
                'en' => fake()->sentence( 250, false )
            ],
            'category_id' => Arr::random(Category::where('type', 'social')->pluck('id')->toArray()),
            'user_id' => Arr::random(User::role('charity')->pluck('id')->toArray())
        ];
    }
}
