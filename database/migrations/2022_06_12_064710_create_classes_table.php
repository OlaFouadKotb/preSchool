<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name', 100);
            $table->unsignedBigInteger('teacher_id');
            $table->string('title', 100);
            $table->tinyInteger('price');
            $table->tinyInteger('age');
            $table->time('time');
            $table->tinyInteger('capacity');
            $table->softDeletes();
            $table->timestamps();

            // Foreign key constraint for teacher
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });

        Schema::create('class_kid', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('kid_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('kid_id')->references('id')->on('kids')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_kid');
        Schema::dropIfExists('classes');
    }
};
