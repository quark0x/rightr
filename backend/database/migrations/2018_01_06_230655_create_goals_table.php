<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("goals", function(Blueprint $table){
            $table->increments("goalId");
            $table->integer("userId")->unsigned();
            $table->string("value");
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign("userId")->references("userId")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("goals");
    }
}
