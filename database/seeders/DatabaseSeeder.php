<?php

namespace Database\Seeders;

use App\Enum\UserType;
use App\Models\Company;
use App\Models\CompanyWorker;
use App\Models\CompanyWorkingSite;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User id 1
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
            'type' => UserType::ADMIN,
        ]);

        // User id 2
        User::factory()->create([
            'name' => 'Worker 1',
            'email' => 'worker1@worker.com',
            'password' => bcrypt('123123'),
            'type' => UserType::WORKER,
        ]);

        // User id 3
        User::factory()->create([
            'name' => 'Worker 2',
            'email' => 'worker2@worker.com',
            'password' => bcrypt('123123'),
            'type' => UserType::WORKER,
        ]);

        // User id 4
        User::factory()->create([
            'name' => 'Company 1',
            'email' => 'company1@company.com',
            'password' => bcrypt('123123'),
            'type' => UserType::COMPANY,
        ]);

        // User id 5
        User::factory()->create([
            'name' => 'Company 2',
            'email' => 'company2@company.com',
            'password' => bcrypt('123123'),
            'type' => UserType::COMPANY,
        ]);

        $start = microtime(true);
        User::factory(1000)->create([
            'type' => UserType::ADMIN,
        ]);
        echo 'Bulk admin users created in: '.(microtime(true) - $start)." seconds\n";

        $start = microtime(true);
        User::factory(1000)->create([
            'type' => UserType::WORKER,
        ]);
        echo 'Bulk worker users created in: '.(microtime(true) - $start)." seconds\n";

        $start = microtime(true);
        User::factory(1000)->create([
            'type' => UserType::COMPANY,
        ]);
        echo 'Bulk company users created in: '.(microtime(true) - $start)." seconds\n";

        $start = microtime(true);
        Company::factory(100)->create();
        echo 'Bulk companies created in: '.(microtime(true) - $start)." seconds\n";

        $start = microtime(true);
        CompanyWorker::factory(1000)->create();
        echo 'Bulk company workers created in: '.(microtime(true) - $start)." seconds\n";

        $start = microtime(true);
        CompanyWorkingSite::factory(1000)->create();
        echo 'Bulk company working sites created in: '.(microtime(true) - $start)." seconds\n";
    }
}
