<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('berita', function(Blueprint $table){
        $table->increments('id');
        $table->string('title');
        $table->text('desc');
        $table->string('file');
        $table->integer('view')->default(0);
        $table->integer('flag')->default(0);
        $table->integer('id_kategori')->unsigned()->nullable();
        $table->integer('id_user')->unsigned()->nullable();
        $table->timestamps();
        $table->softdeletes();

        $table->foreign('id_kategori')->references('id')->on('cat_berita');
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
        Schema::dropIfExists('berita');
    }
}
