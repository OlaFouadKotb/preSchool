<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassKidsTable extends Migration
{
    public function up()
    {
        Schema::create('class_kids', function (Blueprint $table) {
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

        Schema::dropIfExists('class_kids');
    }
}
