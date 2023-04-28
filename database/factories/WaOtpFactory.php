<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\WaOtp;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registrant;

/**
 * @extends Factory<\App\Models\WaOtp>
 */
final class WaOtpFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = WaOtp::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            // 'phone_number' => $this->faker->phoneNumber,
            'number' => $this->faker->numberBetween(99999, 999999),
        ];
    }
}
