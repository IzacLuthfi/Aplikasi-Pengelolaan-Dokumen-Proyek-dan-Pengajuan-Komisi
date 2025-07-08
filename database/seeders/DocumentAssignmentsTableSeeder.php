<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentAssignmentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('document_assignments')->insert([
            [
                'document_id' => 1,
                'user_id' => 3,
            ],
        ]);
    }
}
