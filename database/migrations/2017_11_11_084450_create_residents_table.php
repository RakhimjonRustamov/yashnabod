<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_number');
            $table->string('ownership_uz');
            $table->string('ownership_ru');
            $table->string('resident_name_uz');
            $table->string('resident_name_ru');
            $table->integer('code')->unsigned();
            $table->text('resident_info_uz');
            $table->text('resident_info_ru');
            $table->string('email');
            $table->string('resident_logo');
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
        Schema::dropIfExists('residents');
    }
}
