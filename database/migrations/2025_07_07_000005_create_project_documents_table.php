<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_documents', function (Blueprint $table) {
            $table->id();

            // Foreign key ke tabel document_types
            $table->unsignedBigInteger('document_type_id');
            // Foreign key ke tabel document_requests
            $table->unsignedBigInteger('request_id');

            // Kolom tambahan
            $table->dateTime('due_date');
            $table->string('final_link')->nullable();
            $table->integer('progress_percentage')->default(0);
            $table->string('status')->default('Ditugaskan');

            $table->timestamps();

            // Constraints
            $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('cascade');
            $table->foreign('request_id')->references('id')->on('document_requests')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_documents');
    }
};
