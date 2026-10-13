<?php

namespace Database\Factories;

use App\Models\CompanyWorker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyWorker>
 */
class CompanyWorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => rand(1, 100), // Assuming company IDs 1 to 10 exist
            'user_id' => rand(6, 1005), // Assuming user IDs 6 to 1005 are workers
        ];
    }
}
