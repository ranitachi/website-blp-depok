<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // --- FLAG ---
        // 0 - Deactive
        // 1 - Active

        Schema::create('video', function(Blueprint $table){
          $table->increments('id');
          $table->string('title');
          $table->text('url');
          $table->integer('flag')->default(1);
          $table->timestamps();
          $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
}
