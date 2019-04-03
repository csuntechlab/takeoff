<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('major');
            $table->integer('units');
            $table->string('grad_date');
            $table->string('college');
            $table->string('bio');
            $table->string('research');
            $table->string('fun_facts');
            $table->string('academic_interest');
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
