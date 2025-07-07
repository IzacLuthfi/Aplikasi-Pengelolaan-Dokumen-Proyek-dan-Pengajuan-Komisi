<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('document_requests', function (Blueprint $table) {
            $table->id();

            // Kolom yang diperlukan
            $table->string('file_bast')->nullable();
            $table->string('file_uat')->nullable();
            $table->unsignedBigInteger('pm_id'); // Pastikan juga kolom pm_id sesuai dengan relasi jika ada
            $table->dateTime('request_date');
            $table->string('status');
            $table->unsignedBigInteger('work_order_id'); // foreign key ke tabel work_orders

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('work_order_id')
                ->references('id')
                ->on('work_orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_requests');
    }
};
