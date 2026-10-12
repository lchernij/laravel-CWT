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
            'company_id' => rand(1, 10),
            'name' => $this->faker->unique()->company(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zip_code' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            
            // PostGIS expects WKT with longitude first and latitude second.
            'location' => sprintf(
                'SRID=4326;POINT(%F %F)',
                $this->faker->longitude(),
                $this->faker->latitude(),
            ),
        ];
    }
}
