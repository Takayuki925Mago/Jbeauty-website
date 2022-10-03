<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->string('salon_name');
            $table->longText('salon_info');
            $table->longText('salon_other');
            $table->string('salon_instagram');
            $table->string('salon_facebook');
            $table->string('salon_twitter');
            $table->string('salon_tiktok');
            $table->string('salon_youtube');
            $table->string('other');
            $table->string('salon_logo');
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
        Schema::dropIfExists('salons');
    }
};
