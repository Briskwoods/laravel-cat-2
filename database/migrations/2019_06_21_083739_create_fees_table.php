<?php

Schema::enableForeignKeyConstraints();

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_last_name');
            $table->string('name_of_payer');
            $table->unsignedInteger('student_number');            
            $table->integer('amount_paid');
            $table->timestamps();
            $table->foreign('student_number')->references('student_number')->on('students');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
