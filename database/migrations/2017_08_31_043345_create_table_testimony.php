<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTestimony extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimony', function(Blueprint $table){
          $table->increments('id');
          $table->string('nama');
          $table->string('jabatan')->nullable();
          $table->string('perusahaan')->nullable();
          $table->text('desc')->nullable();
          $table->string('photo')->nullable();
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
        Schema::dropIfExists('testimony');
    }
}
