<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectAssignmentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('project_assignments')->insert([
            [
                'work_order_id' => 1,
                'user_id' => 3,
                'position_id' => 3,
            ],
        ]);
    }
}
