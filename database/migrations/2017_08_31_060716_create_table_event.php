<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function(Blueprint $table){
          $table->increments('id');
          $table->string('nama_event');
          $table->string('lokasi');
          $table->date('tanggal_event');
          $table->text('desc');
          $table->integer('flag')->default(1);
          $table->integer('view')->default(0);
          $table->integer('id_user')->unsigned()->nullable();
          $table->timestamps();
          $table->softdeletes();

          $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
