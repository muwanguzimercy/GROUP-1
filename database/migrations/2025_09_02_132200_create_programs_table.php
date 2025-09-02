<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id(); // ProgramId
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('national_alignment')->nullable();
            $table->string('focus_areas')->nullable();
            $table->string('phases')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
