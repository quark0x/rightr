<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_teams', function(Blueprint $table){
           $table->increments("userTeamId");
           $table->integer('userId')->unsigned();
           $table->integer('teamId')->unsigned();
           
           $table->foreign("userId")->references("userId")->on("users")->onDelete("cascade");
           $table->foreign("teamId")->references("teamId")->on("teams")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("user_teams");
    }
}
