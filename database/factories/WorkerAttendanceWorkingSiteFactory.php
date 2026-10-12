<?php

namespace Database\Factories;

use App\Models\WorkerAttendanceWorkingSite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WorkerAttendanceWorkingSite>
 */
class WorkerAttendanceWorkingSiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(2, 3),
            'company_working_site_id' => rand(1, 10),
            'attendance_date' => $this->faker->date(),
            'attendance_time' => $this->faker->time(),
            'attendance_status' => $this->faker->randomElement(['in', 'out']),
        ];
    }
}
