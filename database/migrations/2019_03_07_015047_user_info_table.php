<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('title');
            $table->string('major')->nullable();
            $table->integer('units')->nullable();
            $table->string('grad_date')->nullable();
            $table->string('college')->nullable();
            $table->string('bio')->nullable();
            $table->string('research')->nullable();
            $table->string('fun_facts')->nullable();
            $table->string('academic_interest')->nullable();
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
        //
    }
}
