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
        Schema::create('worker_attendance_working_sites', function (Blueprint $table) {
            $table->id();

            // Foreign key constraints
            $table->foreignId('company_working_site_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // Attendance details
            $table->date('attendance_date');
            $table->time('attendance_time');
            $table->string('attendance_status')->default('in');

            // Timestamps and soft deletes
            $table->timestamps();
            $table->softDeletes();

            // Indexes for faster queries
            $table->index('company_working_site_id');
            $table->index('user_id');
            $table->index('attendance_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_attendance_working_sites');
    }
};
