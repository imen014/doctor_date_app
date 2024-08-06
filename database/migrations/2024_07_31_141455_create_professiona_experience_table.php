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
        Schema::create('professiona_experience', function (Blueprint $table) {
            $table->id();
            $table->date('begin_date');
            $table->date('end_date');
            $table->date('organization');
            $table->string('task1');
            $table->string('task2');
            $table->string('task3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professiona_experience');
    }
};
