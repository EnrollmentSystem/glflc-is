<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('students', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('schoolyear_id')->nullable()->unsigned();
      $table->string('fname');
      $table->string('mname')->nullable();
      $table->string('lname');
      $table->string('age');
      $table->date('birthdate');
      $table->string('birthplace');
      $table->string('civilstatus');
      $table->integer('gender_id')->nullable()->unsigned();
      $table->string('religion');
      $table->string('citizenship');
      $table->string('address');
      $table->string('zipcode');
      $table->string('contactno');
      $table->string('email');
      $table->string('fathers_fname');
      $table->string('fathers_mname');
      $table->string('fathers_lname');
      $table->date('fathers_birthdate');
      $table->string('foccupation');
      $table->string('fcontactno');
      $table->string('mothers_fname');
      $table->string('mothers_mname');
      $table->string('mothers_lname');
      $table->date('mothers_birthdate');
      $table->string('moccupation');
      $table->string('mcontactno');
      $table->string('kinder');
      $table->string('kinder_yearGraduated');
      $table->string('elementary');
      $table->string('elementary_yearGraduated');
      $table->string('highschool');
      $table->string('highschool_yearGraduated');
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
    Schema::dropIfExists('students');
  }
}
