<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_assignments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('work_order_id');

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('position_id')->references('id')->on('project_positions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('work_order_id')->references('id')->on('work_orders')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_assignments');
    }
};
