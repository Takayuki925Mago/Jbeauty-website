<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_data', function (Blueprint $table) {
            $table->id();
            $table->string('image_name');
            $table->foreignId('salon_id')->constrained('salon_data');
            $table->foreignId('professional_id')->constrained('professional_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_data');
    }
};
