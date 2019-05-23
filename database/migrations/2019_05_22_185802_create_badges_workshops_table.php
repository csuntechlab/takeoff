<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badges_workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('workshop_id')->unsigned()->index();
            $table->foreign('workshop_id')->references('id')->on('workshops')->onDelete('cascade');

            $table->integer('badge_id')->unsigned()->index();
            $table->foreign('badge_id')->references('id')->on('badges')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('badges_workshops');
    }
}
