<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilepicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilepics', function (Blueprint $table){
           $table->increments('profilepicId');
           $table->binary('file');
           $table->string('fileName');
           $table->string('mimeType');
           $table->integer('imageHeight')->unsigned();
           $table->integer('imageWidth')->unsigned();
           $table->timestamps();
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilepics');
    }
}
