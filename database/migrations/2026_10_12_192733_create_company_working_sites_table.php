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
        Schema::create('company_working_sites', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id');

            $table->string('name')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            
            # The location column is a geography type with SRID 4326
            $table->geography('location', 'POINT', 4326);
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->index(['location'], 'company_working_sites_location_index', 'GIST');
            $table->index('city');
            $table->index('state');
            $table->index('zip_code');
            $table->index('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_working_sites');
    }
};
