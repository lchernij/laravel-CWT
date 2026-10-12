<?php

namespace Database\Factories;

use App\Enum\UserType;
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
            'company_id' => \App\Models\Company::factory(),
            'user_id' => \App\Models\User::factory([
                'type' => UserType::WORKER,
            ]),
        ];
    }
}
