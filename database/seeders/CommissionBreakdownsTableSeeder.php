<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommissionBreakdownsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('commission_breakdowns')->insert([
            [
                'commission_id' => 1,
                'user_id' => 3,
                'percentage' => 10,
                'final_amount' => 1000000,
            ],
        ]);
    }
}
