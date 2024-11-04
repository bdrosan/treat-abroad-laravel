<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Speciality;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            "slug" => Str::slug($this->faker->name),
            'profile_picture' => "placeholder_doctor_image.png", // Generates a URL for the profile picture
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->unique()->phoneNumber,
            'license_number' => $this->faker->unique()->numerify("ILCSA######"),
            'qualification' => $this->faker->randomElement(['MBBS', 'MD', 'DO', 'PhD']),
//            'specialization' => $this->faker->randomElement(['Cardiologist', 'Dermatologist', 'Neurologist']),
            'experience_years' => $this->faker->numberBetween(0, 40),
            'address' => $this->faker->address,
            'dob' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'nationality' => $this->faker->country,
//            'languages_spoken' => implode(',', $this->faker->randomElements(['English', 'Spanish', 'French', 'German'], 2)), // Two random languages
            'consultation_fee' => $this->faker->randomFloat(2, 50, 500),
            'bio' => $this->faker->paragraph,
            'working_hours' => json_encode([
                'Monday' => '9:00 AM - 5:00 PM',
                'Tuesday' => '9:00 AM - 5:00 PM',
                'Wednesday' => '9:00 AM - 5:00 PM',
                'Thursday' => '9:00 AM - 5:00 PM',
                'Friday' => '9:00 AM - 5:00 PM',
                'Saturday' => '10:00 AM - 2:00 PM',
                'Sunday' => 'Closed'
            ]),
            'status' => $this->faker->randomElement(['active', 'inactive']),
//            "speciality_id" => Speciality::all()->random()->id,
            "city_id" => City::all()->random()->id,
        ];
    }
}
