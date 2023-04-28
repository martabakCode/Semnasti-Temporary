<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\WaMessage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\WaMessage>
 */
final class WaMessageFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = WaMessage::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'broadcast_id' => '1',
            // 'registrant_id' => \App\Models\Registrant::factory(),
            'phone_number' => $this->faker->phoneNumber,
            'message' => $this->faker->text,
            'footer' => $this->faker->optional()->text,
            // 'list' => $this->faker->optional()->word,
            'status' => $this->faker->randomElement(['unproccessed', 'need_resend', 'success_send', 'failed_send']),
            'failed_reason' => $this->faker->optional()->text,
        ];
    }
}
