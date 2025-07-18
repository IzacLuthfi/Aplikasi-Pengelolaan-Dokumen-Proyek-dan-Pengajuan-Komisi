<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Contoh: 'Project Manager', 'Developer', dst.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_positions');
    }
};
