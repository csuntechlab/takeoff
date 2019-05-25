<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesWorkshopsUserinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badges_workshops_userinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('badges_workshops_id')->unsigned()->index();
            $table->foreign('badges_workshops_id')->references('id')->on('badges_workshops')->onDelete('cascade');

            $table->integer('user_info_id')->unsigned()->index();
            $table->foreign('user_info_id')->references('id')->on('user_info')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('badges_workshops_userinfo');
    }
}
