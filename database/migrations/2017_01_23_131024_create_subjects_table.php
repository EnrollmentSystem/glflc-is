<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('subjects', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('grade');
      $table->string('subjectCode');
      $table->string('subjectDesc');
      $table->time('schedTime');
      $table->string('schedDay');
      $table->string('room');
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
    Schema::dropIfExists('subjects');
  }
}
