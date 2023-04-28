<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Registrant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Registrant>
 */
final class RegistrantFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Registrant::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            // 'code' => '1',
            // 'code' => $this->faker->numberBetween(1000,9999),
            'email' => $this->faker->safeEmail,
            'name' => $this->faker->name,
            'origin' => $this->faker->word,
            'phone_number' => $this->faker->phoneNumber,
            'payment_status' => $this->faker->randomElement(['pending', 'success']),
            'payment_at' => $this->faker->optional()->dateTime(),
            'payment_confirm_by' => '1',
            'arrival_confirmation' => $this->faker->optional()->boolean,
            'arrival_status' => $this->faker->optional()->boolean,
        ];
    }
}
