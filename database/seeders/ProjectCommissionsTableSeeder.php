<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCommissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('project_commissions')->insert([
            [
                'work_order_id' => 1,
                'project_value' => 10000000,
                'margin' => 2000000,
                'total_percentage' => 20,
                'status' => 'Draft',
                'approved_by' => 1,
                'approved_at' => now(),
            ],
        ]);
    }
}
