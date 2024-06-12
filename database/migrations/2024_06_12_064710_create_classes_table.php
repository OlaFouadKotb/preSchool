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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('ClassName', 100);
            $table->string('TeacherName', 100);
            $table->string('Title', 100);
            $table->string('TeacherImage', 100);
            $table->tinyInteger('Price');
            $table->tinyInteger('Age');
            $table->time('Time');
            $table->tinyInteger('Capacity');
            $table->foreignId('kid_id')->constrained('kids');
            $table->softDeletes();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
