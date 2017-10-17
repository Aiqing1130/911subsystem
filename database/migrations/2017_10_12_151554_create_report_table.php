<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reporterName');
            $table->string('reporterNRIC');
            $table->string('reporterPhone');
            $table->string('location');
            $table->timestamps();
            $table->string('title');
            $table->string('nature');
            $table->text('description');
            $table->string('status');
            $table->integer('emergencyLevel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
