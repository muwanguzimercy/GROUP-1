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
      Schema::create('facilities', function (Blueprint $table) {
    $table->id(); // FacilityId
    $table->string('name');
    $table->string('location');
    $table->text('description')->nullable();
    $table->string('partner_organization')->nullable();
    $table->string('facility_type');
    $table->string('capabilities')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
