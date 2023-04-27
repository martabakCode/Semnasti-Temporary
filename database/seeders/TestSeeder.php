<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Broadcast;
use App\Models\Registrant;
use App\Models\WaMessage;
use App\Models\WaOtp;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Registrant::factory(100)->create();
        $registrant = Registrant::factory()
                        ->has(
                            WaOtp::factory()
                            ->state(function (array $attributes, Registrant $registrant) {
                                return ['phone_number' => $registrant->phone_number];
                            })
                        )->has(WaMessage::factory())
                        ->create();
    }
    // dikarenakan saya tidak paham kenapa kalo factorynya dibikin lebih dari 2 selalu keduplicate
    // execute manual aja pake cmd "for /l %x in (1, 1, 400) do php artisan db:seed --class=TestSeeder"
}
