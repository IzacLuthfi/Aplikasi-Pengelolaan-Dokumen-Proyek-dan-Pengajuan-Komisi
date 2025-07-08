<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkOrdersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('work_orders')->insert([
            [
                'title' => 'Proyek A',
                'value' => 10000000,
                'pm_id' => 2,
                'created_at' => now(),
            ],
        ]);
    }
}
