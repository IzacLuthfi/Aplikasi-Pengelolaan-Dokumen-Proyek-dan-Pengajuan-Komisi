<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthlyCommissionReportsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('monthly_commission_reports')->insert([
            [
                'user_id' => 3,
                'month_year' => '2025-07',
                'total_commission' => 1000000,
            ],
        ]);
    }
}
