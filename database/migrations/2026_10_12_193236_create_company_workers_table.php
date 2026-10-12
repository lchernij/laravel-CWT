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
        Schema::create('company_workers', function (Blueprint $table) {
            $table->id();

            # Foreign key columns
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');
            
            # Timestamps and soft deletes
            $table->timestamps();
            $table->softDeletes();

            # Foreign key constraints
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            # Indexes for faster queries
            $table->index('company_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_workers');
    }
};
