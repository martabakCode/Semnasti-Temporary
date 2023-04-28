<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Broadcast;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Broadcast>
 */
final class BroadcastFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Broadcast::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'type' => $this->faker->word,
        ];
    }
}
