<?php

namespace Database\Factories;

use App\Models\Hashtag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hashtag>
 */
class HashtagFactory extends Factory
{
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        /** Hooks for created users */
        return $this->afterCreating(function (Hashtag $hashtag) {
            /** Add Cover Photo */
            $hashtag->addMediaFromUrl("https://source.unsplash.com/random/300x300")->toMediaCollection("cover");
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
                'en' => fake('en_US')->name(),
                'ge' => fake('ka_GE')->name(),
            ],
            'url' => fake()->url()
        ];
    }
}
