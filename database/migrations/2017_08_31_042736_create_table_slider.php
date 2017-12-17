<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSlider extends Migration
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

        Schema::create('slider', function(Blueprint $table){
          $table->increments('id');
          $table->string('title');
          $table->text('desc');
          $table->string('picture');
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
        Schema::dropIfExists('slider');
    }
}
