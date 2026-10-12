<?php

namespace Database\Factories;

use App\Models\CompanyWorkingSite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyWorkingSite>
 */
class CompanyWorkingSiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => \App\Models\Company::factory(),
            'name' => $this->faker->company(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zip_code' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            'location' => $this->faker->latitude() . ',' . $this->faker->longitude(),
        ];
    }
}
