<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "slug" => $this->faker->slug(),
            "address" => $this->faker->address(),
            "moto" => $this->faker->text,
            "zipcode" => $this->faker->postcode(),
            "phone" => $this->faker->phoneNumber(),
            "city_id" => City::all()->random()->id,
        ];
    }
}
