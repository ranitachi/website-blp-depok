<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStrukturOrg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('struktur_org', function(Blueprint $table){
        $table->increments('id');
        $table->string('picture');
        $table->text('desc')->nullable();
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
        Schema::dropIfExists('struktur_org');
    }
}
