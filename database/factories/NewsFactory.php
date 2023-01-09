<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        /** Hooks for created users */
        return $this->afterCreating(function (News $news) {
            /** Add default cover photo */
            $news->addMediaFromUrl("https://source.unsplash.com/random/1024x1024")->toMediaCollection("cover");
            /** Define `Initial Status` */
            $news->defineInitialStatus();
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
                'ge' => fake()->sentence( 3, false),
                'en' => fake()->sentence( 3, false )
            ],
            'body' => [
                'ge' => fake()->sentence( 350, false),
                'en' => fake()->sentence( 250, false )
            ],
            'user_id' => Arr::random(range(1, User::all()->count()))
        ];
    }
}
