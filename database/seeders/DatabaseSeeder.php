<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan semua seeder
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            ProjectPositionsTableSeeder::class,
            DocumentTypesTableSeeder::class,
            WorkOrdersTableSeeder::class,
            DocumentRequestsTableSeeder::class,
            ProjectDocumentsTableSeeder::class,
            DocumentAssignmentsTableSeeder::class,
            ProjectAssignmentsTableSeeder::class,
            ProjectCommissionsTableSeeder::class,
            CommissionBreakdownsTableSeeder::class,
            MonthlyCommissionReportsTableSeeder::class,
        ]);
    }
}
