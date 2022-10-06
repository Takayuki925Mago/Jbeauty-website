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
        Schema::table('professionals', function (Blueprint $table) {
            $table->longText('diploma')->nullable();
            $table->longText('message');
            $table->string('professional_instagram')->nullable();
            $table->string('professional_facebook')->nullable();
            $table->string('professional_twitter')->nullable();
            $table->string('professional_tiktok')->nullable();
            $table->string('professional_youtube')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professionals', function (Blueprint $table) {
            //
        });
    }
};
