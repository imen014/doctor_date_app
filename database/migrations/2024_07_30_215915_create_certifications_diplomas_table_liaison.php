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
        Schema::create('certifications_diplomas_table_liaison', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('certif_id');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('certif_id')->references('id')->on('certifications');
            $table->foreign('doctor_id')->references('id')->on('doctors');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications_diplomas_table_liaison');
    }
};
