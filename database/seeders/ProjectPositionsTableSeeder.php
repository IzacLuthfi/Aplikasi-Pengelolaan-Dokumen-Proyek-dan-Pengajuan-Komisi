<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectPositionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_positions')->insert([
            ['name' => 'Lead Developer'],
            ['name' => 'QA Tester'],
            ['name' => 'Technical Writer'],
        ]);
    }
}
