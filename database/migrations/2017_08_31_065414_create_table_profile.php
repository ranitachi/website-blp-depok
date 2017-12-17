<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function(Blueprint $table){
          $table->increments('id');
          $table->string('title')->nullable();
          $table->text('desc')->nullable();
          $table->string('category')->nullable();
          $table->integer('flag')->default(1);
          $table->integer('view')->default(0);
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
        Schema::dropIfExists('profile_baznas');
    }
}
