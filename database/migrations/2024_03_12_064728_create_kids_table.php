<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKidsTable extends Migration
{
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->id(); // Creates an unsigned BIGINT primary key by default
            $table->string('Name', 100); // String column 'Name' with max length 100
            $table->date('Birthday'); // Date column 'Birthday'
            $table->tinyInteger('Age'); // Tiny integer column 'Age'
            $table->unsignedBigInteger('class_id'); // Unsigned big integer 'class_id'
            $table->unsignedBigInteger('guardian_id'); // Unsigned big integer 'guardian_id'
            $table->softDeletes(); // Adds soft delete column
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns

            // Foreign key constraints
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('guardian_id')->references('id')->on('guardians')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kids');
    }
}
