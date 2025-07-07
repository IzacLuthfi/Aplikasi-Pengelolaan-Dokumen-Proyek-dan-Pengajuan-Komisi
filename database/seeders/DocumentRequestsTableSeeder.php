<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentRequestsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('document_requests')->insert([
            [
                'work_order_id' => 1,
                'pm_id' => 2,
                'request_date' => now(),
                'status' => 'Menunggu',
                'file_uat' => '',
                'file_bast' => '',
            ],
        ]);
    }
}
