<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectDocumentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('project_documents')->insert([
            [
                'request_id' => 1,
                'document_type_id' => 1,
                'due_date' => now()->addDays(7),
                'final_link' => '',
                'status' => 'Ditugaskan',
                'progress_percentage' => 0,
            ],
        ]);
    }
}
