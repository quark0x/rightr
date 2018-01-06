<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoutOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("shout_outs", function(Blueprint $table){
            $table->increments("shoutoutId");
            $table->integer('receiver_userId')->unsigned();
            $table->integer('sender_userId')->unsigned();
            $table->string("comment");
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign("receiver_userId")->references("userId")->on("users")->onDelete("cascade");
            $table->foreign("sender_userId")->references("userId")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("shout_outs");
    }
}
