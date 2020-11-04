<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Guru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaguru');
            $table->string('guruimg_path');
			$table->string('status');
			$table->string('email', 100)->unique();
			$table->string('description');
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
              Schema::dropIfExists('gurus');
    }
}
