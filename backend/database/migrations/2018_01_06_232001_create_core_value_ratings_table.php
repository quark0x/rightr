<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoreValueRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("core_value_ratings", function(Blueprint $table){
            $table->increments("coreValueRatingId");
            $table->integer("coreValueId")->unsigned();
            $table->integer("coreValueRating")->unsigned();
            $table->integer("userId")->unsigned();
            $table->integer("shoutoutId")->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign("coreValueId")->references("coreValueId")->on("core_values")->onDelete("cascade");
            $table->foreign("userId")->references("userId")->on("users")->onDelete("cascade");
            $table->foreign("shoutoutId")->references("shoutoutId")->on("shout_outs")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("core_value_ratings");
    }
}
