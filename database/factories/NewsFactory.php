<?php

namespace Database\Factories;

use App\Models\News;
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
            /** Add Cover */
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
            'title' => fake()->sentence( 3, true ), // $table->string('title')->nullable();
            'body' => fake()->sentence( 3, false ), // $table->longText('body')->nullabe();
            'user_id' => 1 // $table->foreignId('user_id')->constrained('users');
        ];
    }
}
