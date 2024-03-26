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
        Schema::create('crouses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('teacher_id');
            $table->string('crouse_title');
            $table->string('price');
            $table->string('crouse_validation');
            $table->string('class_size');
            $table->string('class_duration');
            $table->string('total_seat');
            $table->string('short_description');
            $table->string('long_description');
            $table->string('status');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crouses');
    }
};