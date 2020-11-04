<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courses');
            $table->timestamps();
            $table->string('picture_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('galleries');
    }
}
