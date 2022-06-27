<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMFunctionalLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_functional_location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('functional_location')->nullable();
            $table->string('description')->nullable();
            $table->string('costcenter')->nullable();
            $table->string('area')->nullable();
            $table->string('company')->nullable();
            $table->string('plant')->nullable();
            $table->string('parenth1')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('m_functional_location');
    }
}
