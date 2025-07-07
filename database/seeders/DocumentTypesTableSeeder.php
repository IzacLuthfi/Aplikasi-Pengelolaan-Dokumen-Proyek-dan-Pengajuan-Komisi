<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('document_types')->insert([
            ['name' => 'UAT Document'],
            ['name' => 'BAST Document'],
            ['name' => 'Technical Document'],
        ]);
    }
}
